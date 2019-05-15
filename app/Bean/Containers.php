<?php
/**
 * user: zhang.shangshang@tslsmart.com
 * Date: 2019/5/10 上午8:56
 */

namespace App\Bean;


use Swoft\Bean\Annotation\Bean;

/**
 * Class Containers
 * @Bean()
 */
class Containers
{

    private $name;

    public function setName(string $value)
    {
        $this->name = $value;
    }

    public function getName(): string
    {
        return $this->name . " - " . time();
    }
}