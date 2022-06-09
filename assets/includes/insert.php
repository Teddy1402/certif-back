<?php

$host = 'localhost';
$dbname = 'certif';
$username = 'root';
$password = '';



if(isset( $_POST['mail']) && isset( $_POST['mdp']) && isset( $_POST['prenom'])&& isset( $_POST['nom'])){
    $prenom = htmlspecialchars($_POST['prenom']);
    $nom = htmlspecialchars($_POST['nom']); 
    $mail =  htmlspecialchars($_POST['mail']); 
    $mdp =  htmlspecialchars($_POST['mdp']);

    
  
      $mdp = password_hash( $mdp, PASSWORD_DEFAULT);
      try {
        // se connecter à mysql
        $pdo = new PDO("mysql:host=$host;dbname=$dbname","$username","$password");
        } catch (PDOException $exc) {
          echo $exc->getMessage();
          exit();
        }
      
      $sql = "INSERT INTO `utilisateurs`(`nom_utilisateurs`, `prenom_utilisateurs`, `mail_utilisateurs`, `password_utilisateurs`) VALUES (:nom_utilisateurs,:prenom_utilisateurs,:mail_utilisateurs,:password_utilisateurs)";
      $res = $pdo->prepare($sql);
      $exec = $res->execute(array(":nom_utilisateurs"=>$nom,":prenom_utilisateurs"=>$prenom,":mail_utilisateurs"=>$mail,":password_utilisateurs"=>$mdp));
      // vérifier si la requête d'insertion a réussi
      if($exec){
        echo 'Données insérées';

      }else{
        echo "Échec de l'opération d'insertion";
      }
      
    }
    ?>
  