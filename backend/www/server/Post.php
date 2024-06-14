<?php
    class Post{
        private $link;

        public function __construct($link){
            $this->link = $link;
        }

        public function getAllPosts(){
            $result = mysqli_query($this->link, 'SELECT * FROM Posts');
            return $result->fetch_array(MYSQLI_ASSOC);
        }

        public function addNewPost($id, $heading, $theme, $date, $body){
            $stmt = mysqli_prepare($this->link,"INSERT INTO Posts (ID, heading, theme, postDate, body) VALUES (?,?,?,?,?)");
            $stmt->bind_param('sssss',$id, $heading, $theme, $date, $body);
            return $stmt->execute();
        }

        public function updatePost(){

        }

        public function deletePost(){

        }

    }