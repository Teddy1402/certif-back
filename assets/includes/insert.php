<?php

 include "connexionbdd.php";

$host = 'localhost';
$dbname = 'certif';
$username = 'root';
$password = '';



if(isset( $_POST['email']) && isset( $_POST['mdp']) && isset( $_POST['prenom'])&& isset( $_POST['nom'])){
    $prenom = htmlspecialchars($_POST['prenom']);
    $nom = htmlspecialchars($_POST['nom']); 
    $email =  htmlspecialchars($_POST['email']); 
    $mdp =  htmlspecialchars($_POST['mdp']);



    $sql = "SELECT * FROM utilisateurs WHERE mail_utilisateurs = :mail_utilisateurs";
    $prepare = $db->prepare($sql);   
    $prepare ->execute(array(':mail_utilisateurs' => $email));    
    $count = $prepare->rowCount();
  
    if ( $count >= 1) {
          echo("e-mail déja pris");

    }  else{  
    
  
      $mdp = password_hash( $mdp, PASSWORD_DEFAULT);
      
      
      $sql = "INSERT INTO `utilisateurs`(`nom_utilisateurs`, `prenom_utilisateurs`, `mail_utilisateurs`, `password_utilisateurs`, `id_roles`) VALUES (:nom_utilisateurs,:prenom_utilisateurs,:mail_utilisateurs,:password_utilisateurs,'2')";
      $res = $db->prepare($sql);
      $exec = $res->execute(array(":nom_utilisateurs"=>$nom,":prenom_utilisateurs"=>$prenom,":mail_utilisateurs"=>$email,":password_utilisateurs"=>$mdp));
      // vérifier si la requête d'insertion a réussi
      
      if($exec){

        echo 'Félicitation vous êtes inscrit.';

      }else{
        echo "Échec de l'opération d'insertion";
      }
    }
  
    }
    ?>
  