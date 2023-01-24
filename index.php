<?php

$masyvas[0] = array(2, 9, 4);
$masyvas[1] = array(7, 5, 3);
$masyvas[2] = array(6, 1, 8);

//print_r($masyvas);
//echo $masyvas;

$sum = 0;
$sumIstrizaine1 = 0;
foreach ($masyvas as $key => $value) {
//    $sum=$sum+$value;
    foreach ($value as $key2 => $value2) {
        $sum = $sum + $value2;
    }

}
$sumEil = 0;
$sumStulp = 0;
$istrizVirsDesin = 0;
$istrizVirsKair = 0;
$y = sizeof($masyvas) - 1;
for ($i = 0; $i < sizeof($masyvas); $i++) {

    $istrizVirsDesin += $masyvas[$i][$y--];
    $istrizVirsKair += $masyvas[$i][$i];

    for ($k = 0; $k < sizeof($masyvas[$i]); $k++) {
        $sumEil += $masyvas[$i][$k];
        $sumStulp += $masyvas[$k][$i];
    }

    $atsakymai[] = $sumEil;
    $atsakymai[] = $sumStulp;

    $sumStulp = 0;
    $sumEil = 0;
}
$atsakymai[] = $istrizVirsDesin;
$atsakymai[] = $istrizVirsKair;

//echo sizeof(array_unique($atsakymai));
//echo gettype(sizeof(array_unique($atsakymai)));


if (sizeof(array_unique($atsakymai)) < 2) {
    $ats = "Duotas kvadratas yra magiškasis";
}

if (sizeof(array_unique($atsakymai)) > 1) {
    $ats = "Tai nėra magiškasis kvadratas";
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Masyvai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Meniu</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Magiškasis kvadratas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="skelbimuFiltravimas.php">Skelbimai</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container-md">
    <div class="row mt-5">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Patikrinkite ar yra magiškasis kvadratas
                </div>
                <div class="card-body">
                    <?php if (isset($ats)) { ?>
                        <?= $ats ?>
                    <?php } ?>
                </div>
            </div>
            <div class="mt-3">

            </div>
        </div>
        <div class="col-md-8">
            <div>
                Jūsų pateiktas kvadratas:
            </div>
            <div class="col-md-6">
                <table class="table text-center mt-3">
                    <tr>
                        <?php for ($c = 0;$c < sizeof($masyvas);$c++){
                        for ($d = 0; $d < sizeof($masyvas[$c]); $d++) { ?>
                            <td class="border">
                                <?= $masyvas[$c][$d] ?>
                            </td>
                        <?php } ?>
                    </tr>
                    <tr>
                        <?php } ?>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>
</html>
