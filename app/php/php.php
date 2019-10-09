<?php

$mokyklos = ["Mokykla1", "Mokykla2", "Mokykla3", "Mokykla4", "Mokykla5"];

print $mokyklos[2];

//_______________________________

$mokymoIstaigos = [
    "kolegijos" => [
        [
            "name" => "Kolegija1",
            "address" => "Adresas1",
        ],
        [
            "name" => "Kolegija2",
            "address" => "Adresas2",
        ],
    ],
    "universitetai" => [
        [
            "name" => "Universitetas1",
            "address" => "Adresas1",
        ],
        [
            "name" => "Universitetas2",
            "address" => "Adresas2",
        ],
    ],
];

foreach ($mokymoIstaigos["kolegijos"] as $key => $value){
    print $value["name"];
}
//_____________________________

$amzius = 36;

if ($amzius >= 16 && $amzius <= 25){
    $tekstas = "Tavo amzius $amzius. Minimalus laikas 13min 27s";
}elseif ($amzius >= 26 && $amzius <= 32){
    $tekstas = "Tavo amzius $amzius. Minimalus laikas 15min 10s";
}else{
    $tekstas = "Tavo amzius $amzius. Minimalus laikas 17min 00s";
}


?>