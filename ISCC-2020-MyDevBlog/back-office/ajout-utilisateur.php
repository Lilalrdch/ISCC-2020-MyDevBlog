<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style2.css">
    <meta charset="UTF-8">
</head>
<form action="back.php?page=ajout-utilisateur" method="post">
<fieldset>
    <fieldset>
        <label for="nom">Nom d'utilisateur</label>
        <input size="20" maxlength="40" />
    </fieldset>
    <fieldset>
        <label for="login">Login</label>
        <input size="20" maxlength="40" />
    </fieldset>
    <fieldset>
        <label for="password">Mot de passe</label>
        <input size="20" maxlength="40" />
    </fieldset>
    <fieldset>
        <input type="submit" value="Envoyer" name="envoyer" />
    </fieldset>
</form>
</html>