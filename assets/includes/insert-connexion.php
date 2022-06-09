<?php
        include "connexionbdd.php";
       
       if(isset($_POST)){


           if (!empty($_POST["email2"]) && !empty($_POST["mdp2"])){
           $email2 = htmlspecialchars($_POST['email2']); 
           $mdp2 = htmlspecialchars($_POST['mdp2']);
           
           $sql = "SELECT * FROM utilisateurs WHERE mail_utilisateurs = :mail_utilisateurs"; 
                    $prepare = $db->prepare($sql);   
                    $prepare ->execute(array(':mail_utilisateurs' => $email2));
                    $result = $prepare->fetch();
                    $count = $prepare->rowCount();
                    if($count > 0){
                 
                        if($email2 == $result['mail_utilisateurs'] && password_verify($mdp2,$result['password_utilisateurs'])){
                            session_start();
                            $_SESSION['connecte'] = 1;
                            $_SESSION['id'] = $result['id_utilisateurs'];
                            $_SESSION['nom'] =  $result['nom_utilisateurs'];
                            
                            echo "connexion réussis";
                            // header("Location:index.php");
                            
                        } else {
                            echo "Votre adresse email2 ou mot de passe est incorrect !";
                        }
                    } else {
                        echo "Votre adresse email2 ou mot de passe est incorrect !";
                    }
            }else{
                echo "Vous n'avez pas rempli tout les champs !";
            }
        }

?>
