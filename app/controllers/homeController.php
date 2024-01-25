<?php
global $pdo;
include '../app/persistances/blogPostData.php';

$lastPosts = lastBlogPosts ($pdo);

var_dump ($lastPosts);

include '../ressources/views/home.tpl.php';



//$lastPosts = lastBlogPosts($pdo);
//
//var_dump($lastPosts);
