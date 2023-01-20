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
          <li><a href="./snacking.php">Click & collect</a></li>
        </ul>
    </div>


    <!--LOGO AU CENTRE DE LA NAVBAR-->
    <a href="./index.php" id="logo-niceeat"><img src="./img/logoBlack.png" alt="logo NiceEat" width ="100px"></a>
    

    <!--ICON LOGIN-->

    <!--TEL/TABLET-->

    <div class="icon">
        <a href="form.login.php" id="logo-icon">
        <img src="./img/login-icon.png"  alt="logo de connexion" width="40px">
      </a>
    </div>



    <!--DESKTOP-->

    <div class="buttons">
      <button id="login"><a href="./form.login.php">Se connecter</a></button>
      <button id="signup"><a href="./form.signup.php">S'inscrire</a></button>
    </div>


    </nav>

    <?php require_once "sidenav.php"; ?>
  
  <!--END NAVBAR SECTION-->

<script src="main.js"></script>
</body>