<?php

// 6. Parašykite programą, kuri per argumentų padavimą terminale paleidžiant funkciją juos priimtų ir juos sudaugintų tarpusavyje ir pakeltu kvadratu. 
// Atkreipkite dėmesį, kad jeigu argumentas yra paduodamas ne skaičius, reikia, kad terminale gautumėme atitinkamą klaidos kodą ir pranešimą. (2 balai)

declare(strict_types=1);

if (isset($argc)) {
    if ($argc!==3) 
        die("Error #1: script requires exactly 2 arguments to be supplied!");
    if (!is_numeric($argv[1])||!is_numeric($argv[2])) 
        die("Error #2: script requires both arguments must be numeric!");
    $result = pow(($argv[1]*$argv[2]),2);
    echo '('.$argv[1].'*'.$argv[2].')^2 = '.$result.PHP_EOL;
} 