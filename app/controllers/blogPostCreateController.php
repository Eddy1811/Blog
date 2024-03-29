<?php
include '../app/persistances/blogPostData.php';

global $pdo;

$autorInfo = findauthors($pdo);

if (!empty($_POST)) {

    $title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_SPECIAL_CHARS);
    $content = filter_input(INPUT_POST, 'content', FILTER_SANITIZE_SPECIAL_CHARS);
    $author = filter_input(INPUT_POST, 'authorId', FILTER_SANITIZE_NUMBER_INT);

    blogPostCreate($pdo, $title, $content, $author);

} else {
    include '../ressources/views/blogPostCreate.tpl.php';
}