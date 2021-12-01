<?php

LowerPrime(10);
LowerPrime(30);

function lowerPrime($num)
{
    $prime = array();
    $control = false;

    for ($i = $num; $i > 0; $i--) {
        for ($n = 2; $n < $i; $n++) {
            if ($i % $n == 0) {
                $control = false;
                break;
            } else {
                $control = true;
            }
        }
        if ($control) {
            array_push($prime, $i);
        }
    }

    foreach ($prime as $number) {
        echo "Numero ". $num ." = ". $number . "<br>";
        break;
    }
}
