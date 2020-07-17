<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style2.css">
    
</head>
<body>
<form action="securite.php" method="post">
 <label for="login">Login</label>
 <input size="20" maxlength="40" name="login"/>
 <label for="password">Password :</label>
 <input size="20" maxlength="40" name="password"/>
 <input type="submit" value="Envoyer" name="connexion"/>
</form>
</body>
</html>

<?php

$pdo= connect_to_database();

if (isset($_GET["error"])&& $_GET ["error"]== 'connexion'){
    echo "<p> Utilisateur introuvable/mot de passe incorrect </p>";
}
?>