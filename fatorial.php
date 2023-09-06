<?php
/*
    Calcular o fatorial de um número qualquer.
    Exemplo: 
    &numero = 5;
    5! = 5 * 4 * 3 * 2 * 1
*/

$number = 10;
$i = $number - 1;

while ($i != 1)
{
    $number = $number * $i;
    $i--;
}

echo "$number";
