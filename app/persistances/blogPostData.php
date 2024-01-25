<?php

function lastBlogPosts ($MyPDO){
    $statement = $MyPDO->query("SELECT title, DateEntry, Pseudo FROM Posts LEFT JOIN Autors ON Autors.id = Posts.Autors_id ORDER BY DateEntry Desc LIMIT 10");

    $row = $statement->fetchall(PDO::FETCH_ASSOC);

    $array =  [$row];
    return $array;
};



//QUERY A FAIRE
//SELECT title, DateEntry, Pseudo FROM Posts LEFT JOIN Autors ON Autors.id = Posts.Autors_id ORDER BY DateEntry Desc LIMIT 10