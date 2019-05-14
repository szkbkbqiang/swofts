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
 * url路由表

 * @Entity()
 * @Table(name="route")
 * @uses      Route
 */
class Route extends Model
{
    /**
     * @var int $id 路由id
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var string $fullUrl 完整url， 如：portal/list/index?id=1
     * @Column(name="full_url", type="string", length=128, default="")
     */
    private $fullUrl;

    /**
     * @var string $url 实际显示的url
     * @Column(name="url", type="string", length=128, default="")
     */
    private $url;

    /**
     * @var int $listorder 排序，优先级，越小优先级越高
     * @Column(name="listorder", type="integer", default=0)
     */
    private $listorder;

    /**
     * @var int $status 状态，1：启用 ;0：不启用
     * @Column(name="status", type="tinyint", default=1)
     */
    private $status;

    /**
     * 路由id
     * @param int $value
     * @return $this
     */
    public function setId(int $value)
    {
        $this->id = $value;

        return $this;
    }

    /**
     * 完整url， 如：portal/list/index?id=1
     * @param string $value
     * @return $this
     */
    public function setFullUrl(string $value): self
    {
        $this->fullUrl = $value;

        return $this;
    }

    /**
     * 实际显示的url
     * @param string $value
     * @return $this
     */
    public function setUrl(string $value): self
    {
        $this->url = $value;

        return $this;
    }

    /**
     * 排序，优先级，越小优先级越高
     * @param int $value
     * @return $this
     */
    public function setListorder(int $value): self
    {
        $this->listorder = $value;

        return $this;
    }

    /**
     * 状态，1：启用 ;0：不启用
     * @param int $value
     * @return $this
     */
    public function setStatus(int $value): self
    {
        $this->status = $value;

        return $this;
    }

    /**
     * 路由id
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * 完整url， 如：portal/list/index?id=1
     * @return string
     */
    public function getFullUrl()
    {
        return $this->fullUrl;
    }

    /**
     * 实际显示的url
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * 排序，优先级，越小优先级越高
     * @return int
     */
    public function getListorder()
    {
        return $this->listorder;
    }

    /**
     * 状态，1：启用 ;0：不启用
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

}
