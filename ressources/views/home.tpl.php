<?php
include 'layouts/header.tpl.php';
?>


<?php
if ($lastPosts == null): ?>

    <span>Aucun article à afficher</span>


<?php else : ?>

    <?php foreach ($lastPosts as $value) : ?>

        <section>
            <header>
                <article>
                    <H3><a href="/?action=blogpost&id=<?= $value ["id"] ?>"> <?= $value ["title"] ?></a></H3>
                </article>
            </header>

            <article>
                <p>Date d'écriture : <?= $value ["DateEntry"] ?> </p>
            </article>
            <p>Auteur : <?= $value ["Pseudo"] ?> </p>

        </section>

        <section>
            <h3><a href="/?action=blogPostModify&id=<?= $value ["id"] ?>"> Modifier cet article </a></h3>
        </section>
        <br><br>

    <?php endforeach; ?>

    <section>
        <h3><a href="/?action=Create"> Créer un article </a></h3>
    </section>

    <span> <?php $value ?> </span>

<?php endif; ?>




<?php
include 'layouts/footer.tpl.php';
?>

