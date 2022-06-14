<script src="jquery-3.6.0.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link rel="stylesheet" href="assets/css/style.scss">


<div class="container-accueil">
    <div class="titre-accueil">
        <ul>
            <li>
                <h1>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</h1>
            </li>
            <li>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo explicabo et ex consectetur id, ea
                    atque quam ipsum provident qui consequatur ratione porro error sequi nulla dicta ab adipisci
                    veritatis.</p>
            </li>
        </ul>
    </div>
    <div class="image-accueil"></div>
</div>

<div class="container-icone">

    <div class="icone-1">

        <ul>
            <li>
                <div class="container mt-3">


                    <?php if (empty($_SESSION['nom'])){?>
                    <lord-icon src="https://cdn.lordicon.com/puvaffet.json" trigger="loop-on-hover" delay="2000"
                        style="width:150px;height:150px">
                    </lord-icon>

                    <h3>Ajouter un projet</h3>

                    <p>Vous devez vous inscrire pour ajouter un projet</p>
                    <?php
                         }
                        else{ ?>
                    <a href="" data-bs-toggle="modal" data-bs-target="#myModalajouter">
                        <lord-icon src="https://cdn.lordicon.com/puvaffet.json" trigger="loop-on-hover" delay="2000"
                            style="width:150px;height:150px">
                        </lord-icon>
                        <h3>Ajouter un projet</h3>
                    </a>
                    <?php
                            }?>

                    <!-- <button type="button" style="background-color:#fff; border:none;" data-bs-toggle="modal"
                            data-bs-target="#myModal"> -->

                </div>

                <!-- The Modal -->
                <div class="modal fade " id="myModalajouter">
                    <div class="modal-dialog  modal-dialog-centered ">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Ajouter</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <div class="formulaire-contact-inscrpition">

                                    <form method="POST" action="assets/includes/traitement-add.php"
                                        enctype="multipart/form-data">
                                        <!-- <label for="nom">role :</label>
                                           <input type="text" name="roles" id="role"required> -->
                                        <div class="form">
                                        <input  type="text" name="nomprojet" id="nomprojet" class="form__input" autocomplete="off" placeholder=" " required>
                                        <label  class="form__label" for="nom">Nom du projet </label>
                                        </div>
                                        <div class="form">
                                        <input type="text" name="client" id="client" class="form__input" autocomplete="off" placeholder=" " required>
                                        <label  class="form__label" for="client">client du projet </label>
                                        </div>
                                        <div class="form">
                                        <input type="textarea" name="description" id="description" class="form__input" autocomplete="off" placeholder=" " required>
                                        <label class="form__label" for="description">Description </label>
                                        </div>
                                        <!-- <label for="image">image :</label>
                                            <input type="text" name="image" id="image"> -->
                                        <input type="file" name="file">

                                        <input type="submit" name="submit_form" value="Ajouter"
                                            class="button-inscription">
                                    </form>
                                    <div id="res3"></div>
                                </div>
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <!-- Message bien inscrit -->
                            </div>

                        </div>
                    </div>
                </div>
            </li>
        </ul>

    </div>

    <div class="icone-1">

        <ul>
            <li>
                <div class="container mt-3">


                    <?php if (empty($_SESSION['nom'])){?>
                    <lord-icon src="https://cdn.lordicon.com/wloilxuq.json" trigger="loop-on-hover" delay="2000"
                        style="width:150px;height:150px">
                    </lord-icon>

                    <h3>Supprimer un projet</h3>

                    <p>Vous devez vous inscrire pour supprimer un projet</p>
                    <?php
                         }
                        else{ ?>
                    <a href="" data-bs-toggle="modal" data-bs-target="#myModalmodifier">
                        <lord-icon src="https://cdn.lordicon.com/wloilxuq.json" trigger="loop-on-hover" delay="2000"
                            style="width:150px;height:150px">
                        </lord-icon>
                        <h3>Supprimer un projet</h3>
                    </a>
                    <?php
                            }?>

                    <!-- <button type="button" style="background-color:#fff; border:none;" data-bs-toggle="modal"
                            data-bs-target="#myModal"> -->

                </div>
            </li>
        </ul>
    </div>
</div>

