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
 * 规则表

 * @Entity()
 * @Table(name="auth_rule")
 * @uses      AuthRule
 */
class AuthRule extends Model
{
    /**
     * @var int $id 
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var string $name 规则唯一标识 列如：Admin/User/index 模块/控制器/方法
     * @Column(name="name", type="string", length=32, default="")
     */
    private $name;

    /**
     * @var string $title 规则中文名称
     * @Column(name="title", type="string", length=64, default="")
     */
    private $title;

    /**
     * @var int $status 状态：为1正常，为0禁用
     * @Column(name="status", type="tinyint", default=1)
     */
    private $status;

    /**
     * @var int $pid 父类规则ID
     * @Column(name="pid", type="integer", default=0)
     */
    private $pid;

    /**
     * @var string $condition 
     * @Column(name="condition", type="string", length=256, default="")
     */
    private $condition;

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
     * 规则唯一标识 列如：Admin/User/index 模块/控制器/方法
     * @param string $value
     * @return $this
     */
    public function setName(string $value): self
    {
        $this->name = $value;

        return $this;
    }

    /**
     * 规则中文名称
     * @param string $value
     * @return $this
     */
    public function setTitle(string $value): self
    {
        $this->title = $value;

        return $this;
    }

    /**
     * 状态：为1正常，为0禁用
     * @param int $value
     * @return $this
     */
    public function setStatus(int $value): self
    {
        $this->status = $value;

        return $this;
    }

    /**
     * 父类规则ID
     * @param int $value
     * @return $this
     */
    public function setPid(int $value): self
    {
        $this->pid = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setCondition(string $value): self
    {
        $this->condition = $value;

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
     * 规则唯一标识 列如：Admin/User/index 模块/控制器/方法
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * 规则中文名称
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * 状态：为1正常，为0禁用
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * 父类规则ID
     * @return int
     */
    public function getPid()
    {
        return $this->pid;
    }

    /**
     * @return string
     */
    public function getCondition()
    {
        return $this->condition;
    }

}
