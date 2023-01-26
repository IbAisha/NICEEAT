<?php 

require_once("parts/nav.menus.php");?>

<body>

<h1>MON PROFIL</h1>

<section class="profile-infos">
    <div class="profile-title">
        <h2>MES INFORMATIONS</h2>
    </div>

    <div class="position-sb" id="lname-infos">
    <?php echo $_SESSION['nom'];?>
        <a href="#">Modifier</a>
    </div>

    <div class="position-sb" id="fname-infos">
        <?php echo $_SESSION["prenom"];?>
        <a href="edit-infos.php">Modifier</a>
    </div>

    <div class="position-sb" id="email-infos">
        <?php echo $_SESSION["email"];?>
        <a href="edit-infos.php">Modifier</a>
    </div>

    <br><br>


  




<?php
$connexion = mysqli_connect('localhost', 'root', 'root', 'nice_eat');
$req = mysqli_query($connexion, "SELECT id_abos FROM `abonnement`");
mysqli_num_rows($req); 
$res = mysqli_fetch_row($req);

switch ($res[0]) {
    case 1:
        echo "Aucun abonnement en cours";
        break;
        
    case 2 : 
        echo "Abonnement mensuel";
        break;

    case 3 :
        echo "Abonnement hebdomadaire";
        break;
 
    }

    $req_favoris = mysqli_query($connexion, "SELECT id_abos FROM `abonnement`" )
     ?>
     

</section> 

</body>

