<?php

require_once('models/PostManager.php');

function mainPage() {
    $postManager = new PostManager();
    $posts = $postManager->getPosts();

    require ('views/accueil.php');
}