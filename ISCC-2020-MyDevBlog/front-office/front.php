<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
</head>


<?php
require("header.php");
if (isset($_GET['page'])){
    if ($_GET['page']=='Accueil'){
        require("accueil.php");
    } else if ($_GET['page']=='Article'){
        require("article.php");   
    }else if ($_GET['page']=='Articles') {
               require("liste-articles.php");
            } else if ($_GET['page']=='Contact') {
                require("contact.php");
            }    
}
?>
