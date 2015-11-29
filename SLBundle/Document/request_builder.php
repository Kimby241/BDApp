<?php
namespace BDApp\SLBundle\Document;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document
 */
class Request_builder
{
    /**
     * @MongoDB\Id
     */
    protected $id;

    /**
     * @MongoDB\Field(name="key_words", type="collection")
     */
    protected $key_words;

    /**
     * @MongoDB\Field(name="user_opt", type="bool")
     */
    protected $user_opt;

    /**
     * @MongoDB\Field(name="tags_opt", type="bool")
     */
    protected $tags_opt;

    /**
     * @MongoDB\Field(name="content_opt", type="bool")
     */
    protected $content_opt;

    /**
     * Get id
     *
     * @return id $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set keyWords
     *
     * @param collection $keyWords
     * @return self
     */
    public function setKeyWords($keyWords)
    {
        $this->key_words = $keyWords;
        return $this;
    }

    /**
     * Get keyWords
     *
     * @return collection $keyWords
     */
    public function getKeyWords()
    {
        return $this->key_words;
    }

    /**
     * Set userOpt
     *
     * @param bool $userOpt
     * @return self
     */
    public function setUserOpt($userOpt)
    {
        $this->user_opt = $userOpt;
        return $this;
    }

    /**
     * Get userOpt
     *
     * @return bool $userOpt
     */
    public function getUserOpt()
    {
        return $this->user_opt;
    }

    /**
     * Set tagsOpt
     *
     * @param bool $tagsOpt
     * @return self
     */
    public function setTagsOpt($tagsOpt)
    {
        $this->tags_opt = $tagsOpt;
        return $this;
    }

    /**
     * Get tagsOpt
     *
     * @return bool $tagsOpt
     */
    public function getTagsOpt()
    {
        return $this->tags_opt;
    }

    /**
     * Set contentOpt
     *
     * @param bool $contentOpt
     * @return self
     */
    public function setContentOpt($contentOpt)
    {
        $this->content_opt = $contentOpt;
        return $this;
    }

    /**
     * Get contentOpt
     *
     * @return bool $contentOpt
     */
    public function getContentOpt()
    {
        return $this->content_opt;
    }
}
