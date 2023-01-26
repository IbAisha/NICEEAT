<?php 

       
            $connexion= mysqli_connect('localhost', 'root', 'root', 'nice_eat');
            $req = mysqli_query($connexion, "SELECT * FROM `users`");
            $num_ligne = mysqli_num_rows($req); // compter le nombre de ligne ayant rapport a la requete SQL
            $res = mysqli_fetch_row($req);

if(isset($_POST['button'])){
        if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email']) && !empty($_POST['pswd'])) {
                $nom = htmlentities($_POST['nom']);
                $prenom = htmlentities($_POST['prenom']);
                $email = filter_var(($_POST['email']), FILTER_VALIDATE_EMAIL);
                $pswd = password_hash($_POST['pswd'], PASSWORD_ARGON2ID); 
                $role_id = $res[5];
                $id_user_abos = $res[6];
         
                if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);  
                        $connect = mysqli_connect("localhost", "root", "root", "nice_eat");  
                        $stmt = mysqli_prepare($connect, "INSERT INTO users (nom, prenom, email, pswd, role_id, id_user_abos) VALUES (?,?,?,?,?,?)");
                        mysqli_stmt_bind_param($stmt, "ssssii", $nom, $prenom, $email, $pswd, $role_id, $id_user_abos);
                        mysqli_stmt_execute($stmt);

                ?> <div class="valid-box">
                        <p style="color:green">Inscription enrigstrée</p>

                </div><?php }else{
                        echo "votre inscription n'a pas été prise en compte";
                }
                               
        }
}

?>