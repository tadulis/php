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

<form action="" method="post" class="col-5 mx-auto">
    <select class="form-control" id="exampleFormControlSelect1" name="kebaboTipas">
        <?php foreach ($uzsakymai["kebabas"]["kebaboTipas"] as $kebaboKey => $kebaboTipas): ?>
            <option value="<?php print $kebaboKey; ?>"><?php print $kebaboTipas; ?></option>
        <?php endforeach; ?>
    </select>
    <select class="form-control" id="exampleFormControlSelect1" name="kebaboDydis">
        <?php foreach ($uzsakymai["kebabas"]["dydis"] as $kebaboKey => $kebaboDydis): ?>
            <option value="<?php print $kebaboKey; ?>"><?php print $kebaboDydis; ?></option>
        <?php endforeach; ?>
    </select>
    <select class="form-control" id="exampleFormControlSelect1" name="kebaboMesa">
        <?php foreach ($uzsakymai["kebabas"]["mesa"] as $kebaboKey => $kebaboMesa): ?>
            <option value="<?php print $kebaboKey; ?>"><?php print $kebaboMesa; ?></option>
        <?php endforeach; ?>
    </select>
    <select class="form-control" id="exampleFormControlSelect1" name="kebaboPadazas">
        <?php foreach ($uzsakymai["kebabas"]["padazai"] as $kebaboKey => $kebaboPadazas): ?>
            <option value="<?php print $kebaboKey; ?>"><?php print $kebaboPadazas; ?></option>
        <?php endforeach; ?>
    </select>
    <input type="submit">
</form>

<section class="order col-6 mx-auto d-flex">
    <h3><?php print $_POST["kebaboTipas"]; ?></h3>
    <h3><?php print $_POST["kebaboDydis"]; ?></h3>
    <h3><?php print $_POST["kebaboMesa"]; ?></h3>
    <h3><?php print $_POST["kebaboPadazas"]; ?></h3>
</section>

<!--bootstrap js-->
<script src="./assets/js/jqery.js"></script>
<script src="./assets/js/bootstrap.js"></script>
<script src="./assets/js/bootstrap.bundle.js"></script>
</body>
</html>
