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
 * 文章和标签的中中间关联表

 * @Entity()
 * @Table(name="article_tags")
 * @uses      ArticleTags
 */
class ArticleTags extends Model
{
    /**
     * @var int $id 
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var int $tagsId 标签ID
     * @Column(name="tags_id", type="integer", default=0)
     */
    private $tagsId;

    /**
     * @var int $articleId 文章ID
     * @Column(name="article_id", type="integer", default=0)
     */
    private $articleId;

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
     * 标签ID
     * @param int $value
     * @return $this
     */
    public function setTagsId(int $value): self
    {
        $this->tagsId = $value;

        return $this;
    }

    /**
     * 文章ID
     * @param int $value
     * @return $this
     */
    public function setArticleId(int $value): self
    {
        $this->articleId = $value;

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
     * 标签ID
     * @return int
     */
    public function getTagsId()
    {
        return $this->tagsId;
    }

    /**
     * 文章ID
     * @return int
     */
    public function getArticleId()
    {
        return $this->articleId;
    }

}
