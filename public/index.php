<?= "Bienvenue sur le blog" ?>
<?php
include '../config/database.php';

$action = filter_input(INPUT_GET,'action',FILTER_SANITIZE_SPECIAL_CHARS);
$action = $action ?? "Accueil";



switch ($action) {
    /*$case "Contact" :
        require '../ressources/views/                   AREMPLACER.php';
        break;

    case "Hobby" :
        require '../ressources/views/                   AREMPLACER.php';
        break;*/

    case "Accueil" :
        require '../app/controllers/homeController.php';
        break;
/*
    default :
        require '../app/controllers/';*/
}

