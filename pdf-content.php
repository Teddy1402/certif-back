<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pdf</title>
    <style>
        table{
            width:100%;
            
            }
        h2{
            color:#08a88a;
        }
    </style>
</head>
<body>  

<?php
include 'assets/includes/connexionbdd.php'; 
?>

<?php

$sql = "SELECT * FROM projets WHERE id_projets=".$_GET['id_projets']."";
$requete = $db ->prepare($sql);
$requete ->execute(); 
$row =$requete->fetch();


?>

<?php  echo $row['id_projets'];?>
<h2><?php  echo $row['nom_projets'];?></h2>
<p>Description: <?php  echo $row['description_projets'];?></p>
<p>Client : <?php  echo $row['client_projets'];?></p>
<img width="300px" src="atelier-2.jpg" alt="" >

    
</body>
</html>