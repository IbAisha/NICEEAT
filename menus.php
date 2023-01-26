
<?php 
require_once("./parts/nav.menus.php"); 
require_once("./repo.data.php");?>

<body>

<div class="text-menu">
        <h1>NOS MENUS</h1>
            <h2>NICE EAT, bien plus qu'une marque de nutrition sportive !</h2>
            <p> Notre objectif ? <br>
            Faciliter votre alimentation au quotidien pour atteindre plus aisément vos objectifs physiques ou pour gagner du temps ! Alors lancez vous !</p>
    </div>
    <hr>

   <main>

<?php
require_once("./cards/menus.card.php");

?>
</main>

<?php require_once "parts/footer.php"; ?>
<script src="js/main.js"></script> 
</body>


