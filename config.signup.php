<?php 

require_once "connect.php";

 if(isset($_POST['button'])){
        if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email']) && !empty($_POST['pswd'])) {
                $nom = htmlentities($_POST['nom']);
                $prenom = htmlentities($_POST['prenom']);
                $email = filter_var(($_POST['email']), FILTER_VALIDATE_EMAIL);
                $pswd = password_hash($_POST['pswd'], PASSWORD_ARGON2ID);

         //Ajoutez ici tous les COntroles souhaités 
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){

                if ($stmt = $connexion->prepare("INSERT INTO `users` (`id`, `nom`, `prenom`, `email`, `pswd`) VALUES (NULL, '$nom', '$prenom', '$email', '$pswd');")){
                        $pswd = md5($pswd);
                        $stmt->bind_param('ss', $email, $pswd);
                        $stmt->execute();
                        $stmt->close();

                        echo "inscription enregristré";
                    } else {
                        echo "query error <b>".$conexion->error."</b><br>";
                    }
            }
    }
 }

?>