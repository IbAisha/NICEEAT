<body>
<nav>
    <!--hamburger menu-->

    <a href="#" id="openBtn"> <!--bouton d'ouverture -->
      <div class="burger-icon">
        <div class="burger-line"></div>
        <div class="burger-line"></div>
        <div class="burger-line"></div>
      </div>
    </a>
    
    <!--Laptop-->

    <div class="list-navbar">
      <ul>
          <li><a href="./index.php">Accueil</a></li>
          <li><a href="./menus.php">Nos menus</a></li>
          <li><a href="./snacking.php">Nos snacks</a></li>
          <li><a href="./clickncollect.php">Click & collect</a></li>
        </ul>
    </div>

    <!--LOGO AU CENTRE DE LA NAVBAR-->
    <a href="./index.php" id="logo-niceeat"><img src="./img/logoBlack.png" alt="logo NiceEat" width ="100px"></a>
    

    <!--ICON LOGIN-->

    <!--DESKTOP-->
    <?php
    
    if(!empty($_SESSION["nom"]) && ($_SESSION["prenom"]) && ($_SESSION['email'])){ ?>
   <div class="icon" style="display:none">
        <a href="./form.login.php" id="logo-icon">
        <img src="./img/login-icon.png"  alt="logo de connexion" width="40px">
      </a>
    </div>

    <div class="buttons" style="display:none">
      <button id="login"><a href="./form.login.php">Se connecter</a></button>
      <button id="signup"><a href="./form.signup.php">S'inscrire</a></button>
    </div>

    <div class="dropdown">
      <button class="dropbtn">Mon espace</button>
      <div class="dropdown-content">
      <a href="myaccount.php">Mon profil</a>
      <a href="settings.php">Paramètres du compte</a>
      <a href="deconnexion.php">Se déconnecter</a>
      </div>
    </div>
 
</div>

    <?php }else{?>
      <div class="icon">
        <a href="./form.login.php" id="logo-icon">
        <img src="./img/login-icon.png" alt="logo de connexion" width="40px">
      </a>
    </div>

    <!--DESKTOP-->

    <div class="buttons">
      <button id="login"><a href="./form.login.php">Se connecter</a></button>
      <button id="signup"><a href="./form.signup.php">S'inscrire</a></button>
    </div>

    <?php };?>


    </nav>

    <?php require_once "sidenav.php"; ?>
  
  <!--END NAVBAR SECTION-->

<script src="js/main.js"></script>
</body>