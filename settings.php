<?php require_once("parts/nav.menus.php"); ?>

<body>

<section id="profile-infos">
    <div class="profile-title">
        <h1>MES INFORMATIONS</h1>
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


  
</section>

</body>