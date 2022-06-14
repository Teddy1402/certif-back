<?php
include 'assets/includes/connexionbdd.php';

 $sql = "DELETE FROM projets where id_projets = ?";
 $q = $db->prepare($sql);
 $q->execute(array($id));

 header("Location: index.php");


?>