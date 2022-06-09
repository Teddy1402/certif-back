<link rel="stylesheet" href="/assets/css/style.css">
    <title>Un formulaire de connexion en AJAX</title>
    <script type="text/javascript" src="formConnexion.js"></script>

    <form class="form-connexion" method="post">
        <h1 class="h3 mb-3 font-weight-normal" style="text-align: center"> Se connecter</h1>
        <div class="social-login">
            <button class="btn facebook-btn social-btn" type="button"><span><i class="fab fa-facebook-f"></i> Connectez-vous avec Facebook</span> </button>
        </div>
        <div class="social-login">    
            <button class="btn google-btn social-btn" type="button"><span><i class="fab fa-google-plus-g"></i> Connectez-vous avec Google+</span> </button>
        </div>
        <p style="text-align:center"> OU  </p>
<!-- <p>Connection!</p>  -->
         <!--mail***********************-->
         <div class="form-group position-relative mb-1">
                <input type="email" id="inputEmail" name="emailConnexion" class="form-control  is-invalid"
                 placeholder="Addresse électronique" required="" autofocus="" value="">
                <div class="valid-feedback feedback-icon">
                    <i class="fa fa-check"></i>
                </div>
               <div class="invalid-feedback feedback-icon">
                    <i class="fa fa-times"></i>
                </div>
            </div>
        <!--password***********************-->
        <div class="form-group position-relative mb-1">
                <input type="password" id="inputPassword" name="pwdConnexion"class="form-control  is-invalid"
                 placeholder="Mot de passe" required="">
                <div class="valid-feedback feedback-icon">
                    <i class="fa fa-check"></i>
                </div>
               <div class="invalid-feedback feedback-icon">
                    <i class="fa fa-times"></i>
                </div>
            </div>
            <small id="resultat"></small>
        <button class="btn btn-success btn-block" name="seConnecter" type="submit"><i class="fas fa-sign-in-alt"></i><i class="ml-1">Se connecter</i></button>
        <a href="#" id="forgot_pswd">Mot de passe oublié?</a>

        <hr>
        <button class="btn btn-primary btn-block" type="button" id="btn-signup"><i class="fas fa-user-plus"></i><i class="ml-1">Créer un nouveau compte</i></button>
        </form>
</div>