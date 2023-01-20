<?php 
    require_once "parts/nav.style.php";
    require_once "parts/nav.form.php";
    require_once("./config.signup.php");
    ?> 
  
        <div id="formCase">

            <form action="" method="POST">

            <h2 class="textCenter">Inscrivez-vous</h2>
          

            <div class="center" id="input">
                
                    <label for="nom">Nom :</label>
                    <input type="text" name="nom" id="nom" required>

                    <label for="prenom">Prénom :</label>
                    <input type="text" name="prenom" required>

                    <label for="email">Adresse email: </label>
                    <input type="text" name="email" required>

                    <label for="pswd">Mot de passe : </label>
                    <input type="password" name="pswd" required >
                </div>

                <div class="text-signup">
                    <p>Vous avez déjà un compte ? <a href="form.login.php">Connectez-vous !</a> </p>
                </div>
            

                <div id="validate-button">
                    <button type ="submit" name="button"> S'inscrire</button>
                </div>

            </div>
            
            </form>
        
        </div>
            <script src="main.js"></script>
    </body>