<section class="services">
    <div class="container">
        <div class="heading">
            <h1>Projet</h1>
        </div>
        <div class="content">

            <?php
            $sql = "SELECT * FROM projets  INNER JOIN utilisateurs ON projets.id_utilisateurs = utilisateurs.id_utilisateurs"; //,utilisateurs u
            $requete = $db ->prepare($sql);
            $requete ->execute();  
    
            while ($row =$requete->fetch()){
                //foreach ($requete as $row){  
            
            ?>
            <div class="box">
                <a href="" data-bs-toggle="modal" data-bs-target="#myModalprojet<?php echo $row ['id_projets'];?>">
                    <div class="inner">
                        <div class="icon"><img src="assets/includes/upload/<?php echo $row ['image_projets'];  ?>"
                                alt="" style="width:100%"></div>
                        <h3><?php echo $row ['nom_projets'];  ?></h3>
                        <p><?php echo $row ['description_projets'];  ?></p>
                        
                    </div>
            </div></a>
            


            <div class="modal fade " id="myModalprojet<?php echo $row ['id_projets'];?>">
                <div class="modal-dialog  modal-dialog-centered modal-xl ">

                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <div class="cont-projet">
                                <h3><?php echo $row ['nom_projets'];  ?></h3>
                                <p>Client :<?php echo $row ['client_projets'];  ?></p>
                                <p style="font-size:13px">Posté par :<?php echo $row ['prenom_utilisateurs'];  ?></p>
                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <img src="assets/includes/upload/<?php echo $row ['image_projets'];  ?>" alt=""
                                style="width:100%">
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer projet-footer-modal">
                            <p><?php echo $row ['description_projets'];?></p>
                            <a href="genpdf.php?id_projets=<?php echo $row ['id_projets'];?>">Télécharger en pdf</a>
                            <!-- Message bien inscrit -->
                        </div>

                    </div>
                </div>
                
            </div>
            
            <?php
                }
                ?>
        </div>
        
    </div>

</section>


<div class="test" style="color:#fff">Lorem </div>

<div class="bas-tb">
    <div class="titre-bas">Certif</div>
    <div class="container-bas">
        <div class="nav-bas">
            <ul>
                <li><a href="">
                        <p>Accueil</p>
                    </a></li>
                <li><a href="">
                        <p>Inscription</p>
                    </a></li>
                <li><a href="">
                        <p>connexion</p>
                    </a></li>
            </ul>
        </div>
        <div class="information-footer">
            <h2>Information : </h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur voluptate earum dolorum omnis tenetur. Earum, placeat exercitationem obcaecati rem dolores, consequatur iusto natus sed, delectus debitis distinctio vero molestias aliquam.</p>
        </div>
        <div class="reseaux-bas">
            <ul>
                <li><i class="fa-brands fa-facebook-f"></i></li>
                <li><i class="fa-brands fa-instagram"></i></li>
                <li><i class="fa-brands fa-twitter"></i></li>
            </ul>
        </div>
    </div>
</div>






<!-- The Modal -->
<div class="modal fade " id="myModal">
    <div class="modal-dialog  modal-dialog-centered ">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Inscription</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="formulaire-contact-inscrpition">

                    <form method="POST" onsubmit="return sendData();">
                        <!-- <label for="nom">role :</label>
            <input type="text" name="roles" id="role"required> -->
                         <div class="form">
                        <label class="form__label" for="nom">Nom :</label>
                        <input type="text" name="nom" id="nom"  class="form__input" autocomplete="off" placeholder=" " required>
                        </div>
                        <div class="form">
                        <label class="form__label" for="prenom">Prénom :</label>
                        <input  class="form__label"type="text" name="prenom" id="prenom" class="form__input" autocomplete="off" placeholder=" " required>
                        </div>
                        <div class="form">
                        <label  class="form__label"for="mail">Mail :</label>
                        <input  type="mail" name="email" id="email" class="form__input" autocomplete="off" placeholder=" " required>
                        </div>
                        <div class="form">
                        <label for="mdp">Mot de passe :</label>
                        <input type="password" name="mdp" id="mdp" class="form__input" autocomplete="off" placeholder=" " required>
                        </div>
                        <input type="submit" name="submit_form" value="S'inscrire" class="button-inscription">
                    </form>
                    <div id="res"></div>
                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <!-- Message bien inscrit -->
            </div>

        </div>
    </div>
</div>


<!-- modal connexion -->



