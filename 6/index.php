<?php

/*
 6. Parašykite programą, kuri per argumentų padavimą terminale, paleidžiant funkciją juos priimtų, sudaugintų
tarpusavyje ir pakeltu kvadratu. Atkreipkite dėmesį, kad jeigu argumentas yra paduodamas ne skaičius, reikia, kad
terminale gautumėme atitinkamą klaidos kodą ir pranešimą. (2 balai)
*/

//  php index.php  3 5 -->> Jūsų skaičius: 225

function calculation() : int 
{
    $firstNumber = readline("Iveskite pirma skaiciu ");
    $secondNumber = readline("Iveskite antra skaiciu ");

    if (is_numeric($firstNumber) === false || is_numeric($secondNumber) === false){
        echo "Atitinkamas klaidos kodas :) " . "Pirmas arba antras argumentas - ne skaicius";
        exit;
    } else {
    
        return pow(($firstNumber * $secondNumber), 2);
    }
}

$result = calculation();

echo "6 Uzduotis. Ivestu skaiciu sandauga pakelta kvadratu = " . $result . PHP_EOL;