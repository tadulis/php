<?php
// Ekrane atvaizduoti zmogaus gaunama valandine alga
// Kai jo valandinis uzmokestis 4.53 Eur o dirba 6h
// per diena.

//Sukurti daugiamati masyva kuriame butu atvaizduojama
//kompiuterio pavadinimas ir kaina.
// Naudojant ciklus atvaizduoti tas kompiuteriu kainas
//kurios yra FLOAT tipo. p.s. priskiriant kainas naujam
//kintamajam.

//Sukurti masyva 5 elementu kuriame atsivaizduotu savaites
//dienu temperatura atsitiktinai ir atvaizduoti ekrane
//nuo maziausios iki diziausios to masyvo temperaturos.

//$valandineAlga = 4.53;
//
//for ($i = 1; $i < 7; $i++) {
//    print $i * $valandineAlga . "<br>";
//}

//_____________________________

//$kompiuteriai = [
//    [
//        "name" => "Macentos",
//        "price" => 3,
//    ],
//    [
//        "name" => "Dezinis",
//        "price" => 3.3,
//    ],
//    [
//        "name" => "Karutinis",
//        "price" => 7.5,
//    ],
//    [
//        "name" => "Mazasis",
//        "price" => 1,
//    ],
//];

//foreach ($kompiuteriai as $key => $value){
//    if (is_float($value["price"])){
//        print $value["price"] . "<br>";
//    }
//}

//______________________________

$temp = [
    [
        "temp" => rand(0, 40),
        "name" => "Pirmadienis",
    ],
    [
        "temp" => rand(0, 40),
        "name" => "Antradienis",
    ],
    [
        "temp" => rand(0, 40),
        "name" => "Treciadienis",
    ],
    [
        "temp" => rand(0, 40),
        "name" => "Ketvirtadienis",
    ],
    [
        "temp" => rand(0, 40),
        "name" => "Penktadienis",
    ],
    [
        "temp" => rand(0, 40),
        "name" => "Sestadienis",
    ],
    [
        "temp" => rand(0, 40),
        "name" => "Sekmadienis",
    ],

];

sort($temp);

foreach ($temp as $key => $value){
    print $value["name"] . $value["temp"] . "<br>";
}

?>