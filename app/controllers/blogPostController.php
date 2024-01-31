<?php
include '../app/persistances/blogPostData.php';

$id = filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT);

$post = blogPostById($pdo,$id);

$comment = commentsByBlogPost($pdo, $id);

include '../ressources/views/blogpost.tpl.php';