<?php
/**
 * User: zhang.shangshang@tslsmart.com
 * Date: 2019/5/10 上午9:00
 */

namespace App\Controllers\Api;


use App\Bean\Containers;
use App\Models\Data\UserData;
use Swoft\App;
use Swoft\Bean\Annotation\Inject;
use Swoft\Http\Server\Bean\Annotation\Controller;
use Swoft\Http\Server\Bean\Annotation\RequestMapping;

/**
 * @Controller(prefix="/api")
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
     * @var UserData
     */
    private $userData;

    /**
     * @RequestMapping(route="user")
     */
    public function getUser()
    {
        return $this->userData->getUserInfo();
    }
}