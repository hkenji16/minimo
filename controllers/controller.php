<?php

require_once('models/PostManager.php');

function mainPage() {
    $postManager = new PostManager();
    $posts = $postManager->getPosts();

    require ('views/accueil.php');
}

function article()
{
    $postManager = new PostManager();

    $post = $postManager->getPost($_GET['id']);

    require('views/article.php');
}

function category()
{
    $postManager = new PostManager();
    $posts = $postManager->getCategory($_GET['name']);

    require('views/category.php');
}