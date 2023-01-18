<?php
/*
3.  Masyve $holidays turime kelionių agentūros siūlomas keliones su kaina ir dalyvių skaičiumi.
    Terminale išspausdinkite santrauką, kurioje matytusi miesto pavadinimas, kelionių pavadinimai ir dalyvių sumokėta suma
    Dėmesio! Santraukoje nerodykite tų kelionių, kurių kaina yra null. (3 balai)

    Destination "Paris".
    Titles: "Romantic Paris", "Hidden Paris"
    Total: 99500
    ************
    Destination "New York"
*/

declare(strict_types=1);

$holidays = [
    [
        'title' => 'Romantic Paris',
        'destination' => 'Paris',
        'price' => 1500,
        'tourists' => 55,
    ],
    [
        'title' => 'Amazing New York',
        'destination' => 'New York',
        'price' => 2699,
        'tourists' => 21,
    ],
    [
        'title' => 'Spectacular Sydey',
        'destination' => 'Sydey',
        'price' => 4130,
        'tourists' => 9,
    ],
    [
        'title' => 'Hidden Paris',
        'destination' => 'Paris',
        'price' => 1700,
        'tourists' => 10,
    ],
    [
        'title' => 'Emperors of the past',
        'destination' => 'Beijing',
        'price' => null,
        'tourists' => 10,
    ],
];

function printTripSummary (array $holidays): void {

    $destinations = [];

    foreach ($holidays as $item) {
        if (!is_null($item['price'])) {
            $destinations[$item['destination']]['title'][] = '"'.$item['title'].'"';
            $destinations[$item['destination']]['total'][] = $item['price']*$item['tourists'];
        }
    }

    foreach ($destinations as $key => $item) {
        echo 'Destination "'.$key.'".'.PHP_EOL;
        echo 'Titles: '.implode(', ',$item['title']).PHP_EOL;
        echo 'Total: '.array_sum($item['total']).PHP_EOL;
        echo '************'.PHP_EOL;
    }

}

printTripSummary($holidays);