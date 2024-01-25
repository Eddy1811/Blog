<?php
global $pdo;
include '../app/persistances/blogPostData.php';


$lastPosts = lastBlogPosts($pdo);

var_dump($lastPosts);


echo 'Hello world';