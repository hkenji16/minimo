<?php
require_once('models/Manager.php');

class PostManager extends Manager
{
    public function getPosts()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT id, post_author, post_content, post_title, post_status, post_name, post_type, post_category, image_name FROM posts WHERE post_type = \'article\'');

        return $req;
    }

    public function getPost($postId)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, post_author, post_content, post_title, post_status, post_name, post_type, post_category, image_name FROM posts WHERE id = ?');
        $req->execute(array($postId));
        $post = $req->fetch();

        return $post;
    }
}