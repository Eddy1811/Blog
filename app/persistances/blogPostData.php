<?php

function lastBlogPosts ($MyPDO){
    $statement = $MyPDO->query("SELECT title, DateEntry, Pseudo, Posts.id FROM Posts LEFT JOIN Autors ON Autors.id = Posts.Autors_id ORDER BY DateEntry Desc LIMIT 10");

    $row = $statement->fetchall(PDO::FETCH_ASSOC);
    return $row;
};

//function showPosts ($MyPDO, $id){
//    $statement = $MyPDO->query("SELECT title, DateEntry, Posts.Content, Commentaries.Content, Pseudo
//FROM Posts
//JOIN Commentaries
//ON Posts.id = Commentaries.Posts_id
//JOIN Autors
//ON  Autors.id = Commentaries.Autors_id
//WHERE Commentaries.id = $id");
//    $row = $statement->fetchall(PDO::FETCH_ASSOC);
//    return $row;
//};

function blogPostById ($MyPDO,$id){
    $statement = $MyPDO->query("SELECT title, DateEntry, Content, Pseudo 
FROM Posts 
JOIN Autors 
ON Autors.id = Posts.Autors_id 
WHERE Posts.id = $id
");
    $row = $statement->fetch(PDO::FETCH_ASSOC);
    return $row;
}

function commentsByBlogPost ($MyPDO, $id){
    $statement = $MyPDO->query("SELECT Commentaries.Content, Date, Pseudo
FROM Posts 
JOIN Commentaries
ON Posts.id = Commentaries.Posts_id
JOIN Autors
ON Autors.id = Commentaries.Autors_id");
    $row = $statement->fetch(PDO::FETCH_ASSOC);
    return $row;
}