<?php
$name = "eddy";
$password = "Tassadar-26";
$pdo = new PDO('mysql:host=blog.local;dbname=blog', $name, $password);
//todo : to clean code
//$statement = $pdo->query("SELECT title FROM Posts ");
//$row = $statement->fetch(PDO::FETCH_ASSOC);