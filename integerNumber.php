<?php

function randomNumber()
{
    $number = array();

    for ($i = 1; $i < 20; $i++) {
        $number[$i] = random_int(1, 10);

        array_push($number, $i);
    }
    $n = implode(",", $number);
    echo "Array sorteado = [" . $n . "]";
    return array_count_values($number);
}

function getBigger($arr)
{
    $higher = sprintf("O número que mais se repete é o %s <br> Ele se repete %s vezes", array_search(max($arr), $arr, true), max($arr));
    return $higher;
}


$a = randomNumber();
echo "<br>". getBigger($a);

