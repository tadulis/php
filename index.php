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
<p>Cia yra pagrindinis index.php</p>


<table>
    <thead>
    <th></th>
    <?php foreach ($auto as $key => $value): ?>
        <th colspan="2"><?php print $key; ?></th>
    <?php endforeach; ?>
    </thead>
    <tbody>
    <tr>
        <td></td>
        <?php foreach ($auto as $key => $value): ?>
            <td><?php print $value[0]["model"]; ?></td>
            <td><?php print $value[0]["fuel"]; ?></td>
        <?php endforeach; ?>
    </tr>
    <tr>
        <td></td>
        <?php foreach ($auto as $key => $value): ?>
            <td><?php print $value[1]["model"]; ?></td>
            <td><?php print $value[1]["fuel"]; ?></td>
        <?php endforeach; ?>
    </tr>
    </tbody>
</table>

<!--bootstrap js-->
<script src="./assets/js/jqery.js"></script>
<script src="./assets/js/bootstrap.js"></script>
<script src="./assets/js/bootstrap.bundle.js"></script>
</body>
</html>
