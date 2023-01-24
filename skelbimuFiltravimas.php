<?php

$skelbimai = array(
    array('id' => '17976', 'text' => 'Viešbutis Šventojoje ,, Pajūrio sodyba\'\' nuolatiniam darbui ieško administratorių ir virėjos vasaros sezonui. Skambinti 869333133 ', 'cost' => '542', 'onPay' => '1493195731'),
    array('id' => '17885', 'text' => 'Ieskoma Valytoja nedideliam viesbutukui Palangoje, vasaros sezonui. Patirtis dirbant viesbutyje privalumas.', 'cost' => '214', 'onPay' => '0'),
    array('id' => '17533', 'text' => 'TINKAVIMAS KALKINIU SKIEDINIU KOKYBIŠKAI IR NEBRANGIAI.TURIME 20 METŲ PATIRTĮ IR LABAI GERĄ REPUTACIJĄ. 868408837', 'cost' => '884', 'onPay' => '1490043275'),
    array('id' => '17532', 'text' => 'Parduodamas tvarkingas didelis mūrinis garažas su rūsiu,45kvadratai bendro ploto,bangu g. prie Medvalakio 860584184', 'cost' => '512', 'onPay' => '1489947320'),
    array('id' => '17485', 'text' => 'Ieskoma Valytoja nedideliam viesbutukui Palangoje, vasaros sezonui. Patirtis dirbant viesbutyje privalumas.', 'cost' => '214', 'onPay' => '0'),
    array('id' => '17303', 'text' => 'Perkame įvairius automobilius, mikroautobusus. Tvarkingus, su defektais, daužtus. 864691263', 'cost' => '800', 'onPay' => '1488368780'),
    array('id' => '17302', 'text' => 'Pirkčiau katerį-valtį su varikliu. Gali būti su defektu, apleistas. 864691263', 'cost' => '400', 'onPay' => '1488368133'),
    array('id' => '17102', 'text' => 'Parduodu geros būklės jūrinį konteinerį. Galima naudoti kaip sandėlį. Tel. 865988820', 'cost' => '400', 'onPay' => '1485962389'),
    array('id' => '16992', 'text' => 'Parduodu dideli mūrini garažą  Bangų g. prie Medvalakio,garažas sausas, tvarkingas su rūsiu,yra elektra .Garažas 22m²  rūsys taip pat 22m²', 'cost' => '382', 'onPay' => '0'),
    array('id' => '16989', 'text' => 'Ieškau apleisto 6 arų sklypo soduose: sodinimui, mašinos nusiplovimui. Gal kas turi nereikalingą ir neparduoda. Galėčiau prižiūrėti. Tel. 8 609 76193.', 'cost' => '168', 'onPay' => '1484996260'),
    array('id' => '16694', 'text' => 'Sportiškas ir išsilavinęs vyriškis, skaitantis ir informaciją suvokiantis daugeliu Europos kalbų, ieško bet kokio darbo (3 dienas per savaitę) su oriu atlyginimu. Darbo pasiūlymus siųsti el. paštu jamamsitadarba@gmail.com', 'cost' => '466', 'onPay' => '1481212052'),
    array('id' => '16626', 'text' => 'Parduodu avieną (gimę š. m. kovą – balandį ), mėsa puikaus skonio, neturi būdingo specifinio kvapo, galima pirkti ir po pusę avinuko ar užsisakyti artėjančioms šventėms, atvežu. Kaina 5 €/ kg., tel.nr. 8 678 35 932.', 'cost' => '1864', 'onPay' => '1480663237'),
    array('id' => '16554', 'text' => 'Kokybiškai klijuoju plyteles. Turiu ilgametę patirtį.', 'cost' => '200', 'onPay' => '0'),
    array('id' => '16515', 'text' => 'Dazymo,glaistymo darbai su amerikietiska įranga.Didele darbo patirtis.+37062700070', 'cost' => '400', 'onPay' => '0'),
    array('id' => '16311', 'text' => 'Pirkčiau 2 kambarių butą iki 30000 eurų.', 'cost' => '200', 'onPay' => '0'),
    array('id' => '16172', 'text' => 'Parduodamas naujos statybos 122 kv. m. namas Vydmantuose. Kaina - 78000 Eur. Tel. 8 659 88820', 'cost' => '214', 'onPay' => '0'),
    array('id' => '16171', 'text' => 'Parduodamas naujos statybos 122 kv. m. namas Vydmantuose. Kaina - 78000 Eur. Tel. 8 659 88820', 'cost' => '214', 'onPay' => '0'),
    array('id' => '16169', 'text' => '5 mergaitiškas (150-170 cm) žiemines striukes. 846053024', 'cost' => '100', 'onPay' => '0'),
    array('id' => '16168', 'text' => 'Eko BRIKETAI Gamintoju kainomis', 'cost' => '500', 'onPay' => '0')
);
$sum = 0;
$apmoketa = 0;
$apmoketuVerte = 0;
$neapmoketuVerte = 0;
foreach ($skelbimai as $key => $skelbimas) {
//    echo $skelbimas['id'] . "<br>";
    $sum++;
    if ($skelbimas['onPay'] > 0) {
        $apmoketa++;
        $apmoketuVerte += $skelbimai[$key]['cost'];
    }
    if ($skelbimas['onPay'] == 0) {
        $neapmoketuVerte += $skelbimai[$key]['cost'];
    }

}
//echo "Skelbimu: " . $sum . "<br>";
//echo "Apmoketa: " . $apmoketa . "<br>";
//echo $skelbimai[0]['cost']."<br>";
//echo "Apmoketu verte: " . $apmoketuVerte . "<br>";
//echo "Neapmoketu verte: " . $neapmoketuVerte . "<br>";

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
        <div class="">
            <table class="table border">
                <thead class="bg-info-subtle">
                <tr class="text-center text-uppercase">
                    <th class="border" colspan="4">Skelbimų suvestinė</th>
                </tr>
                <tr>
                    <th class="border">Skelbimo ID</th>
                    <th class="text-center border">Skelbimas</th>
                    <th class="border">Kaina</th>
                    <th class="border">Apmokėjimo data</th>
                </tr>
                </thead>
                <tbody>

                <?php foreach ($skelbimai as $skelbimas){ ?>
                    <tr>
                        <td class="col-md-1 border"> <?= $skelbimas['id'] ?> </td>
                        <td class="border"> <?= $skelbimas['text'] ?> </td>
                        <td class="border"> <?= $skelbimas['cost'] ?> </td>
                        <td class="col-md-2 border"> <?= $skelbimas['onPay']>0?date('y-m-d h:i:s',$skelbimas['onPay']):"" ?> </td>
                    </tr>
                        <?php } ?>
                </tbody>
                <tfoot>
                <tr>
                    <td class="border" colspan="4">
                        <b>Iš viso skelbimų yra <?= $sum ?> vnt</b>
                </td>
                </tr>
                <tr>
                    <td class="border" colspan="4">
                        <b>Iš viso apmokėtų skelbimų yra <?= $apmoketa ?> vnt</b>
                    </td>
                </tr>
                <tr>
                    <td class="border" colspan="4">
                        <b>Suma gauta iš apmokėtų skelbimų yra <?= $apmoketuVerte ?> eur</b>
                    </td>
                </tr>
                <tr>
                    <td class="border" colspan="4">
                        <b>Neapmokėtų skelbimų vertė yra <?= $neapmoketuVerte ?> eur</b>
                    </td>
                </tr>
                </tfoot>

            </table>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>
</html>

