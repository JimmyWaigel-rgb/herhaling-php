<?php
$getal = 4;
    ECHO is_int($getal);
    PHP_EOL;

    $klas = ["Piet van Dijk", "Rembrandt van Rijn", "Vincent van Gogh", "Floris van Dyck"]; 
    print_r ($klas);
    

    $klas = ["Piet van Dijk", "Rembrandt van Rijn", "Vincent van Gogh", "Floris van Dyck"]; 
    for($i=0;$i<count($klas);$i++){
        echo $klas[$i], PHP_EOL;
    }

    $klas = ["Piet van Dijk", "Rembrandt van Rijn", "Vincent van Gogh", "Floris van Dyck"]; 
    for($i=0;$i<count($klas);$i++){
        foreach ($klas as $value)
        echo $value, PHP_EOL;
    }



    $bucket_list = [];
    $hoeveelheid_activiteiten = readline("Hoeveel activiteiten wil je toevoegen aan je bucket list?");

    for($i=0;$i<$hoeveelheid_activiteiten;$i++){
        array_push($bucket_list, readline("Welke activiteiten wil je toevoegen?"));
    }
    print_r ($bucket_list);

    foreach($bucket_list as $item){
        echo $item, PHP_EOL;
    }
?>