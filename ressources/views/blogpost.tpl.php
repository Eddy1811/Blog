<?php include 'layouts/header.tpl.php';?>

<header>
    <h2>
        <?= $post['title']?>
    </h2>
    <main>
        <?= $post['Content'] ?>
        <br>
        Date de parution : <?= $post['DateEntry'] ?>
        <br>
        Auteur : <?= $post ['Pseudo'] ?>
        <br><br><br>
        Commentaires :
        <br>
        De : <?= $comment ['Pseudo'] ?>
        <br>
        <?= $comment ['Content'] ?>
        <br>
        Posté le : <?= $comment ['Date'] ?>
        <br>
    </main>







<?php include 'layouts/footer.tpl.php'; ?>
