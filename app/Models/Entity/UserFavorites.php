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
 * 用户收藏表

 * @Entity()
 * @Table(name="user_favorites")
 * @uses      UserFavorites
 */
class UserFavorites extends Model
{
    /**
     * @var int $id 
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var int $userId 用户 id
     * @Column(name="user_id", type="integer", default=0)
     */
    private $userId;

    /**
     * @var string $title 收藏内容的标题
     * @Column(name="title", type="string", length=64, default="")
     */
    private $title;

    /**
     * @var string $url 收藏内容的原文地址，不带域名
     * @Column(name="url", type="string", length=128, default="")
     */
    private $url;

    /**
     * @var string $description 收藏内容的描述
     * @Column(name="description", type="string", length=128, default="")
     */
    private $description;

    /**
     * @var string $table 收藏实体以前所在表，不带前缀
     * @Column(name="table", type="string", length=64, default="")
     */
    private $table;

    /**
     * @var int $objectId 收藏内容原来的主键id
     * @Column(name="object_id", type="integer", default=0)
     */
    private $objectId;

    /**
     * @var int $createtime 收藏时间
     * @Column(name="createtime", type="integer", default=0)
     */
    private $createtime;

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
     * 用户 id
     * @param int $value
     * @return $this
     */
    public function setUserId(int $value): self
    {
        $this->userId = $value;

        return $this;
    }

    /**
     * 收藏内容的标题
     * @param string $value
     * @return $this
     */
    public function setTitle(string $value): self
    {
        $this->title = $value;

        return $this;
    }

    /**
     * 收藏内容的原文地址，不带域名
     * @param string $value
     * @return $this
     */
    public function setUrl(string $value): self
    {
        $this->url = $value;

        return $this;
    }

    /**
     * 收藏内容的描述
     * @param string $value
     * @return $this
     */
    public function setDescription(string $value): self
    {
        $this->description = $value;

        return $this;
    }

    /**
     * 收藏实体以前所在表，不带前缀
     * @param string $value
     * @return $this
     */
    public function setTable(string $value): self
    {
        $this->table = $value;

        return $this;
    }

    /**
     * 收藏内容原来的主键id
     * @param int $value
     * @return $this
     */
    public function setObjectId(int $value): self
    {
        $this->objectId = $value;

        return $this;
    }

    /**
     * 收藏时间
     * @param int $value
     * @return $this
     */
    public function setCreatetime(int $value): self
    {
        $this->createtime = $value;

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
     * 用户 id
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * 收藏内容的标题
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * 收藏内容的原文地址，不带域名
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * 收藏内容的描述
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * 收藏实体以前所在表，不带前缀
     * @return string
     */
    public function getTable()
    {
        return $this->table;
    }

    /**
     * 收藏内容原来的主键id
     * @return int
     */
    public function getObjectId()
    {
        return $this->objectId;
    }

    /**
     * 收藏时间
     * @return int
     */
    public function getCreatetime()
    {
        return $this->createtime;
    }

}
