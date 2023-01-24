<?php 

require_once("parts/nav.menus.php");?>

<section id="profile-infos">

<h1>MON PROFIL</h1>

<?php
$connexion = mysqli_connect('localhost', 'root', 'root', 'nice_eat');
$req = mysqli_query($connexion, "SELECT id_user_abos FROM `users`");
$num_ligne = mysqli_num_rows($req); 
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
     ?>

</section>