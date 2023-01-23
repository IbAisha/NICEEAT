 
<?php foreach ($snacks as $snack) { ?>
    <div class="row">
        <div class="card"> 
            <img src="<?php echo $snack["coverImage"]; ?>" width="170px" alt="snack nice eat">
            <div class="boxText">
                <span><?php echo $snack["title"]; ?></span>
                <p> <?php echo $snack["description"]; ?></p>
            </div>
        </div>
    </div>

<?php } ?>