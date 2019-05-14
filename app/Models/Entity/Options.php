<?php
namespace App\Models\Entity;

use Swoft\Db\Model;
use Swoft\Db\Bean\Annotation\Column;
use Swoft\Db\Bean\Annotation\Entity;
use Swoft\Db\Bean\Annotation\Id;
use Swoft\Db\Bean\Annotation\Required;
use Swoft\Db\Bean\Annotation\Table;
use Swoft\Db\Types;

/**
 * 全站配置表

 * @Entity()
 * @Table(name="options")
 * @uses      Options
 */
class Options extends Model
{
    /**
     * @var int $id 
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var string $name 配置名
     * @Column(name="name", type="string", length=32, default="")
     */
    private $name;

    /**
     * @var string $value 配置值
     * @Column(name="value", type="string", length=64, default="")
     */
    private $value;

    /**
     * @var int $autoload 是否自动加载
     * @Column(name="autoload", type="tinyint", default=1)
     */
    private $autoload;

    /**
     * @param int $value
     * @return $this
     */
    public function setId(int $value)
    {
        $this->id = $value;

        return $this;
    }

    /**
     * 配置名
     * @param string $value
     * @return $this
     */
    public function setName(string $value): self
    {
        $this->name = $value;

        return $this;
    }

    /**
     * 配置值
     * @param string $value
     * @return $this
     */
    public function setValue(string $value): self
    {
        $this->value = $value;

        return $this;
    }

    /**
     * 是否自动加载
     * @param int $value
     * @return $this
     */
    public function setAutoload(int $value): self
    {
        $this->autoload = $value;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * 配置名
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * 配置值
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * 是否自动加载
     * @return mixed
     */
    public function getAutoload()
    {
        return $this->autoload;
    }

}
