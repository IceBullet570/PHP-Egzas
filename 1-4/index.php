<?php

/*
 1.  Grąžinkite visų lyginių skaičių, esančių $numbers masyve, sumą (1 balas) +0.5 jeigu array funkcijos naudojamos
*/

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

function exercise1($number) : int
    {
    return !($number & 1);
    }

$evenNumbers = array_filter($numbers, "exercise1");

$evenNumbersSum = array_sum($evenNumbers);

echo ("1 Uzduotis. Lyginiu skaiciu suma = " . $evenNumbersSum . PHP_EOL);
echo "***********************" . PHP_EOL;

/*
 2. Grąžinkite visų skaičių, esančių $numbers masyve, sandaugą (1 balas), +0.5 jeigu array funkcijos naudojamos
*/

$numbers2 = [
    [1, 3, 5],
    [55, 87, 100],
    [12],
    [],
];


function exercise2($givenArray) : int
    {
        return array_reduce($givenArray, function ($carry, $array) {
            foreach ($array as $number)
            $carry *= $number;
            return $carry;
            },
            1);
    }
    
$arrayMultiplication = (exercise2($numbers2));

echo ("2 Uzduotis. Masyve esanciu skaiciu sandauga = " . $arrayMultiplication . PHP_EOL);
echo "***********************" . PHP_EOL;

/*
 3. Masyve $holidays turime kelionių agentūros siūlomas keliones su kaina ir dalyvių skaičiumi.
 Terminale išspausdinkite santrauką, kurioje matytusi miesto pavadinimas, kelionių pavadinimai ir dalyvių sumokėta suma
 Dėmesio! Santraukoje nerodykite tų kelionių, kurių kaina yra null. (2 balai)
*/

//   Destination "Paris".
//   Titles: "Romantic Paris", "Hidden Paris"
//   Total: 99500
//   ************
//   Destination "New York"

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
        'title' => 'Spectacular Sydney',
        'destination' => 'Sydney',
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

function super_unique(array $array, mixed $key): array
{
    $array1 = [];
    foreach ($array as &$var) {
        if (!isset($array1[$var[$key]]))
            $array1[$var[$key]] = &$var;
    }
    $array = array_values($array1);
    return $array;
}
 
function exercise3(array $holidaysList): void
{
    $allHolidays = [];
    for ($i = 0; $i < count($holidaysList); $i++) {
        if (isset($holidaysList[$i]['price'])) {
            $holidaySummary = [
                'destination' => $holidaysList[$i]['destination'],
                'titles' => ['"' . $holidaysList[$i]['title'] . '"'],
                'total' => $holidaysList[$i]['price'] * $holidaysList[$i]['tourists']
            ];
            foreach ($holidaysList as $holiday) {
                if ($holidaySummary['destination'] === $holiday['destination'] && !in_array('"' . $holiday['title'] . '"', $holidaySummary['titles'], true)) {
                    $holidaySummary['titles'][] = '"' . $holiday['title'] . '"';
                    $holidaySummary['total'] += $holiday['price'] * $holiday['tourists'];
                }
            }
            $holidaySummary['titles'] = implode(", ", $holidaySummary['titles']);
            $allHolidays[] = $holidaySummary;
        };
    };
 
    $allHolidays = super_unique($allHolidays, 'destination');
 
    foreach ($allHolidays as $key => $holidays) {
        echo 'Destination ' . '"' . $holidays['destination'] . '"' . PHP_EOL;
        echo 'Titles: ' . $holidays['titles'] . PHP_EOL;
        echo 'Total: ' . $holidays['total'] . PHP_EOL;
 
        $array_keys = array_keys($allHolidays);
        if (end($array_keys) !== $key) {
            echo '************' . PHP_EOL;
        }
    };
}

echo ("3 Uzduotis. Atostogu santraukos: " . PHP_EOL);
exercise3($holidays);
echo "***********************" . PHP_EOL;

// /*
//  4. Pakoreguokite 3 užduotį taip, kad ji duomenis rašytų ne į terminalą, o spausdintų į failą. (1 balas)
// */

function exercise4(array $holidaysList): void
{
    $allHolidays = [];
    for ($i = 0; $i < count($holidaysList); $i++) {
        if (isset($holidaysList[$i]['price'])) {
            $holidaySummary = [
                'destination' => $holidaysList[$i]['destination'],
                'titles' => ['"' . $holidaysList[$i]['title'] . '"'],
                'total' => $holidaysList[$i]['price'] * $holidaysList[$i]['tourists']
            ];
            foreach ($holidaysList as $holiday) {
                if ($holidaySummary['destination'] === $holiday['destination'] && !in_array('"' . $holiday['title'] . '"', $holidaySummary['titles'], true)) {
                    $holidaySummary['titles'][] = '"' . $holiday['title'] . '"';
                    $holidaySummary['total'] += $holiday['price'] * $holiday['tourists'];
                }
            }
            $holidaySummary['titles'] = implode(", ", $holidaySummary['titles']);
            $allHolidays[] = $holidaySummary;
        };
    };
 
    $allHolidays = super_unique($allHolidays, 'destination');

    $filename = 'file.txt';

    foreach ($allHolidays as $key => $holidays) {
        $file = fopen($filename, "w") or die;
        fwrite ($file, 'Destination ' . '"' . $holidays['destination'] . '"' . PHP_EOL);
        fwrite ($file, 'Titles: ' . $holidays['titles'] . PHP_EOL);
        fwrite ($file, 'Total: ' . $holidays['total'] . PHP_EOL);
 
        $array_keys = array_keys($allHolidays);
        if (end($array_keys) !== $key) {
            fwrite ($file, '************' . PHP_EOL);
        }
        fclose($file);
    };
}

echo ("4 Uzduotis. Sukurtas failas file.txt su 3 uzduoties duomenimis" . PHP_EOL);
exercise4($holidays);
echo "***********************" . PHP_EOL;