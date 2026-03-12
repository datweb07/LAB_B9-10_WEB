<?php

abstract class Post {
    protected $id;
    protected $title;
    protected $content;
    protected $created_at;

    public function __construct($id = null, $title = '', $content = '', $created_at = null) {
        $this->id = $id;
        $this->title = $title;
        $this->content = $content;
        $this->created_at = $created_at;
    }

    //getters
    public function getId() {
        return $this->id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getContent() {
        return $this->content;
    }

    public function getCreatedAt() {
        return $this->created_at;
    }

    //setter
    public function setId($id) {
        $this->id = $id;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function setContent($content) {
        $this->content = $content;
    }

    public function setCreatedAt($created_at) {
        $this->created_at = $created_at;
    }

    abstract public function getAllPosts();
    abstract public function createPost($title, $content);
}
?>
