<?php

echo CenturyYear(1905) . "<br>";
echo CenturyYear(1700);

function centuryYear($year)
{
    return "Ano" . $year . " = Século " . ceil($year / 100);
}
