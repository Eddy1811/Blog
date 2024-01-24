<?php

$pdo = new PDO('mysql:host=blog.local;dbname=blog', 'eddy', 'Tassadar-26');
$statement = $pdo->query("SELECT title FROM Posts ");
$row = $statement->fetch(PDO::FETCH_ASSOC);
echo htmlentities($row['title']);

?>