
<nav>
        <div class="conteneur-nav">
        <label for="mobile">☰</label>
        <input type="checkbox" id="mobile" role="button">
          <ul>
          <li><a href="index.php" style="font-size:21px; color:#08a88a; margin:15px">Certif</a></li>
          <li>            <div class="titre-bg-film">
                    <!-- <h3>Bienvenue</h3>
                    <p> <?php 
                          echo "Vous êtes connecté en tant que ".$_SESSION['pseudo'];
                        ?>
                    </p></li> -->
                    <?php if (empty($_SESSION['nom'])){?>
              
                        <li class="deroulant"><a href=""data-bs-toggle="modal"
    data-bs-target="#myModal">Inscription</a>
              <?php }else {
                echo "Bienvenue ".$_SESSION['prenom']." ".$_SESSION['nom'];
                   }?>
            
              <!-- <ul class="sous">
                <li><a href="filmactiontest.php?genre_films=action">Actions</a></li>
                <li><a href="filmactiontest.php?genre_films=fantastique">Fantastique</a></li>
                <li><a href="#">Autres</a></li>
              </ul> -->
            </li>
            <li class="deroulant"><a href="#"data-bs-toggle="modal"
    data-bs-target="#myModal2">Connexion</a>
              <!-- <ul class="sous">
                <li><a href="#">Actions</a></li>
                <li><a href="#">Fantastiques</a></li>
                <li><a href="#">Autres</a></li>
              </ul> -->
            </li>
            <li><?php if (isset($_SESSION['nom'])){?>
              
                <a href="assets/includes/deconnexion.php">Se déconnecter</a></li>
                <?php }else {
                  echo"";
                }?>
          </ul>
        </div>
</nav>



<!-- modal inscription -->



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
                        <input type="text" name="nom" id="nom"  class="form__input" autocomplete="off" placeholder=" " required>
                        <label class="form__label" for="nom">Nom</label>
                        </div>
                        <div class="form">
                        <input type="text" name="prenom" id="prenom" class="form__input" autocomplete="off" placeholder=" " required>
                        <label class="form__label" for="prenom">Prénom</label>
                        </div>
                        <div class="form">
                        <input  type="mail" name="email" id="email" class="form__input" autocomplete="off" placeholder=" " required>
                        <label  class="form__label"for="mail">Mail</label>
                        </div>
                        <div class="form">
                        <input type="password" name="mdp" id="mdp" class="form__input" autocomplete="off" placeholder=" " required>
                        <label class="form__label" for="mdp">Mot de passe</label>
                        </div>
                        <input type="submit" name="submit_form" value="S'inscrire" class="button-inscription">
                    </form>
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
                                <button  type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <div class="formulaire-contact-inscrpition">
                                   
                                <form method="POST" onsubmit="return sendDataco();">
                                            <!-- <label for="nom">role :</label>
                                    <input type="text" name="roles" id="role"required> -->
                                            <div class="form">
                                            <input type="mail" name="email" id="email2" class="form__input" autocomplete="off" placeholder=" " required>
                                            <label  class="form__label" for="mail">Mail</label>
                                            </div>
                                            <div class="form">
                                            <input type="password" name="mdp" id="mdp2" class="form__input" autocomplete="off" placeholder=" " required>
                                            <label class="form__label" for="mdp">Mot de passe</label>
                                            </div>
                                            <input type="submit" name="submit_form" value="connexion" href=""
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