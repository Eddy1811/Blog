<?php
include '../app/persistances/blogPostData.php';

$lastPosts = lastBlogPosts ($pdo);

include '../ressources/views/home.tpl.php';



//$lastPosts = lastBlogPosts($pdo);
//
//var_dump($lastPosts);
