<!DOCTYPE html>
<html>
<head>
    <title>Liste des utilisateurs</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style2.css">
</head>

<?php
  function connect_to_database()
  {
      $servername = "localhost";
      $username = "root";
      $password = "root";
      $databasename = "Base-article";
      try {
          $pdo = new PDO("mysql:host=$servername;dbname=$databasename",$username,$password);
          $pdo -> setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          return $pdo;
      }catch (PDOException $e){
          echo "Connection failed: " . $e -> getMessage();
      }
   }
  $pdo = connect_to_database();
  $utilisateurs = $pdo-> query("SELECT * FROM utilisateurs")->fetchAll();
function delete($nom_utilisateur)
{
  $pdo = connect_to_database();
  $utilisateurs = $pdo-> prepare("DELETE FROM utilisateurs WHERE nom_utilisateur=$nom_utilisateur");
  $utilisateurs-> execute();
}
?>