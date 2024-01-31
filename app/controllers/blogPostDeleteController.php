<?php

include '../app/persistances/blogPostData.php';



$postid = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);



blogPostDelete($pdo, $postid);



header('location: ?');

exit();

