<?php
/**
 * user: zhang.shangshang@tslsmart.com
 * Date: 2019/5/13 下午2:47
 */

namespace App\Controllers\Admin;


use Swoft\Http\Server\Bean\Annotation\Controller;
use Swoft\Http\Server\Bean\Annotation\RequestMapping;
use Swoft\View\Bean\Annotation\View;

/**
 * @Controller(prefix="/backend/index")
 * Class IndexController
 * @package App\Controllers\Admin
 */
class IndexController
{

    /**
     * @RequestMapping(route="index")
     * @View(template="backend/index/index")
     */
    public function Index()
    {
        return [];
    }
}