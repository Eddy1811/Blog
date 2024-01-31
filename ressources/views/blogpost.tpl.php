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

        <?php if (!empty($comment ['Content'])):?>
        Commentaires :
        <br>
        De : <?= $comment ['Pseudo'] ?>
        <br>
        <?= $comment ['Content'] ?>
        <br>
        Posté le : <?= $comment ['Date'] ?>
        <br>
        <?php endif ?>
    </main>

    <form action="/?action=blogPostDelete&id=<?= $post['id']?>" method="post">

        <input type="submit" value="Supprimer">

    </form>






<?php include 'layouts/footer.tpl.php'; ?>
