<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>


<body>
<h2>Formulaire :</h2>
<form action="/?action=Create" method="post">

    <div>
        <label for="title">Titre :</label><br>
        <input type="text" id="title" name="title" required><br><br>
    </div>

    <div>
        <label for="content">Contenu :</label><br>
        <textarea id="content" name="content" rows="4" cols="50" required></textarea>
        <br><br>
    </div>

    <div>

        <select name = "authorId">

        <libellé>Quel est votre numéro d'auteur ?</libellé>
        <br>

            <?php foreach ($autorInfo as  $value) : ?>

        <option valeur = "<?= $value["id"] ?>"  > <?= $value ["Pseudo"] ?></option>

            <?php endforeach; ?>

            </input>
        </select>
    </div>


    <input type="submit" value="Envoyer">
</form>
</body>
</html>