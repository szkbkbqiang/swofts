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

        return $response->json('');
    }

    /**
     * @RequestMapping(route="consumeKafka")
     */
    public function consumeKafka(Response $response): Response
    {

        return $response->json('');
    }
}