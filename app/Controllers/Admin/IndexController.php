<?php
/**
 * User: zhang.shangshang@tslsmart.com
 * Date: 2019/5/13 下午2:47
 */

namespace App\Controllers\Admin;


use Swoft\Http\Server\Bean\Annotation\Controller;
use Swoft\Http\Server\Bean\Annotation\RequestMapping;

/**
 * @Controller(prefix="/admin/index")
 * Class IndexController
 * @package App\Controllers\Admin
 */
class IndexController
{

    /**
     * @RequestMapping(route="index")
     */
    public function Index()
    {

    }
}