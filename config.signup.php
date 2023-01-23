<?php 

if(isset($_POST['button'])){
        if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email']) && !empty($_POST['pswd'])) {
                $nom = htmlentities($_POST['nom']);
                $prenom = htmlentities($_POST['prenom']);
                $email = filter_var(($_POST['email']), FILTER_VALIDATE_EMAIL);
                $pswd = password_hash($_POST['pswd'], PASSWORD_ARGON2ID); 
         
                if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);  
                        $connect = mysqli_connect("localhost", "root", "root", "nice_eat");  
                        $stmt = mysqli_prepare($connect, "INSERT INTO users (nom, prenom, email, pswd) VALUES (?,?,?,?)");
                        mysqli_stmt_bind_param($stmt, "ssss", $nom, $prenom, $email, $pswd);
                        mysqli_stmt_execute($stmt);

                ?> <div class="valid-box">
                        <p style="color:green">Inscription enrigstrée</p>

                </div><?php;
                $query = "SELECT * FROM users";
                $result = mysqli_query($link, $query);
                $row = mysqli_fetch_row($result); ?>
                <?php }else{
                        echo "votre inscription n'a pas été prise en compte";
                }
                               
        }
}

?>