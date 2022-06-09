<?php

try{
	
	$db=new PDO('mysql:host=localhost;dbname=certif;charset=utf8','root','');
	
	// connexionbdd simplon
	//  $db=new PDO('mysql:host=db5006773312.hosting-data.io;dbname=dbs5603904','dbu2407296','5Rc3y4Zg');
	// return ;

} catch(PDOException $e){
	die('Erreur:'.$e->getMessage());
}

if(isset($_POST['mail'],$_POST['mdp'])){//l'utilisateur à cliqué sur "S'inscrire", on demande donc si les champs sont défini avec "isset"
    if(empty($_POST['mail'])){//le champ pseudo est vide, on arrête l'exécution du script et on affiche un message d'erreur
        echo "Le champ mail est vide.";

    } elseif(strlen($_POST['mail'])){
        echo "entré un mail.";
    } elseif(empty($_POST['mdp'])){//le champ mot de passe est vide
        echo "Le champ Mot de passe est vide.";
    } elseif(mysqli_num_rows(mysqli_query($mysqli,"SELECT * FROM utilisateurs WHERE mail_utilisateurs='".$_POST['mail']."'"))==1){//on vérifie que ce pseudo n'est pas déjà utilisé par un autre membre
        echo "Cet email est déjà utilisé.";
    } else {
  
        if(!mysqli_query($mysqli,"INSERT INTO utilisateurs SET mail_utilisateurs='".$_POST['mail']."', mdp='".md5($_POST['mdp'])."'")){//on crypte le mot de passe avec la fonction propre à PHP: md5()
            echo "Une erreur s'est produite: ".mysqli_error($mysqli);
        } else {
            echo "Vous êtes inscrit avec succès!";
            // header('Location: index.php');
            
            
            
         

        }
    }
}

    ?>