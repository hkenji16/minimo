<?php

require('controllers/controller.php');

try {
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'post') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                article();
            }
            else {
                throw new Exception("Chemin non valide");
            }
        }
    }
    else {
        mainPage();
    }
}
catch(Exception $e) {
    echo 'Erreur : ' . $e->getMessage();
}