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
 * @Entity()
 * @Table(name="goods")
 * @uses      Goods
 */
class Goods extends Model
{
    /**
     * @var int $id 
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var string $goodsNo 
     * @Column(name="goods_no", type="string", length=32)
     * @Required()
     */
    private $goodsNo;

    /**
     * @var float $price 
     * @Column(name="price", type="decimal")
     * @Required()
     */
    private $price;

    /**
     * @var float $sell 
     * @Column(name="sell", type="decimal")
     * @Required()
     */
    private $sell;

    /**
     * @var int $category 
     * @Column(name="category", type="integer")
     * @Required()
     */
    private $category;

    /**
     * @var float $size 
     * @Column(name="size", type="decimal")
     * @Required()
     */
    private $size;

    /**
     * @var string $color 
     * @Column(name="color", type="string", length=16)
     * @Required()
     */
    private $color;

    /**
     * @var int $store 
     * @Column(name="store", type="integer")
     * @Required()
     */
    private $store;

    /**
     * @var int $sold 
     * @Column(name="sold", type="integer")
     * @Required()
     */
    private $sold;

    /**
     * @var int $firm 
     * @Column(name="firm", type="integer")
     * @Required()
     */
    private $firm;

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
     * @param string $value
     * @return $this
     */
    public function setGoodsNo(string $value): self
    {
        $this->goodsNo = $value;

        return $this;
    }

    /**
     * @param float $value
     * @return $this
     */
    public function setPrice(float $value): self
    {
        $this->price = $value;

        return $this;
    }

    /**
     * @param float $value
     * @return $this
     */
    public function setSell(float $value): self
    {
        $this->sell = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setCategory(int $value): self
    {
        $this->category = $value;

        return $this;
    }

    /**
     * @param float $value
     * @return $this
     */
    public function setSize(float $value): self
    {
        $this->size = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setColor(string $value): self
    {
        $this->color = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setStore(int $value): self
    {
        $this->store = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setSold(int $value): self
    {
        $this->sold = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setFirm(int $value): self
    {
        $this->firm = $value;

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
     * @return string
     */
    public function getGoodsNo()
    {
        return $this->goodsNo;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return float
     */
    public function getSell()
    {
        return $this->sell;
    }

    /**
     * @return int
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @return float
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @return int
     */
    public function getStore()
    {
        return $this->store;
    }

    /**
     * @return int
     */
    public function getSold()
    {
        return $this->sold;
    }

    /**
     * @return int
     */
    public function getFirm()
    {
        return $this->firm;
    }

}
