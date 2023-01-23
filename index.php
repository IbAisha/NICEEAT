<body>
  <!--navbar-->
<?php 
require_once("./parts/nav.style.php");
require_once ("./config.login.php");?>


<!--CONTENT-->

<?php 
if(!empty($_SESSION["nom"]) && ($_SESSION["prenom"]) && ($_SESSION['email'])){
  ?>
  <div class="text" style="display:none">
    <h1>LIVRAISON DE REPAS DIÉTÉTIQUES</h1>
    <p>Recettes élaborées par une diététicienne qui allie goût et expertise diététique pour vous !</p>
  </div>

  <div class="text">
    <h1>Hello <?php  echo $_SESSION['prenom'];?>, <br> Bienvenue chez NICE EAT </h1>
  </div>
  <?php }else {?> 
    <div class="text">
    <h1>LIVRAISON DE REPAS DIÉTÉTIQUES</h1>
    <p>Recettes élaborées par une diététicienne qui allie goût et expertise diététique pour vous !</p>
  </div>
  <?php }?>


<div id="offreBouton">
<a href="offre.php">DECOUVRIR L'OFFRE</a>
</div>

<?php require_once("parts/footer.php");?>


  <script src="js/main.js"></script>

</body>