<?php
/**
 * user: zhang.shangshang@tslsmart.com
 * Date: 2019/5/10 上午9:00
 */

namespace App\Controllers\Api;


use App\Bean\Containers;
use App\Models\Logic\UserLogic;
use Swoft\App;
use Swoft\Bean\Annotation\Inject;
use Swoft\Http\Message\Server\Response;
use Swoft\Http\Server\Bean\Annotation\Controller;
use Swoft\Http\Server\Bean\Annotation\RequestMapping;

/**
 * @Controller(prefix="/api/index")
 */
class IndexController
{

    /**
     * @RequestMapping(route="bean")
     */
    public function bean()
    {
        $container = App::getBean(Containers::class);
        $container->setName("MicleFeng");
        return $container->getName();
    }

    /**
     * @Inject()
     * @var UserLogic
     */
    private $userLogic;

    /**
     * @RequestMapping(route="user")
     * @param Response $response
     * @return Response
     * @throws \Swoft\Exception\ValidatorException
     */
    public function getUser(Response $response): Response
    {
        $data = [
            'name' => 'miclefengzss',
            'age' => 1,
            'email' => 'miclefengzss@gmail.com',
        ];
        $this->userLogic->validate($data);
        return $response->json($data);
    }

    /**
     * @RequestMapping(route="produceKafka")
     */
    public function produceKafka(Response $response): Response
    {
        date_default_timezone_set('PRC');
        $config = \Kafka\ProducerConfig::getInstance();
        $config->setMetadataRefreshIntervalMs(10000);
        $config->setMetadataBrokerList('127.0.0.1:9092');
        $config->setBrokerVersion('1.0.0');
        $config->setRequiredAck(1);
        $config->setIsAsyn(false);
        $config->setProduceInterval(500);
        $producer = new \Kafka\Producer(
            function() {
                return [
                    [
                        'topic' => 'test',
                        'value' => 'test....message.',
                        'key' => 'testkey',
                    ],
                ];
            }
        );

        $producer->success(function($result) {
            var_dump($result, 111);
        });
        $producer->error(function($errorCode) {
            var_dump($errorCode, 2222);
        });
        $producer->send(true);
        $response->withContent('');
    }

    /**
     * @RequestMapping(route="consumeKafka")
     */
    public function consumeKafka()
    {
        $config = \Kafka\ConsumerConfig::getInstance();
        $config->setMetadataRefreshIntervalMs(10000);
        $config->setMetadataBrokerList('127.0.0.1:9092');
        $config->setGroupId('test');
        $config->setBrokerVersion('1.0.0');
        $config->setTopics(['test']);

        $consumer = new \Kafka\Consumer();
        $consumer->start(function($topic, $part, $message) {
            var_dump($message);
        });
    }
}