<?php
/**
 * This file is part of Swoft.
 *
 * @link https://swoft.org
 * @document https://doc.swoft.org
 * @contact group@swoft.org
 * @license https://github.com/swoft-cloud/swoft/blob/master/LICENSE
 */

namespace App\Models\Dao;

use App\Models\Entity\User;
use Swoft\Bean\Annotation\Bean;

/**
 *
 * @Bean()
 * @uses      UserDao
 * @version   2017年04月25日
 * @author    stelin <phpcrazy@126.com>
 * @copyright Copyright 2010-2016 Swoft software
 * @license   PHP Version 7.x {@link http://www.php.net/license/3_0.txt}
 */
class UserDao
{
    public function getUserInfo()
    {
        $result = User::findAll([['username', 'like', '%张%']], ['orderby' => ['id' => 'DESC'], 'limit' => 10])->getResult();
        return $result;
    }
}
