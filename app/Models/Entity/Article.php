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
 * 文章表

 * @Entity()
 * @Table(name="article")
 * @uses      Article
 */
class Article extends Model
{
    /**
     * @var int $id 
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var int $cateId 分类ID
     * @Column(name="cate_id", type="integer", default=0)
     */
    private $cateId;

    /**
     * @var int $userId 发布者的ID
     * @Column(name="user_id", type="integer", default=0)
     */
    private $userId;

    /**
     * @var string $title 文章标题
     * @Column(name="title", type="string", length=64, default="")
     */
    private $title;

    /**
     * @var string $excerpt 文章摘要
     * @Column(name="excerpt", type="string", length=256, default="")
     */
    private $excerpt;

    /**
     * @var string $keywords 搜索文章的关键字
     * @Column(name="keywords", type="string", length=128, default="")
     */
    private $keywords;

    /**
     * @var string $img 文章图片路径
     * @Column(name="img", type="string", length=128, default="")
     */
    private $img;

    /**
     * @var string $content 文章内容
     * @Column(name="content", type="text", length=65535)
     * @Required()
     */
    private $content;

    /**
     * @var int $hits 点击数（查看数）
     * @Column(name="hits", type="integer", default=0)
     */
    private $hits;

    /**
     * @var int $praise 点赞数
     * @Column(name="praise", type="integer", default=0)
     */
    private $praise;

    /**
     * @var int $status 0:未审核 1：已审核
     * @Column(name="status", type="tinyint", default=0)
     */
    private $status;

    /**
     * @var int $isTop 是否置顶 1：置顶 0：不置顶
     * @Column(name="is_top", type="tinyint", default=1)
     */
    private $isTop;

    /**
     * @var int $allowComment 是否允许评论 1：允许 0：不允许
     * @Column(name="allow_comment", type="tinyint", default=1)
     */
    private $allowComment;

    /**
     * @var int $recommended 是否推荐 1：推荐 0：不推荐
     * @Column(name="recommended", type="tinyint", default=1)
     */
    private $recommended;

    /**
     * @var string $author 作者
     * @Column(name="author", type="string", length=32, default="")
     */
    private $author;

    /**
     * @var string $original 文章来源
     * @Column(name="original", type="string", length=32, default="")
     */
    private $original;

    /**
     * @var string $originalUrl 原文地址
     * @Column(name="original_url", type="string", length=128, default="")
     */
    private $originalUrl;

    /**
     * @var int $isDeleted 是否删除：0 否，1 是
     * @Column(name="is_deleted", type="tinyint", default=0)
     */
    private $isDeleted;

    /**
     * @var int $updateTime 文章更新时间
     * @Column(name="update_time", type="integer", default=0)
     */
    private $updateTime;

    /**
     * @var int $createTime 文章添加时间
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
     * 分类ID
     * @param int $value
     * @return $this
     */
    public function setCateId(int $value): self
    {
        $this->cateId = $value;

        return $this;
    }

    /**
     * 发布者的ID
     * @param int $value
     * @return $this
     */
    public function setUserId(int $value): self
    {
        $this->userId = $value;

        return $this;
    }

    /**
     * 文章标题
     * @param string $value
     * @return $this
     */
    public function setTitle(string $value): self
    {
        $this->title = $value;

        return $this;
    }

    /**
     * 文章摘要
     * @param string $value
     * @return $this
     */
    public function setExcerpt(string $value): self
    {
        $this->excerpt = $value;

        return $this;
    }

    /**
     * 搜索文章的关键字
     * @param string $value
     * @return $this
     */
    public function setKeywords(string $value): self
    {
        $this->keywords = $value;

        return $this;
    }

    /**
     * 文章图片路径
     * @param string $value
     * @return $this
     */
    public function setImg(string $value): self
    {
        $this->img = $value;

        return $this;
    }

    /**
     * 文章内容
     * @param string $value
     * @return $this
     */
    public function setContent(string $value): self
    {
        $this->content = $value;

        return $this;
    }

    /**
     * 点击数（查看数）
     * @param int $value
     * @return $this
     */
    public function setHits(int $value): self
    {
        $this->hits = $value;

        return $this;
    }

    /**
     * 点赞数
     * @param int $value
     * @return $this
     */
    public function setPraise(int $value): self
    {
        $this->praise = $value;

        return $this;
    }

    /**
     * 0:未审核 1：已审核
     * @param int $value
     * @return $this
     */
    public function setStatus(int $value): self
    {
        $this->status = $value;

        return $this;
    }

    /**
     * 是否置顶 1：置顶 0：不置顶
     * @param int $value
     * @return $this
     */
    public function setIsTop(int $value): self
    {
        $this->isTop = $value;

        return $this;
    }

    /**
     * 是否允许评论 1：允许 0：不允许
     * @param int $value
     * @return $this
     */
    public function setAllowComment(int $value): self
    {
        $this->allowComment = $value;

        return $this;
    }

    /**
     * 是否推荐 1：推荐 0：不推荐
     * @param int $value
     * @return $this
     */
    public function setRecommended(int $value): self
    {
        $this->recommended = $value;

        return $this;
    }

    /**
     * 作者
     * @param string $value
     * @return $this
     */
    public function setAuthor(string $value): self
    {
        $this->author = $value;

        return $this;
    }

    /**
     * 文章来源
     * @param string $value
     * @return $this
     */
    public function setOriginal(string $value): self
    {
        $this->original = $value;

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
     * 是否删除：0 否，1 是
     * @param int $value
     * @return $this
     */
    public function setIsDeleted(int $value): self
    {
        $this->isDeleted = $value;

        return $this;
    }

    /**
     * 文章更新时间
     * @param int $value
     * @return $this
     */
    public function setUpdateTime(int $value): self
    {
        $this->updateTime = $value;

        return $this;
    }

    /**
     * 文章添加时间
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
     * 分类ID
     * @return int
     */
    public function getCateId()
    {
        return $this->cateId;
    }

    /**
     * 发布者的ID
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * 文章标题
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * 文章摘要
     * @return string
     */
    public function getExcerpt()
    {
        return $this->excerpt;
    }

    /**
     * 搜索文章的关键字
     * @return string
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * 文章图片路径
     * @return string
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * 文章内容
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * 点击数（查看数）
     * @return int
     */
    public function getHits()
    {
        return $this->hits;
    }

    /**
     * 点赞数
     * @return int
     */
    public function getPraise()
    {
        return $this->praise;
    }

    /**
     * 0:未审核 1：已审核
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * 是否置顶 1：置顶 0：不置顶
     * @return mixed
     */
    public function getIsTop()
    {
        return $this->isTop;
    }

    /**
     * 是否允许评论 1：允许 0：不允许
     * @return mixed
     */
    public function getAllowComment()
    {
        return $this->allowComment;
    }

    /**
     * 是否推荐 1：推荐 0：不推荐
     * @return mixed
     */
    public function getRecommended()
    {
        return $this->recommended;
    }

    /**
     * 作者
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * 文章来源
     * @return string
     */
    public function getOriginal()
    {
        return $this->original;
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
     * 是否删除：0 否，1 是
     * @return int
     */
    public function getIsDeleted()
    {
        return $this->isDeleted;
    }

    /**
     * 文章更新时间
     * @return int
     */
    public function getUpdateTime()
    {
        return $this->updateTime;
    }

    /**
     * 文章添加时间
     * @return int
     */
    public function getCreateTime()
    {
        return $this->createTime;
    }

}
