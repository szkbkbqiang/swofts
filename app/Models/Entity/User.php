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
 * @Table(name="user")
 * @uses      User
 */
class User extends Model
{
    /**
     * @var int $id 
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var string $username 
     * @Column(name="username", type="string", length=32)
     */
    private $username;

    /**
     * @var string $phone 
     * @Column(name="phone", type="char", length=11)
     * @Required()
     */
    private $phone;

    /**
     * @var int $goal 
     * @Column(name="goal", type="integer")
     * @Required()
     */
    private $goal;

    /**
     * @var string $address 
     * @Column(name="address", type="string", length=128)
     */
    private $address;

    /**
     * @var int $birthday 
     * @Column(name="birthday", type="integer")
     */
    private $birthday;

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
    public function setUsername(string $value): self
    {
        $this->username = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setPhone(string $value): self
    {
        $this->phone = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setGoal(int $value): self
    {
        $this->goal = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setAddress(string $value): self
    {
        $this->address = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setBirthday(int $value): self
    {
        $this->birthday = $value;

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
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @return int
     */
    public function getGoal()
    {
        return $this->goal;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @return int
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

}
