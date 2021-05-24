<!-- INCLUDE DEL DATABASE -->
<?php include __DIR__ . "/database.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi</title>

    <!-- LINK CSS -->
    <link rel="stylesheet" href="css/style.css">

    <!-- LINK FONT -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans&display=swap" rel="stylesheet">

    <!-- LINK AXIOS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>

    <!-- LINK VUE -->
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
</head>
<body>

    <!-- inizio contenitore elemento root vue js -->
    <div id="root" class="wrapper">

        <!-- include dell'header -->
        <?php include __DIR__ . "/partials/header.php" ?>

        <!-- include del main -->
        <?php include __DIR__ . "/partials/main.php" ?>

    </div>
    <!-- fine contenitore elemento root vue js -->

    <!-- LINK JS -->
    <script type="text/javascript" src="js/script.js"></script>

</body>
</html>