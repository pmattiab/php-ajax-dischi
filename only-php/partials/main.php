<!-- INIZIO MAIN -->
<main>

    <!-- inizio contenitore lista dischi -->
    <div class="disk_container">

        <!-- ciclo foreach php per scrorrere il database dischi -->
        <?php foreach ($database as $disk) { ?>

            <!-- inizio singolo disco -->
            <div class="single_disk">

                <img src="<?php echo $disk["poster"] ?>" alt="<?php echo $disk["title"] ?>">
                <div class="title"><?php echo $disk["title"] ?></div>
                <div class="author"><?php echo $disk["author"] ?></div>
                <div class="year"><?php echo $disk["year"] ?></div>

            </div>
            <!-- fine singolo disco -->
            
        <?php } ?>
        <!-- chiusura funzione foreach -->

    </div>
    <!-- fine contenitore lista dischi -->

</main>
<!-- FINE MAIN -->