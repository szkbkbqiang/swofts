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
 * 第三方用户表

 * @Entity()
 * @Table(name="oauth_user")
 * @uses      OauthUser
 */
class OauthUser extends Model
{
    /**
     * @var int $id 
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var string $from 用户来源key
     * @Column(name="from", type="string", length=32, default="")
     */
    private $from;

    /**
     * @var string $name 第三方昵称
     * @Column(name="name", type="string", length=32, default="")
     */
    private $name;

    /**
     * @var string $headImg 第三方用户头像
     * @Column(name="head_img", type="string", length=128, default="")
     */
    private $headImg;

    /**
     * @var int $createTime 绑定时间
     * @Column(name="create_time", type="integer", default=0)
     */
    private $createTime;

    /**
     * @var int $lastLoginTime 最后登录时间
     * @Column(name="last_login_time", type="integer", default=0)
     */
    private $lastLoginTime;

    /**
     * @var string $lastLoginIp 最后登录ip
     * @Column(name="last_login_ip", type="string", length=16, default="")
     */
    private $lastLoginIp;

    /**
     * @var int $loginTimes 登录次数
     * @Column(name="login_times", type="integer", default=0)
     */
    private $loginTimes;

    /**
     * @var int $status 
     * @Column(name="status", type="tinyint", default=0)
     */
    private $status;

    /**
     * @var string $accessToken 用户登录的TOken
     * @Column(name="access_token", type="string", length=128, default="")
     */
    private $accessToken;

    /**
     * @var int $expire access_token过期时间
     * @Column(name="expire", type="integer", default=0)
     */
    private $expire;

    /**
     * @var string $openid 第三方用户id
     * @Column(name="openid", type="string", length=48, default="")
     */
    private $openid;

    /**
     * @var int $userId 关联的本站用户id
     * @Column(name="user_id", type="integer", default=0)
     */
    private $userId;

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
     * 用户来源key
     * @param string $value
     * @return $this
     */
    public function setFrom(string $value): self
    {
        $this->from = $value;

        return $this;
    }

    /**
     * 第三方昵称
     * @param string $value
     * @return $this
     */
    public function setName(string $value): self
    {
        $this->name = $value;

        return $this;
    }

    /**
     * 第三方用户头像
     * @param string $value
     * @return $this
     */
    public function setHeadImg(string $value): self
    {
        $this->headImg = $value;

        return $this;
    }

    /**
     * 绑定时间
     * @param int $value
     * @return $this
     */
    public function setCreateTime(int $value): self
    {
        $this->createTime = $value;

        return $this;
    }

    /**
     * 最后登录时间
     * @param int $value
     * @return $this
     */
    public function setLastLoginTime(int $value): self
    {
        $this->lastLoginTime = $value;

        return $this;
    }

    /**
     * 最后登录ip
     * @param string $value
     * @return $this
     */
    public function setLastLoginIp(string $value): self
    {
        $this->lastLoginIp = $value;

        return $this;
    }

    /**
     * 登录次数
     * @param int $value
     * @return $this
     */
    public function setLoginTimes(int $value): self
    {
        $this->loginTimes = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setStatus(int $value): self
    {
        $this->status = $value;

        return $this;
    }

    /**
     * 用户登录的TOken
     * @param string $value
     * @return $this
     */
    public function setAccessToken(string $value): self
    {
        $this->accessToken = $value;

        return $this;
    }

    /**
     * access_token过期时间
     * @param int $value
     * @return $this
     */
    public function setExpire(int $value): self
    {
        $this->expire = $value;

        return $this;
    }

    /**
     * 第三方用户id
     * @param string $value
     * @return $this
     */
    public function setOpenid(string $value): self
    {
        $this->openid = $value;

        return $this;
    }

    /**
     * 关联的本站用户id
     * @param int $value
     * @return $this
     */
    public function setUserId(int $value): self
    {
        $this->userId = $value;

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
     * 用户来源key
     * @return string
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * 第三方昵称
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * 第三方用户头像
     * @return string
     */
    public function getHeadImg()
    {
        return $this->headImg;
    }

    /**
     * 绑定时间
     * @return int
     */
    public function getCreateTime()
    {
        return $this->createTime;
    }

    /**
     * 最后登录时间
     * @return int
     */
    public function getLastLoginTime()
    {
        return $this->lastLoginTime;
    }

    /**
     * 最后登录ip
     * @return string
     */
    public function getLastLoginIp()
    {
        return $this->lastLoginIp;
    }

    /**
     * 登录次数
     * @return int
     */
    public function getLoginTimes()
    {
        return $this->loginTimes;
    }

    /**
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * 用户登录的TOken
     * @return string
     */
    public function getAccessToken()
    {
        return $this->accessToken;
    }

    /**
     * access_token过期时间
     * @return int
     */
    public function getExpire()
    {
        return $this->expire;
    }

    /**
     * 第三方用户id
     * @return string
     */
    public function getOpenid()
    {
        return $this->openid;
    }

    /**
     * 关联的本站用户id
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }

}