<!-- The Modal -->
<div class="modal fade " id="myModal2">
    <div class="modal-dialog  modal-dialog-centered ">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Connexion</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="formulaire-contact-inscrpition">

                    <form method="POST" onsubmit="return sendDataco();">
                        <!-- <label for="nom">role :</label>
                                    <input type="text" name="roles" id="role"required> -->

                        <label for="mail">Mail :</label>
                        <input type="mail" name="email" id="email2" required>
                        <label for="mdp">Mot de passe :</label>
                        <input type="password" name="mdp" id="mdp2" required>
                        <input type="submit" name="submit_form" value="connexion" href="https://upside-web.fr"
                            class="button-inscription">
                    </form>
                    <div id="res2"></div>
                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <!-- Message bien inscrit -->
            </div>

        </div>
    </div>
</div>




<!-- MODAL SUPP -->

<div class="modal fade " id="myModalmodifier">
    <div class="modal-dialog  modal-dialog-centered ">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Supprimer</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="formulaire-contact-inscrpition">

                    <table class="table table-hover table-bordered">

                        <thead>
                            <th>ID</th>
                            <th>Projet</th>
                            <th>Client</th>
                        </thead>

                        <tbody>

                            <?php include 'assets/includes/connexionbdd.php';

                                       

                                        if ($_SESSION['role']==1){
                                            $sqlsupp = "SELECT * FROM projets  ";
                                            foreach ($db->query($sqlsupp) as $supp){
                                                echo '

                                                <tr>';
                                                echo'<td>'.$supp['id_projets'] . '</td>
                                                ';
                                                echo'<td>' .$supp['nom_projets'] . '</td>
                                                ';
                                                echo'<td>' .$supp['client_projets'] . '</td>';
                                                echo '<td>';
                                                //echo '<a href="delete.php?id=' . $supp['id_projets'] . '"data-bs-toggle="modal" data-bs-target="#myModalouinon">OUIII</a>';
                                               //echo '<a  href="' . $supp['id_projets'] . '"data-bs-toggle="modal" data-bs-target="#myModalouinon></a>';
                                                echo '<a class="btn" href="delete.php?id=' . $supp['id_projets'] . '"><i class="fas fa-pen lire"></i>Supprimer</a>';// un autre td pour le bouton d'edition
                                                echo '</td>';
                                                echo '</tr>';
                                            }
                                        }
                                        else {
                                         $id= $_SESSION['id'];
                                        $sqlsupp = "SELECT * FROM projets WHERE id_utilisateurs='$id'";
                                        //on formule notre requete 
                                        foreach ($db->query($sqlsupp) as $supp) {
                                        //on cree les lignes du tableau avec chaque valeur retournée
                                        echo '

                                        <tr>';
                                        echo'<td>'.$supp['id_projets'] . '</td>
                                        ';
                                        echo'<td>' .$supp['nom_projets'] . '</td>
                                        ';
                                        echo'<td>' .$supp['client_projets'] . '</td>';
                                        echo '<td>';
                                        //echo '<a href="delete.php?id=' . $supp['id_projets'] . '"data-bs-toggle="modal" data-bs-target="#myModalouinon">OUIII</a>';
                                       //echo '<a  href="' . $supp['id_projets'] . '"data-bs-toggle="modal" data-bs-target="#myModalouinon></a>';
                                        echo '<a class="btn" href="delete.php?id=' . $supp['id_projets'] . '"><i class="fas fa-pen lire"></i>Supprimer</a>';// un autre td pour le bouton d'edition
                                        echo '</td>';
                                        echo '</tr>';
                                    
                                    }
                                        }
                                        ?>
                        </tbody>
                    </table>
                    <div id="res4"></div>
                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">


                <!-- Message bien inscrit -->
            </div>

        </div>
    </div>
</div>




<!-- modal confirmation -->

<div class="modal" id="myModalouinon">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <?php


require 'assets/includes/connexionbdd.php';

$id=0; if(!empty($_GET['id'])){ $id=$_REQUEST['id']; }
 if(!empty($_POST)){ $id= $_POST['id'];
    $sql = "DELETE FROM projets where id_projets = ?";
       $q = $db->prepare($sql);
       $q->execute(array($id));
       header("Location: index.php");
   
}

?>

<h3>Supprimer un projet</h3>
<p>

</div>
<p>

                     
<br />
<form class="form-horizontal" action="delete.php" method="post">
                      <input type="hidden" name="id" value="<?php echo $id;?>"/>
                      
Êtes-vous sure de vouloir le supprimer ?

<br />
<div class="form-actions">
                          <button type="submit" class="btn btn-danger yes">Oui</button>
                          <a class="btn no" href="index.php">Non</a>
</div>
<p>

</form>
        Modal body..
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>