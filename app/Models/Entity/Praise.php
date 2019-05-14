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
 * 点赞记录表

 * @Entity()
 * @Table(name="praise")
 * @uses      Praise
 */
class Praise extends Model
{
    /**
     * @var int $id 
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var string $ip 点赞的用户ip
     * @Column(name="ip", type="string", length=16, default="")
     */
    private $ip;

    /**
     * @var int $createTime 点赞时间
     * @Column(name="create_time", type="integer", default=0)
     */
    private $createTime;

    /**
     * @var int $type 点赞类型 0：游客 1：本站用户
     * @Column(name="type", type="tinyint", default=0)
     */
    private $type;

    /**
     * @var int $userId 用户id
     * @Column(name="user_id", type="integer", default=0)
     */
    private $userId;

    /**
     * @var int $articleId 文章id
     * @Column(name="article_id", type="integer", default=0)
     */
    private $articleId;

    /**
     * @var int $validTime 有效时间 本站用户保留一小时 游客保留一天
     * @Column(name="valid_time", type="integer", default=0)
     */
    private $validTime;

    /**
     * @var int $nums 点击次数
     * @Column(name="nums", type="integer", default=0)
     */
    private $nums;

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
     * 点赞的用户ip
     * @param string $value
     * @return $this
     */
    public function setIp(string $value): self
    {
        $this->ip = $value;

        return $this;
    }

    /**
     * 点赞时间
     * @param int $value
     * @return $this
     */
    public function setCreateTime(int $value): self
    {
        $this->createTime = $value;

        return $this;
    }

    /**
     * 点赞类型 0：游客 1：本站用户
     * @param int $value
     * @return $this
     */
    public function setType(int $value): self
    {
        $this->type = $value;

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
     * 文章id
     * @param int $value
     * @return $this
     */
    public function setArticleId(int $value): self
    {
        $this->articleId = $value;

        return $this;
    }

    /**
     * 有效时间 本站用户保留一小时 游客保留一天
     * @param int $value
     * @return $this
     */
    public function setValidTime(int $value): self
    {
        $this->validTime = $value;

        return $this;
    }

    /**
     * 点击次数
     * @param int $value
     * @return $this
     */
    public function setNums(int $value): self
    {
        $this->nums = $value;

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
     * 点赞的用户ip
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * 点赞时间
     * @return int
     */
    public function getCreateTime()
    {
        return $this->createTime;
    }

    /**
     * 点赞类型 0：游客 1：本站用户
     * @return int
     */
    public function getType()
    {
        return $this->type;
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
     * 文章id
     * @return int
     */
    public function getArticleId()
    {
        return $this->articleId;
    }

    /**
     * 有效时间 本站用户保留一小时 游客保留一天
     * @return int
     */
    public function getValidTime()
    {
        return $this->validTime;
    }

    /**
     * 点击次数
     * @return int
     */
    public function getNums()
    {
        return $this->nums;
    }

}
