<?php

function lastBlogPosts ($MyPDO){
    $statement = $MyPDO->query("SELECT title, DateEntry, Pseudo, Posts.id FROM Posts LEFT JOIN Autors ON Autors.id = Posts.Autors_id ORDER BY DateEntry Desc LIMIT 10");

    $row = $statement->fetchall(PDO::FETCH_ASSOC);
    return $row;
};


function blogPostById ($MyPDO,$id){
    $statement = $MyPDO->query("SELECT Posts.id, title, DateEntry, Content, Pseudo 
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
ON Autors.id = Commentaries.Autors_id
WHERE Posts.id = $id");
    $row = $statement->fetch(PDO::FETCH_ASSOC);
    return $row;
}

function blogPostCreate (PDO $MyPDO, $title, $content, $author) {
    $statement = $MyPDO->prepare("INSERT INTO Posts (Title,Content,DateEntry,DateExit,Autors_id) 
VALUES (?,?, Curdate(),DATE_ADD(CURDATE(), INTERVAL 1 MONTH), ?)");
    $statement->execute([
        $title, $content, $author
    ]);
}


function findauthors ($MyPDO){
    $statement = $MyPDO->query("SELECT Pseudo, id FROM Autors");
    $row = $statement->fetchall(PDO::FETCH_ASSOC);
    return $row;
}

function blogPostUpdate($MyPDO, $postid, $title, $content){
    $sql = "UPDATE Posts SET Title = '$title', Content = '$content' WHERE id = $postid";
    $MyPDO->query($sql);
}
function blogPostUpdate2($MyPDO, $postid, $title, $content){
    $sql = "UPDATE Posts SET Title = ?, Content = ? WHERE id = ?";
    $statement = $MyPDO->prepare($sql);
    $statement->execute([
        $title, $content, $postid
    ]);
}

function blogPostDelete ($MyPDO, $postid){
    $sql = "DELETE FROM Posts WHERE id = '$postid'";
    // $MyPDO->query($sql);
    $statement = $MyPDO-> prepare($sql);
    return $statement->execute();
}