<?php

include "connexionbdd.php";

$sql = "SELECT * FROM projets ";
        $requete = $db ->prepare($sql);
        $requete ->execute();  

 while ($row =$requete->fetch()){
 echo $row ['image_projets'];    
 }
 
     ?>



