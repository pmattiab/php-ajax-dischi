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

</head>
<body>

    <!-- inizio wrapper -->
    <div class="wrapper">

        <!-- include dell'header -->
        <?php include __DIR__ . "/partials/header.php" ?>

        <!-- include del main -->
        <?php include __DIR__ . "/partials/main.php" ?>

    </div>
    <!-- fine wrapper -->

</body>
</html>