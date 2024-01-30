<?php
include 'layouts/header.tpl.php';
?>


<?php
if ($lastPosts == null): ?>

    <span>Aucun article à afficher</span>


<?php else : ?>

    <?php foreach ($lastPosts as  $value) : ?>

        <section>
            <header>
                <article>
                    <H3><a href="/?action=blogpost&id=<?= $value ["id"]?>"> <?= $value ["title"]?></a> </H3>
                </article>
            </header>

            <article>
                <p>Date d'écriture : <?= $value ["DateEntry"] ?> </p>
            </article>
            <p>Auteur : <?= $value ["Pseudo"] ?> </p>
            <br><br>
        </section>


    <?php endforeach; ?>


    <span> <?php $value ?> </span>

<?php endif; ?>




<?php
include 'layouts/footer.tpl.php';
?>

