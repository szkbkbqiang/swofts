<?php
/**
 * User: zhang.shangshang@tslsmart.com
 * Date: 2019/5/15 上午9:35
 */

namespace App\Controllers\Admin;


use Swoft\Http\Server\Bean\Annotation\Controller;
use Swoft\Http\Server\Bean\Annotation\RequestMapping;
use Swoft\View\Bean\Annotation\View;

/**
 * @Controller(prefix="/backend/login")
 * Class LoginController
 * @package App\Controllers\Admin
 */
class LoginController
{

    /**
     * @RequestMapping(route="index")
     * @View(template="backend/login/index")
     */
    public function index()
    {
        $copyRightYear = date("Y");
        return compact("copyRightYear");
    }

    /**
     * @RequestMapping(route="resetPassword")
     * @View(template="backend/login/reset-password")
     */
    public function resetPassword()
    {
        $copyRightYear = date("Y");
        return compact("copyRightYear");
    }
}