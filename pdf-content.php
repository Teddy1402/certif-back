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
        h1{
            color:#08a88a;
        }
        h2{
            color:#08a88a;
        }

        .entete-pdf{
            width:100%;
            display:flex;
            margin-bottom:3px solid #000;
        }
        .titre-pdf{
            width:50%
        }
        .texte-pdf{
            width:50%
        }

        .texte-pdf ul{
            margin:0px;
            padding:0px;
            list-style: none;
        }
    </style>
</head>
<body>  

<?php
include 'assets/includes/connexionbdd.php'; 
?>

<div class="entete-pdf">
    <div class="titre-pdf"><h1>Certif</h1></div>
    <div class="texte-pdf">
        
        <ul>
            <li>15 rue de la Meuse</li>
            <li>08000 Charleville</li>
            <li>Tel:0324532544</li>
        </ul>
    </div>
</div>
<hr>




<?php

$html = "SELECT * FROM projets WHERE id_projets=".$_GET['id_projets']."";
$requete = $db ->prepare($html);
$requete ->execute(); 
$row =$requete->fetch();


?>


<h2><?php  echo $row['nom_projets'];?></h2>
<p>Description: <?php  echo $row['description_projets'];?></p>
<p>Client : <?php  echo $row['client_projets'];?></p>
<img width="500px" src="http://certif.upside-web.fr/assets/includes/upload/<?php echo $row['image_projets'];?>" alt="" >

    
</body>
</html>