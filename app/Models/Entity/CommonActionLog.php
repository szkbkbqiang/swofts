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
 * 访问记录表

 * @Entity()
 * @Table(name="common_action_log")
 * @uses      CommonActionLog
 */
class CommonActionLog extends Model
{
    /**
     * @var int $id 
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var int $userId 用户id
     * @Column(name="user_id", type="integer", default=0)
     */
    private $userId;

    /**
     * @var string $object 访问对象的id,格式：不带前缀的表名+id;如posts1表示xx_posts表里id为1的记录
     * @Column(name="object", type="string", length=128, default="")
     */
    private $object;

    /**
     * @var string $action 操作名称；格式规定为：应用名+控制器+操作名；也可自己定义格式只要不发生冲突且惟一；
     * @Column(name="action", type="string", length=64, default="")
     */
    private $action;

    /**
     * @var int $count 访问次数
     * @Column(name="count", type="integer", default=0)
     */
    private $count;

    /**
     * @var int $lastTime 最后访问的时间戳
     * @Column(name="last_time", type="integer", default=0)
     */
    private $lastTime;

    /**
     * @var string $ip 访问者最后访问ip
     * @Column(name="ip", type="string", length=16, default="")
     */
    private $ip;

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
     * 用户id
     * @param int $value
     * @return $this
     */
    public function setUserId(int $value): self
    {
        $this->userId = $value;

        return $this;
    }

    /**
     * 访问对象的id,格式：不带前缀的表名+id;如posts1表示xx_posts表里id为1的记录
     * @param string $value
     * @return $this
     */
    public function setObject(string $value): self
    {
        $this->object = $value;

        return $this;
    }

    /**
     * 操作名称；格式规定为：应用名+控制器+操作名；也可自己定义格式只要不发生冲突且惟一；
     * @param string $value
     * @return $this
     */
    public function setAction(string $value): self
    {
        $this->action = $value;

        return $this;
    }

    /**
     * 访问次数
     * @param int $value
     * @return $this
     */
    public function setCount(int $value): self
    {
        $this->count = $value;

        return $this;
    }

    /**
     * 最后访问的时间戳
     * @param int $value
     * @return $this
     */
    public function setLastTime(int $value): self
    {
        $this->lastTime = $value;

        return $this;
    }

    /**
     * 访问者最后访问ip
     * @param string $value
     * @return $this
     */
    public function setIp(string $value): self
    {
        $this->ip = $value;

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
     * 用户id
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * 访问对象的id,格式：不带前缀的表名+id;如posts1表示xx_posts表里id为1的记录
     * @return string
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * 操作名称；格式规定为：应用名+控制器+操作名；也可自己定义格式只要不发生冲突且惟一；
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * 访问次数
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * 最后访问的时间戳
     * @return int
     */
    public function getLastTime()
    {
        return $this->lastTime;
    }

    /**
     * 访问者最后访问ip
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }

}
