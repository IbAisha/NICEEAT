<?php

//PARTIE CONNEXION 

function session($nom, $prenom) {
    $_SESSION['nom']= $nom;
    $_SESSION['prenom']= $prenom;
    $_SESSION['email']= $_POST['email'];
}


function connexion() {
     if(isset($_POST['button'])){
         if(isset($_POST["email"], $_POST["pswd"])) {
            
            $email = $_POST['email'];
            $pswd = $_POST['pswd'];
            $connexion = mysqli_connect('localhost', 'root', 'root', 'nice_eat');
            $req = mysqli_query($connexion, "SELECT * FROM `users` WHERE email='$email'; ");
            $num_ligne = mysqli_num_rows($req); // compter le nombre de ligne ayant rapport a la requete SQL
            $res = mysqli_fetch_row($req);

            if (!$res || !password_verify($pswd, $res[4])){?>
                <span style="color:red"> Email ou mot de passe incorrect</span> <?php
            }else if(!empty($email) && !empty($pswd) && password_verify($pswd, $res[4])) {
                session($res[1], $res[2]);
                   header("Location: index.php");
                   exit(0);
              } else if(empty($email) || empty($pswd)){?> 
                <span>Veuillez entrer les champs obligatoires</span><?php

                var_dump($email, $pswd);
                  
              }
         }
    }
 } connexion();





?>