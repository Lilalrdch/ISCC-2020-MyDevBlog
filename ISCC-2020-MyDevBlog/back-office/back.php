<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style2.css">
</head>

<?php require("header.php") ?>


<?php

function connect_to_database()
{
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $databasename = "Base-article";

    $pdo = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;
}

$pdo= connect_to_database();


session_start();

if (isset($_GET['page'])) {
    if ($_GET['page'] == 'Connexion') {
        require("connexion.php");
    } else if ($_GET['page'] == 'Ajout-articles') {
        require("ajout-article.php");
    } else if ($_GET['page'] == 'Ajout-utilisateurs') {
        require("ajout-utilisateur.php");
    } else if ($_GET['page'] == 'Utilisateurs') {
        require("utilisateurs.php");
    }
    
    else {
        header('location: back.php?page=Connexion');
    }
}

?>