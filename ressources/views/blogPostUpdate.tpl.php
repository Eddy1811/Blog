<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FormulaireModif</title>
</head>


<body>
<h2>Formulaire :</h2>
<form action="/?action=blogPostModify&id=<?= $postid ?>" method="post">

    <div>
        <label for="title">Nouveau titre :</label><br>
        <input type="text" id="title" name="title" required><br><br>
    </div>

    <div>
        <label for="content">Nouveau contenu :</label><br>
        <textarea id="content" name="content" rows="4" cols="50" required></textarea>
        <br><br>
    </div>




    <input type="submit" value="Envoyer">
</form>
</body>
</html>