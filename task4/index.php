<?php
// 4. Pakoreguokite 3 užduotį taip, kad ji duomenis rašytų ne į terminalą, o spausdintų į failą. (1.5 balas)

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

function printTripSummaryToFile (array $holidays): void {

    $destinations = [];

    foreach ($holidays as $item) {
        if (!is_null($item['price'])) {
            $destinations[$item['destination']]['title'][] = '"'.$item['title'].'"';
            $destinations[$item['destination']]['total'][] = $item['price']*$item['tourists'];
        }
    }

    $result = '';

    foreach ($destinations as $key => $item) {
        $result.= 'Destination "'.$key.'".'.PHP_EOL;
        $result.= 'Titles: '.implode(', ',$item['title']).PHP_EOL;
        $result.= 'Total: '.array_sum($item['total']).PHP_EOL;
        $result.= '************'.PHP_EOL;
    }

    if (file_put_contents('trips.txt',$result)) 
        echo 'Trips successfully writen to file "trips.txt';
    else 
        echo 'Error on writing trips to file';
}

printTripSummaryToFile($holidays);