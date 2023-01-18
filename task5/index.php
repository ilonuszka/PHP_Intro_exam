<?php
// 5. Parašykite programą, kuri Jūsų susigalvotus duomenis paimtų iš failo ir atspausdintų terminale. (1.5 balas)

declare(strict_types=1);

function echoFile(string $fileName){

    $fileContent = file_get_contents($fileName);
    $contentLines = explode(PHP_EOL, $fileContent);
    
    // Print on screen with removed asterixes (*)
    foreach ($contentLines as $line) {
        if (!str_starts_with($line,'*')) 
        echo $line;
        echo PHP_EOL;
    }

}

echoFile('trips.txt');