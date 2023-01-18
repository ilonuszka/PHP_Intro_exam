<?php

// 2. Grąžinkite visų skaičių, esančių $numbers masyve, sandaugą (1 balas)

declare(strict_types=1);

$numbers = [
    [1, 3, 5],
    [55, 87, 100],
    [12],
    [],
];

function getMultiplication (array $numbers): int {

    $result = 1;

    foreach ($numbers as $subArray) {
        foreach ($subArray as $number) {
            $result *= $number;
        }
    }

    return $result;
}

echo getMultiplication ($numbers);