<main>
    <div class="disk_container">

        <?php foreach ($database as $disk) { ?>

            <div class="single_disk">
                <img src="<?php echo $disk["poster"] ?>" alt="<?php echo $disk["title"] ?>">
                <div class="title"><?php echo $disk["title"] ?></div>
                <div class="author"><?php echo $disk["author"] ?></div>
                <div class="year"><?php echo $disk["year"] ?></div>
            </div>
            
        <?php } ?>

    </div>
</main>