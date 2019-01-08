<?php

require('controllers/controller.php');

try {
    if (isset($_GET['action'])) {

    }
    else {
        mainPage();
    }
}
catch(Exception $e) {
    echo 'Erreur : ' . $e->getMessage();
}