<?php
// 1.  Grąžinkite visų lyginių skaičių, esančių $numbers masyve, sumą (1 balas)

declare(strict_types=1);

$numbers = [
       15,
       55,
       66,
       91,
       100,
       995,
       17,
       550,
   ];

function getEvenSum (array $numbers): int {

    $result = 0;

    foreach ($numbers as $key => $number) 
        $result += ($number%2)?0:$number;

    return $result;
}

echo getEvenSum ($numbers);
