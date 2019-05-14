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
 * 留言表

 * @Entity()
 * @Table(name="guestbook")
 * @uses      Guestbook
 */
class Guestbook extends Model
{
    /**
     * @var int $id 
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var string $username 留言者姓名
     * @Column(name="username", type="string", length=32, default="")
     */
    private $username;

    /**
     * @var string $email 留言者邮箱
     * @Column(name="email", type="string", length=64, default="")
     */
    private $email;

    /**
     * @var string $title 留言标题
     * @Column(name="title", type="string", length=64, default="")
     */
    private $title;

    /**
     * @var string $msg 留言内容
     * @Column(name="msg", type="string", length=256, default="")
     */
    private $msg;

    /**
     * @var int $createTime 留言时间
     * @Column(name="create_time", type="integer", default=0)
     */
    private $createTime;

    /**
     * @var int $status 留言状态，1：正常，0：删除
     * @Column(name="status", type="tinyint", default=1)
     */
    private $status;

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
     * 留言者姓名
     * @param string $value
     * @return $this
     */
    public function setUsername(string $value): self
    {
        $this->username = $value;

        return $this;
    }

    /**
     * 留言者邮箱
     * @param string $value
     * @return $this
     */
    public function setEmail(string $value): self
    {
        $this->email = $value;

        return $this;
    }

    /**
     * 留言标题
     * @param string $value
     * @return $this
     */
    public function setTitle(string $value): self
    {
        $this->title = $value;

        return $this;
    }

    /**
     * 留言内容
     * @param string $value
     * @return $this
     */
    public function setMsg(string $value): self
    {
        $this->msg = $value;

        return $this;
    }

    /**
     * 留言时间
     * @param int $value
     * @return $this
     */
    public function setCreateTime(int $value): self
    {
        $this->createTime = $value;

        return $this;
    }

    /**
     * 留言状态，1：正常，0：删除
     * @param int $value
     * @return $this
     */
    public function setStatus(int $value): self
    {
        $this->status = $value;

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
     * 留言者姓名
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * 留言者邮箱
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * 留言标题
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * 留言内容
     * @return string
     */
    public function getMsg()
    {
        return $this->msg;
    }

    /**
     * 留言时间
     * @return int
     */
    public function getCreateTime()
    {
        return $this->createTime;
    }

    /**
     * 留言状态，1：正常，0：删除
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

}
