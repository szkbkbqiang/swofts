<?php
/**
 * This file is part of Swoft.
 *
 * @link https://swoft.org
 * @document https://doc.swoft.org
 * @contact group@swoft.org
 * @license https://github.com/swoft-cloud/swoft/blob/master/LICENSE
 */

namespace App\Models\Logic;

use App\Models\Validates\UserValidate;
use Swoft\Bean\Annotation\Bean;
use Swoft\Bean\Annotation\Inject;
use Swoft\Exception\ValidatorException;

/**
 * 用户逻辑层
 * 同时可以被controller server task使用
 *
 * @Bean()
 * @uses      UserLogic
 * @version   2017年10月15日
 * @author    stelin <phpcrazy@126.com>
 * @copyright Copyright 2010-2016 swoft software
 * @license   PHP Version 7.x {@link http://www.php.net/license/3_0.txt}
 */
class UserLogic
{

    /**
     * @Inject()
     * @var UserValidate
     */
   private $userValidate;

    /**
     * @param array $data
     * @throws ValidatorException
     */
    public function validate(array $data)
    {
        if (!$this->userValidate->scene('create')->check($data)) {
            throw new ValidatorException($this->userValidate->getError());
        }
    }
}