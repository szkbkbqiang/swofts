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
 * 评论表

 * @Entity()
 * @Table(name="comments")
 * @uses      Comments
 */
class Comments extends Model
{
    /**
     * @var int $id 
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var int $userId 发表评论的用户id
     * @Column(name="user_id", type="integer", default=0)
     */
    private $userId;

    /**
     * @var int $toUserId 被评论的用户id
     * @Column(name="to_user_id", type="integer", default=0)
     */
    private $toUserId;

    /**
     * @var string $username 评论者昵称
     * @Column(name="username", type="string", length=32, default="")
     */
    private $username;

    /**
     * @var string $originalUrl 原文地址
     * @Column(name="original_url", type="string", length=128, default="")
     */
    private $originalUrl;

    /**
     * @var string $email 评论者邮箱
     * @Column(name="email", type="string", length=64, default="")
     */
    private $email;

    /**
     * @var string $content 评论内容
     * @Column(name="content", type="text", length=65535)
     * @Required()
     */
    private $content;

    /**
     * @var int $pid 被回复的评论id  父类ID 0为最高级
     * @Column(name="pid", type="integer", default=0)
     */
    private $pid;

    /**
     * @var int $status 状态，1已审核，0未审核
     * @Column(name="status", type="tinyint", default=1)
     */
    private $status;

    /**
     * @var int $articleId 文章id
     * @Column(name="article_id", type="integer", default=0)
     */
    private $articleId;

    /**
     * @var int $postId 上一次评论的id
     * @Column(name="post_id", type="integer", default=0)
     */
    private $postId;

    /**
     * @var int $createTime 评论时间
     * @Column(name="create_time", type="integer", default=0)
     */
    private $createTime;

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
     * 发表评论的用户id
     * @param int $value
     * @return $this
     */
    public function setUserId(int $value): self
    {
        $this->userId = $value;

        return $this;
    }

    /**
     * 被评论的用户id
     * @param int $value
     * @return $this
     */
    public function setToUserId(int $value): self
    {
        $this->toUserId = $value;

        return $this;
    }

    /**
     * 评论者昵称
     * @param string $value
     * @return $this
     */
    public function setUsername(string $value): self
    {
        $this->username = $value;

        return $this;
    }

    /**
     * 原文地址
     * @param string $value
     * @return $this
     */
    public function setOriginalUrl(string $value): self
    {
        $this->originalUrl = $value;

        return $this;
    }

    /**
     * 评论者邮箱
     * @param string $value
     * @return $this
     */
    public function setEmail(string $value): self
    {
        $this->email = $value;

        return $this;
    }

    /**
     * 评论内容
     * @param string $value
     * @return $this
     */
    public function setContent(string $value): self
    {
        $this->content = $value;

        return $this;
    }

    /**
     * 被回复的评论id  父类ID 0为最高级
     * @param int $value
     * @return $this
     */
    public function setPid(int $value): self
    {
        $this->pid = $value;

        return $this;
    }

    /**
     * 状态，1已审核，0未审核
     * @param int $value
     * @return $this
     */
    public function setStatus(int $value): self
    {
        $this->status = $value;

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
     * 上一次评论的id
     * @param int $value
     * @return $this
     */
    public function setPostId(int $value): self
    {
        $this->postId = $value;

        return $this;
    }

    /**
     * 评论时间
     * @param int $value
     * @return $this
     */
    public function setCreateTime(int $value): self
    {
        $this->createTime = $value;

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
     * 发表评论的用户id
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * 被评论的用户id
     * @return int
     */
    public function getToUserId()
    {
        return $this->toUserId;
    }

    /**
     * 评论者昵称
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * 原文地址
     * @return string
     */
    public function getOriginalUrl()
    {
        return $this->originalUrl;
    }

    /**
     * 评论者邮箱
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * 评论内容
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * 被回复的评论id  父类ID 0为最高级
     * @return int
     */
    public function getPid()
    {
        return $this->pid;
    }

    /**
     * 状态，1已审核，0未审核
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
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
     * 上一次评论的id
     * @return int
     */
    public function getPostId()
    {
        return $this->postId;
    }

    /**
     * 评论时间
     * @return int
     */
    public function getCreateTime()
    {
        return $this->createTime;
    }

}
