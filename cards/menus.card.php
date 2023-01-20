 
<?php foreach ($menus as $menu) { ?>
    <div class="row">
        <div class="card"> 
            <img src="<?php echo $menu["coverImage"]; ?>" width="170px" alt="menu nice eat">
            <div class="boxText">
                <span><?php echo $menu["title"]; ?></span>
                <p> <?php echo $menu["description"]; ?></p>
            </div>

        </div>

    </div>

    <?php } ?>