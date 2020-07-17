<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.2css">
</head>

<body>
    <form action="back.php?page=ajout-article" method="post">
        <fieldset>
            <label for="titre">Titre</label>
            <input size="20" maxlength="40" name="titre" />
        </fieldset>
        <fieldset>
            <label for="image">Image</label>
            <input size="20" maxlength="40" name="image" />
        </fieldset>
        <fieldset>
            <label for="date de publication">Date de publication</label>
            <input size="20" maxlength="40" name="date de publication" />
        </fieldset>
        <fieldset>
            <label for="auteur">Auteur</label>
            <input size="20" maxlength="40" name="auteur" />
        </fieldset>
        <fieldset>
            <label for="contenu texte">Contenu texte</label>
            <input size="20" maxlength="40" name="contenu texte" />
        </fieldset>
        <fieldset>
            <label for="extrait">Extrait</label>
            <input size="20" maxlength="40" name="extrait" />
        </fieldset>
        <fieldset>
            <input type="submit" value="Envoyer" name="submit" />
        </fieldset>
    </form>
</body>

</html>