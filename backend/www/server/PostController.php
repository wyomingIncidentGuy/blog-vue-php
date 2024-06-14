<?php
include_once 'Post.php';

class PostController{
    private $postModel;

    public function __construct($mysqli){
        $this->postModel = new Post($mysqli);
    }

    public function getPosts(){
        $posts = $this->postModel->getAllPosts();
        header('Content-Type: application/json');
        echo json_encode($posts);
    }

    public function addPost($id, $heading, $theme, $date, $body){
        $this->postModel->addNewPost($id, $heading, $theme, $date, $body);
    }

    public function updatePost(){

    }

    public function deletePost(){

    }
}