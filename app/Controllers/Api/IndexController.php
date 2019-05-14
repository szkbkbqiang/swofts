<?php
/**
 * User: zhang.shangshang@tslsmart.com
 * Date: 2019/5/10 上午9:00
 */

namespace App\Controllers\Api;


use App\Bean\Containers;
use App\Models\Logic\UserLogic;
use Swoft\App;
use Swoft\Bean\Annotation\Inject;
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
     * @var Containers
     */
    private $container;

    /**
     * @RequestMapping(route="bean1")
     */
    public function getBean()
    {
        $this->container->setName("MicleFengZss");
        return $this->container->getName();
    }

    /**
     * @Inject()
     * @var UserLogic
     */
    private $userLogic;

    /**
     * @RequestMapping(route="user")
     * @throws \Swoft\Exception\ValidatorException
     */
    public function getUser()
    {
        $data = [
            'name' => 'miclefengzss',
            'age' => 0,
            'email' => 'miclefengzss@gmail.com',
        ];
        $this->userLogic->validate($data);
    }
}