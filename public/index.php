<?= "Bienvenue sur le blog" ?>
<?php

$action = filter_input(INPUT_GET,'page',FILTER_SANITIZE_SPECIAL_CHARS);
$action = $action ?? "Accueil";


switch ($action) {
    case "Contact" :
        require '../ressources/views/                   AREMPLACER.php';
        break;

    case "Hobby" :
        require '../ressources/views/                   AREMPLACER.php';
        break;

    case "Accueil" :
        require '../ressources/views/                   AREMPLACER.php';
        break;

    default :
        require '../ressources/views/                   AREMPLACER.php';
}



