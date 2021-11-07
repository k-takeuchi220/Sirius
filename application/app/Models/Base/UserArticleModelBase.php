<?php
namespace App\Models\Base;

use Illuminate\Database\Eloquent\Model;

class UserArticleModelBase extends Model
{
    protected $table = 'user_article';

    public function getId()
    {
        return $this->id;
    }

    public function setId($userArticle)
    {
        $this->id = $userArticle;
    }
    public function getUserId()
    {
        return $this->user_id;
    }

    public function setUserId($userArticle)
    {
        $this->user_id = $userArticle;
    }
    public function getArticleId()
    {
        return $this->article_id;
    }

    public function setArticleId($userArticle)
    {
        $this->article_id = $userArticle;
    }
    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($userArticle)
    {
        $this->title = $userArticle;
    }
    public function getContent()
    {
        return $this->content;
    }

    public function setContent($userArticle)
    {
        $this->content = $userArticle;
    }
    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($userArticle)
    {
        $this->status = $userArticle;
    }
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    public function setCreatedAt($userArticle)
    {
        $this->created_at = $userArticle;
    }
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    public function setUpdatedAt($userArticle)
    {
        $this->updated_at = $userArticle;
    }
}
