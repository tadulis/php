<?php

// ERROR REPORTING
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include "app/php/php.php";
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!--bootstrap-->
    <link rel="stylesheet" href="./assets/css/bootstrap.css">
    <link rel="stylesheet" href="./assets/css/bootstrap-reboot.css">
    <link rel="stylesheet" href="./assets/css/bootstrap-grid.css">

    <link rel="stylesheet" href="./assets/css/style.css">

</head>
<body>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./app/views/first.php">First</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./app/views/second.php">Second</a>
            </li>
        </ul>
    </div>
</nav>
<main>
    <h1>Tekila:</h1>

    <?php foreach ($alkoholis["tekila"] as $key => $value): ?>
        <section class="card col-4">
            <img src="<?php print $value["img"]; ?>" alt="">
            <h2><?php print $value["pavadinimas"]; ?></h2>
            <p><?php print $value["turis"]; ?></p>
            <p><?php print $value["laipsniai"]; ?></p>
            <p><?php print $value["kaina"]; ?></p>
        </section>
    <?php endforeach; ?>

    <h1>Degtine:</h1>

    <?php foreach ($alkoholis["degtine"] as $key => $value): ?>
        <section class="card col-4">
            <img src="<?php print $value["img"]; ?>" alt="">
            <h2><?php print $value["pavadinimas"]; ?></h2>
            <p><?php print $value["turis"]; ?></p>
            <p><?php print $value["laipsniai"]; ?></p>
            <p><?php print $value["kaina"]; ?></p>
        </section>
    <?php endforeach; ?>

    <h1>Alus(sviesus):</h1>

    <?php foreach ($alkoholis["alus"]["sviesus"] as $key => $value): ?>
        <section class="card col-4">
            <img src="<?php print $value["img"]; ?>" alt="">
            <h2><?php print $value["pavadinimas"]; ?></h2>
            <p><?php print $value["turis"]; ?></p>
            <p><?php print $value["laipsniai"]; ?></p>
            <p><?php print $value["kaina"]; ?></p>
        </section>
    <?php endforeach; ?>

    <h1>Alus(tamsus):</h1>

    <?php foreach ($alkoholis["alus"]["tamsus"] as $key => $value): ?>
        <section class="card col-4">
            <img src="<?php print $value["img"]; ?>" alt="">
            <h2><?php print $value["pavadinimas"]; ?></h2>
            <p><?php print $value["turis"]; ?></p>
            <p><?php print $value["laipsniai"]; ?></p>
            <p><?php print $value["kaina"]; ?></p>
        </section>
    <?php endforeach; ?>

    <h1>Sidras:</h1>

    <?php foreach ($alkoholis["sidras"] as $key => $value): ?>
        <section class="card col-4">
            <img src="<?php print $value["img"]; ?>" alt="">
            <h2><?php print $value["pavadinimas"]; ?></h2>
            <p><?php print $value["turis"]; ?></p>
            <p><?php print $value["laipsniai"]; ?></p>
            <p><?php print $value["kaina"]; ?></p>
        </section>
    <?php endforeach; ?>

    <h1>Vynas:</h1>

    <?php foreach ($alkoholis["vynas"] as $key => $value): ?>
        <section class="card col-4">
            <img src="<?php print $value["img"]; ?>" alt="">
            <h2><?php print $value["pavadinimas"]; ?></h2>
            <p><?php print $value["turis"]; ?></p>
            <p><?php print $value["laipsniai"]; ?></p>
            <p><?php print $value["kaina"]; ?></p>
        </section>
    <?php endforeach; ?>

</main>


<!--bootstrap js-->
<script src="./assets/js/jqery.js"></script>
<script src="./assets/js/bootstrap.js"></script>
<script src="./assets/js/bootstrap.bundle.js"></script>
</body>
</html>
