<?php



include '../app/persistances/blogPostData.php';

$postid = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);


echo $postid;

if (!empty($_POST)) {

    $title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_SPECIAL_CHARS);
    $content = filter_input(INPUT_POST, 'content', FILTER_SANITIZE_SPECIAL_CHARS);


    blogPostUpdate ($pdo, $postid, $title, $content);



}


    include '../ressources/views/blogPostUpdate.tpl.php';