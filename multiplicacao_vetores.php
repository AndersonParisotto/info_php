<?php
/*
    Multiplicar um vetor $a por um vetor $b e salvar o produto dessa multiplicação em um novo vetor chamado $resultado:
    $a = [2, 3, 4];
    $b = [5, 6, 7];
    $resultado = $a * $b;
    $resultado = [10, 18, 28];
*/

$a = [2, 3, 4, 3];
$b = [5, 6, 7, 3];
$i = 0;
$count = count($a);

while ($i != $count)
{
   $result[$i] = $a[$i] * $b[$i];
   echo "$result[$i]</br>";
   $i++;
}


