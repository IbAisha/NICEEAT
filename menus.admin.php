<?php 

require_once("parts/nav.menus.php");
require("repo.data.php");


    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $connexion = mysqli_connect('localhost', 'root', 'root', 'nice_eat');
    $req = mysqli_query($connexion, "SELECT * FROM `menus`");
    $rows = mysqli_fetch_all($req, MYSQLI_ASSOC);
    $res = mysqli_fetch_row($req);

  foreach ($rows as $row) { ?>
        <div class="row">
            <div class="card"> 
                <img src="<?php echo $menus["coverImage"]; ?>" width="170px" alt="image menus nice eat">
                <div class="boxText">
                    <span><?php echo $row["title"]; ?></span>
                    <p> <?php echo $row["description"]; ?></p>
                </div>
            </div>
        </div>
    
    <?php }
    



?>