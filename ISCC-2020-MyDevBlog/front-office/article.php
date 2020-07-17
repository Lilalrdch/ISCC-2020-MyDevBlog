<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
</head>

<?php
function connect_to_database(){
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
$pdo=connect_to_database();
$Articles=$pdo->query("SELECT*FROM Article")->fetchAll();

echo"";
foreach($Articles as $Article){
  echo"<h2>$Article[titre]</h2>" ;
  echo"<p>$Article[date_de_publication]</p>";
  echo"<img src= $Article[image] width=202></img>" ;
  echo"<p>$Article[contenu]</p>";
  echo"<p>$Article[auteur]</p>";
}

echo"";
?>
