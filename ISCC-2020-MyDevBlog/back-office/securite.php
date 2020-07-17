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

if (isset($_POST['connexion']) && isset($_POST['password']) && isset($_POST["login"])) {
    try {
        $pdo = connect_to_database();
        $login = $_POST['login'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM uUilisateurs WHERE login= '$login' and password= '$password'";
        $req = $pdo->query([$sql]);


        if ($req->rowCount() == 1) {
            $_SESSION["id"] = $_POST['login'];
            setcookie("id", $_POST['login']);
            header('Location: back.php?page=Utilisateurs');
        } else {
            header('location:back.php?page=Connexion&error=Connexion');
        }
    } catch (PDOException $e) {
        echo 'Erreur : ' . $e->getMessage();
    }
}

?>
