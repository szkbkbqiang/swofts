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
 * 文章分类表

 * @Entity()
 * @Table(name="category")
 * @uses      Category
 */
class Category extends Model
{
    /**
     * @var int $id 分类id
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var int $pid 分类父id
     * @Column(name="pid", type="integer", default=0)
     */
    private $pid;

    /**
     * @var string $name 分类名称
     * @Column(name="name", type="string", length=64, default="")
     */
    private $name;

    /**
     * @var int $type 分类类型
     * @Column(name="type", type="tinyint", default=0)
     */
    private $type;

    /**
     * @var string $description 分类描述
     * @Column(name="description", type="string", length=256, default="")
     */
    private $description;

    /**
     * @var int $count 分类文章数
     * @Column(name="count", type="integer", default=0)
     */
    private $count;

    /**
     * @var int $weight 排序
     * @Column(name="weight", type="integer", default=0)
     */
    private $weight;

    /**
     * @var int $status 是否启用 1：启用 0：不启用
     * @Column(name="status", type="tinyint", default=1)
     */
    private $status;

    /**
     * 分类id
     * @param int $value
     * @return $this
     */
    public function setId(int $value)
    {
        $this->id = $value;

        return $this;
    }

    /**
     * 分类父id
     * @param int $value
     * @return $this
     */
    public function setPid(int $value): self
    {
        $this->pid = $value;

        return $this;
    }

    /**
     * 分类名称
     * @param string $value
     * @return $this
     */
    public function setName(string $value): self
    {
        $this->name = $value;

        return $this;
    }

    /**
     * 分类类型
     * @param int $value
     * @return $this
     */
    public function setType(int $value): self
    {
        $this->type = $value;

        return $this;
    }

    /**
     * 分类描述
     * @param string $value
     * @return $this
     */
    public function setDescription(string $value): self
    {
        $this->description = $value;

        return $this;
    }

    /**
     * 分类文章数
     * @param int $value
     * @return $this
     */
    public function setCount(int $value): self
    {
        $this->count = $value;

        return $this;
    }

    /**
     * 排序
     * @param int $value
     * @return $this
     */
    public function setWeight(int $value): self
    {
        $this->weight = $value;

        return $this;
    }

    /**
     * 是否启用 1：启用 0：不启用
     * @param int $value
     * @return $this
     */
    public function setStatus(int $value): self
    {
        $this->status = $value;

        return $this;
    }

    /**
     * 分类id
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * 分类父id
     * @return int
     */
    public function getPid()
    {
        return $this->pid;
    }

    /**
     * 分类名称
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * 分类类型
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * 分类描述
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * 分类文章数
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * 排序
     * @return int
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * 是否启用 1：启用 0：不启用
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

}
