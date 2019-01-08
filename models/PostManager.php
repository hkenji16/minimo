<?php
require_once('models/Manager.php');

class PostManager extends Manager
{
    public function getPosts()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT id, post_author, post_content, post_title, post_status, post_name, post_type, post_category FROM posts WHERE post_type = \'article\'');

        return $req;
    }
}