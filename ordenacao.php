<?php
/*
// Encontrar o maior valor em um conjunto de numeros em um array.
// E exibir esse valor ao final para o usuario
echo "Primeira atividade:<br/>";
// números para verificar
$number = [ 10, 80, 5, 14, 90, 29, 99, 1];

// quantidade de números no array
$count = count($number);

$i = 0;

// variavel para o maior numero
$maior = $number[$i];

// laço para verificar qual é o maior dentro do array
while ($i != $count)
{
    if ($maior < $number[$i])
    {
        $maior = $number[$i];
    }
    $i++;
}

echo "O maior número é {$maior}<br/>";

// ---------------------------------------------------------------------------------------------------------------------------------------------

// Por meio da tecnica de ordenacao Bubble Sort, ordene o array abaixo em ordem crescente

// Os números para a ordenação
echo "Segunda atividade:<br/>";

$number2 = [34, 12, 98, 45, 23, 67, 8];


$count = count($number2);

for ($i = 1; $i < $count; $i++)
{
    for ($s = 0; $s < $count-$i; $s++)
    {
        if ($number2[$s] > $number2[$s+1])
        {
            $m = $number2[$s];
            $number2[$s] = $number2[$s+1];
            $number2[$s+1] = $m;
        }
    }
}

$s = 0;

while($s != $count)
{
    echo "{$number2[$s]}<br/>";
    $s++;
}
*/

//------------------------------------------------frutas----------------------------------------------------//
//sort = ordem asc e indice segue/ rsort = ordem desce e indice segue / asort = orde ascd indice continua igual /ksort = ordem asc do indice

$frutas = ["maçã", "banana", "laranja", "banana", "uva", "maçã", "maçã", "maçã", "pessego", "pessego"];

$tipo = "asc";

$frutas = ordenacao($frutas, $tipo);

$count = count($frutas);

$newfrutas = [];

for ($i = 0; $i < $count; $i++) 
{
    $frutaAtual = $frutas[$i]; 
    
    if (!isset($newfrutas[$frutaAtual])) 
    {
        $newfrutas[$frutaAtual] = 1;
    }

    else 
    {
        $newfrutas[$frutaAtual]++;
    }
}

// 1 OPÇÃO
foreach ($newfrutas as $fruta => $quantidade)
{
    echo "{$fruta} {$quantidade}, ";
}

function ordenacao($frutas, $tipo)
{

    if ($tipo == "desc")
    {
        rsort($frutas);
        return $frutas;
    }
    
    else if ($tipo == "asc")
    {
        sort($frutas);
        return $frutas;
    }
}





/*
// 2 OPÇÃO
$resultado = [];
$frutasJaTem = [];

for ($i = 0; $i < $count; $i++) 
{
    $frutaAtual = $frutas[$i];
    
    if (!in_array($frutaAtual, $frutasJaTem)) 
    {
        $resultado[] = $newfrutas[$frutaAtual] . " " . $frutaAtual;
        
        $frutasJaTem[] = $frutaAtual;
    }
}

echo implode(', ', $resultado);
*/


// Utilizando o mesmo exercicio anterior, criar uma função que recebe dois parametros (array, string) para ordenar o array de frutas em ordem
// crescente(ASC) ou decrescente(DESC)
// Dica: sort, usort, asort, ksort, rsort...
