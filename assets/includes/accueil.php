<script src="jquery-3.6.0.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<body>
    
    <div class="container-accueil">
        <div class="titre-accueil">
            <ul>
                <li><h1>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</h1></li>
                <li><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo explicabo et ex consectetur id, ea atque quam ipsum provident qui consequatur ratione porro error sequi nulla dicta ab adipisci veritatis.</p></li>
            </ul>
        </div>
        <div class="image-accueil"></div>
    </div>

    <div class="container-icone">
    <div class="icone-1">
            <ul>
                <li>                
                <div class="container mt-3">
 
  
                    <button type="button" style="background-color:#fff; border:none;" data-bs-toggle="modal" data-bs-target="#myModal">
                    
                    <lord-icon
                        src="https://cdn.lordicon.com/puvaffet.json"
                        trigger="loop-on-hover"
                        delay="2000"
                        style="width:150px;height:150px">
                    </lord-icon>
                    </button>
                    <h3>Inscription</h3>
                    <p>Vous devez vous inscrire pour poster un projet</p>
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

                    <form method="POST" action="assets/includes/insert.php" onsubmit="return sendData();">
                    <!-- <label for="nom">role :</label>
                    <input type="text" name="roles" id="role"required> -->
                    <label for="nom">Nom :</label>
                    <input type="text" name="nom" id="name"required>
                    <label for="prenom">Prénom :</label>
                    <input type="text" name="prenom" id="prenom" required>
                    <label for="mail">Mail :</label>
                    <input type="email" name="mail" id="mail" required>
                    <label for="mdp">Mot de passe :</label>
                    <input type="password" name="mdp" id="mdp"required>
                    <input type="submit" name="submit_form" value="S'inscrire" class="button-inscription">
                    </form>
                    <div id="res" ></div>
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
 
  
                    <button type="button" style="background-color:#fff; border:none;" data-bs-toggle="modal" data-bs-target="#myModal">
                        <lord-icon
                        src="https://cdn.lordicon.com/wloilxuq.json"
                        trigger="loop-on-hover"
                        delay="2000"
                        style="width:150px;height:150px">
                        </lord-icon>
                    </button>
                    <h3>Connexion</h3>
                    
                </div>

                <!-- The Modal -->
                <div class="modal fade " id="myModal">
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
                        <form action="traitement.php" method="POST">

                        <div>
                            <label for="mail">E-mail :</label>
                            <input type="email" id="mail" name="user_email"required />
                        </div>

                        <div>
                            <label for="mdp">Mot de passe :</label>
                            <input type="password" id="mdp" name="mdp" required/>
                        </div>
                        
                        <div class="button-inscription">
                            <button type="submit">Connexion</button>
                        </div>
                        </form>
                </div>
             </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        Message bien inscrit
      </div>

    </div>
  </div>
</div>
                </li>
              
            </ul>
        </div>
    </div>


    <!-- <h2>Projet</h2>

    <div class="container-projet">
        <div class="projet-1">

            <ul>
                <li><img src="assets/images/Capture.PNG" alt=""></li>
                <li><p>Nom Prénom</p></li>
                <li><h2>Titre</h2></li>
                <li><p>Description</p></li>
            </ul>
        </div>
        <div class="projet-1">
            <ul>
                <li><img src="assets/images/Capture.PNG" alt=""></li>
                <li><p>Nom Prénom</p></li>
                <li><h2>Titre</h2></li>
                <li><p>Description</p></li>
            </ul>
        </div>
        <div class="projet-1">
            <ul>
                <li><img src="assets/images/Capture.PNG" alt=""></li>
                <li><p>Nom Prénom</p></li>
                <li><h2>Titre</h2></li>
                <li><p>Description</p></li>
            </ul>
        </div>


        <div class="projet-1">
            <ul>
                <li><img src="assets/images/Capture.PNG" alt=""></li>
                <li><p>Nom Prénom</p></li>
                <li><h2>Titre</h2></li>
                <li><p>Description</p></li>
            </ul>
        </div>
    </div> -->






 <!-- <div class="text"> Double Border Animation</div> -->

 <section class="services">
 	<div class="container">
 		 <div class="heading">
 		 	 <h1>Projet</h1>
 		 </div>
 		 <div class="content">
 		 	 <div class="box">
 		 	 	 <div class="inner">
 		 	 	 	<div class="icon"><img src="assets/images/Capture.PNG" alt="" style="width:100%"></div>
 		 	 	 	 <h3>Web Development</h3>
 		 	 	 	 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
 		 	 	 </div>
 		 	 </div>
 		 	 <div class="box">
 		 	 	 <div class="inner">
 		 	 	 	<div class="icon"><img src="assets/images/Capture.PNG" alt="" style="width:100%"></div>
 		 	 	 	 <h3>Clean Code</h3>
 		 	 	 	 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
 		 	 	 </div>
 		 	 </div>
 		 	 <div class="box">
 		 	 	 <div class="inner">
 		 	 	 	<div class="icon"><img src="assets/images/Capture.PNG" alt="" style="width:100%"></i></div>
 		 	 	 	 <h3>Responsive Design</h3>
 		 	 	 	 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
 		 	 	 </div>
 		 	 </div>
               <div class="box">
 		 	 	 <div class="inner">
 		 	 	 	<div class="icon"><img src="assets/images/Capture.PNG" alt="" style="width:100%"></i></div>
 		 	 	 	 <h3>Responsive Design</h3>
 		 	 	 	 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
 		 	 	 </div>
 		 	 </div>
               <div class="box">
 		 	 	 <div class="inner">
 		 	 	 	<div class="icon"><img src="assets/images/Capture.PNG" alt="" style="width:100%"></i></div>
 		 	 	 	 <h3>Responsive Design</h3>
 		 	 	 	 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
 		 	 	 </div>
 		 	 </div>
               <div class="box">
 		 	 	 <div class="inner">
 		 	 	 	<div class="icon"><img src="assets/images/Capture.PNG" alt="" style="width:100%"></i></div>
 		 	 	 	 <h3>Responsive Design</h3>
 		 	 	 	 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
 		 	 	 </div>
 		 	 </div>
               <div class="box">
 		 	 	 <div class="inner">
 		 	 	 	<div class="icon"><img src="assets/images/Capture.PNG" alt="" style="width:100%"></i></div>
 		 	 	 	 <h3>Responsive Design</h3>
 		 	 	 	 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
 		 	 	 </div>
 		 	 </div>
               <div class="box">
 		 	 	 <div class="inner">
 		 	 	 	<div class="icon"><img src="assets/images/Capture.PNG" alt="" style="width:100%"></i></div>
 		 	 	 	 <h3>Responsive Design</h3>
 		 	 	 	 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
 		 	 	 </div>
 		 	 </div>
               <div class="box">
 		 	 	 <div class="inner">
 		 	 	 	<div class="icon"><img src="assets/images/Capture.PNG" alt="" style="width:100%"></i></div>
 		 	 	 	 <h3>Responsive Design</h3>
 		 	 	 	 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
 		 	 	 </div>
 		 	 </div>
               <div class="box">
 		 	 	 <div class="inner">
 		 	 	 	<div class="icon"><img src="assets/images/Capture.PNG" alt="" style="width:100%"></i></div>
 		 	 	 	 <h3>Responsive Design</h3>
 		 	 	 	 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
 		 	 	 </div>
 		 	 </div>
 		 </div>
 	</div>
 </section>


 <footer>
     
 </footer>

 
    


</body>
</html>