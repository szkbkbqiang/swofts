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
 * 用户表

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
     * @var string $username 用户名
     * @Column(name="username", type="string", length=64, default="")
     */
    private $username;

    /**
     * @var string $password 密码
     * @Column(name="password", type="string", length=64)
     * @Required()
     */
    private $password;

    /**
     * @var string $nickname 昵称
     * @Column(name="nickname", type="string", length=64, default="")
     */
    private $nickname;

    /**
     * @var string $phone 手机号
     * @Column(name="phone", type="string", length=16)
     * @Required()
     */
    private $phone;

    /**
     * @var string $email 登录邮箱
     * @Column(name="email", type="string", length=64, default="")
     */
    private $email;

    /**
     * @var string $icon 用户头像
     * @Column(name="icon", type="string", length=128, default="")
     */
    private $icon;

    /**
     * @var int $gender 性别
     * @Column(name="gender", type="tinyint", default=0)
     */
    private $gender;

    /**
     * @var string $signature 个性签名
     * @Column(name="signature", type="string", length=64, default="")
     */
    private $signature;

    /**
     * @var int $userType 1:admin 2:普通会员
     * @Column(name="user_type", type="tinyint", default=2)
     */
    private $userType;

    /**
     * @var int $isBlack 是否拉黑：0 否，1 是
     * @Column(name="is_black", type="tinyint", default=0)
     */
    private $isBlack;

    /**
     * @var string $lastLoginIp 上次登录IP
     * @Column(name="last_login_ip", type="string", length=16, default="")
     */
    private $lastLoginIp;

    /**
     * @var int $lastLoginTime 上次登录时间
     * @Column(name="last_login_time", type="integer", default=0)
     */
    private $lastLoginTime;

    /**
     * @var int $isActive 是否激活：0 否，1 是
     * @Column(name="is_active", type="tinyint", default=0)
     */
    private $isActive;

    /**
     * @var string $createTime 注册时间
     * @Column(name="create_time", type="timestamp", default="CURRENT_TIMESTAMP")
     */
    private $createTime;

    /**
     * @var string $updateTime 更新时间
     * @Column(name="update_time", type="timestamp", default="CURRENT_TIMESTAMP")
     */
    private $updateTime;

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
     * 用户名
     * @param string $value
     * @return $this
     */
    public function setUsername(string $value): self
    {
        $this->username = $value;

        return $this;
    }

    /**
     * 密码
     * @param string $value
     * @return $this
     */
    public function setPassword(string $value): self
    {
        $this->password = $value;

        return $this;
    }

    /**
     * 昵称
     * @param string $value
     * @return $this
     */
    public function setNickname(string $value): self
    {
        $this->nickname = $value;

        return $this;
    }

    /**
     * 手机号
     * @param string $value
     * @return $this
     */
    public function setPhone(string $value): self
    {
        $this->phone = $value;

        return $this;
    }

    /**
     * 登录邮箱
     * @param string $value
     * @return $this
     */
    public function setEmail(string $value): self
    {
        $this->email = $value;

        return $this;
    }

    /**
     * 用户头像
     * @param string $value
     * @return $this
     */
    public function setIcon(string $value): self
    {
        $this->icon = $value;

        return $this;
    }

    /**
     * 性别
     * @param int $value
     * @return $this
     */
    public function setGender(int $value): self
    {
        $this->gender = $value;

        return $this;
    }

    /**
     * 个性签名
     * @param string $value
     * @return $this
     */
    public function setSignature(string $value): self
    {
        $this->signature = $value;

        return $this;
    }

    /**
     * 1:admin 2:普通会员
     * @param int $value
     * @return $this
     */
    public function setUserType(int $value): self
    {
        $this->userType = $value;

        return $this;
    }

    /**
     * 是否拉黑：0 否，1 是
     * @param int $value
     * @return $this
     */
    public function setIsBlack(int $value): self
    {
        $this->isBlack = $value;

        return $this;
    }

    /**
     * 上次登录IP
     * @param string $value
     * @return $this
     */
    public function setLastLoginIp(string $value): self
    {
        $this->lastLoginIp = $value;

        return $this;
    }

    /**
     * 上次登录时间
     * @param int $value
     * @return $this
     */
    public function setLastLoginTime(int $value): self
    {
        $this->lastLoginTime = $value;

        return $this;
    }

    /**
     * 是否激活：0 否，1 是
     * @param int $value
     * @return $this
     */
    public function setIsActive(int $value): self
    {
        $this->isActive = $value;

        return $this;
    }

    /**
     * 注册时间
     * @param string $value
     * @return $this
     */
    public function setCreateTime(string $value): self
    {
        $this->createTime = $value;

        return $this;
    }

    /**
     * 更新时间
     * @param string $value
     * @return $this
     */
    public function setUpdateTime(string $value): self
    {
        $this->updateTime = $value;

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
     * 用户名
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * 密码
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * 昵称
     * @return string
     */
    public function getNickname()
    {
        return $this->nickname;
    }

    /**
     * 手机号
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * 登录邮箱
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * 用户头像
     * @return string
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * 性别
     * @return int
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * 个性签名
     * @return string
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * 1:admin 2:普通会员
     * @return mixed
     */
    public function getUserType()
    {
        return $this->userType;
    }

    /**
     * 是否拉黑：0 否，1 是
     * @return int
     */
    public function getIsBlack()
    {
        return $this->isBlack;
    }

    /**
     * 上次登录IP
     * @return string
     */
    public function getLastLoginIp()
    {
        return $this->lastLoginIp;
    }

    /**
     * 上次登录时间
     * @return int
     */
    public function getLastLoginTime()
    {
        return $this->lastLoginTime;
    }

    /**
     * 是否激活：0 否，1 是
     * @return int
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * 注册时间
     * @return mixed
     */
    public function getCreateTime()
    {
        return $this->createTime;
    }

    /**
     * 更新时间
     * @return mixed
     */
    public function getUpdateTime()
    {
        return $this->updateTime;
    }

}
