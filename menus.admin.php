<?php 

require_once("parts/nav.menus.php");
require("repo.data.php");?>

<main>

<?php
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $connexion = mysqli_connect('localhost', 'root', 'root', 'nice_eat');
    $req = mysqli_query($connexion, "SELECT * FROM `menus`");
    $rows = mysqli_fetch_all($req, MYSQLI_ASSOC);
    $res = mysqli_fetch_row($req);

    
    // $stmt = mysqli_prepare($connect, "INSERT INTO users (nom, prenom, email, pswd, role_id, id_user_abos) VALUES (?,?,?,?,?,?)");
    // mysqli_stmt_bind_param($stmt, "ssssii", $nom, $prenom, $email, $pswd, $role_id, $id_user_abos);
    // mysqli_stmt_execute($stmt);?>

    

    <?php foreach ($rows as $row) { ?>
        <div class="row">
            <div class="card"> 
                <div class="boxText">
                    <span><?php echo $row["title"]; ?></span>
                    <p> <?php echo $row["description"]; ?></p>
                </div>
            </div>
        </div>
    
    <?php }

    ?>

    
    <form action="add.menus.php" method="POST">
    <div class="add-menus">
        <label for="title">Titre de la case</label>
            <button type="submit" id="add-menu">AJOUTER UN MENU</button>
        </div>
    </form>
    

  </main>