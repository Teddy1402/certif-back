
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
            
            <li class="deroulant"><a href="#">Lien 1</a>
              <!-- <ul class="sous">
                <li><a href="filmactiontest.php?genre_films=action">Actions</a></li>
                <li><a href="filmactiontest.php?genre_films=fantastique">Fantastique</a></li>
                <li><a href="#">Autres</a></li>
              </ul> -->
            </li>
            <li class="deroulant"><a href="#">Lien 2</a>
              <!-- <ul class="sous">
                <li><a href="#">Actions</a></li>
                <li><a href="#">Fantastiques</a></li>
                <li><a href="#">Autres</a></li>
              </ul> -->
            </li>
            <li><a href="deconnexion.php">Lien 3</a></li>
          </ul>
        </div>
</nav>