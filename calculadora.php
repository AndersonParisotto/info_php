<?php

/*
------Operadores------
+ = Adição
- = Diminuição
* = Multiplicação
/ = Divisão
^ = Potenciação
%- = Desconto
%+ = Acrescimo
arit = Media Aritmetica
harm = Média Harmônica
*/

$value = 2022;
$value2 = 10;
$operator = '@@';

$result = calcular($operator, $value, $value2);
$parImpar = parOuImpar($result, $parImpar);

exibir($result, $parImpar);

function calcular($operator, $value, $value2)
{
    if ($operator == '*') 
    {
        return multiplicacao($value, $value2);
    }

    else if ($operator == '/') 
    {
        return divisao($value, $value2);
    }

    else if ($operator == '+')
    {
        return soma($value, $value2);
    }

    else if ($operator == 'arit')
    {
        return mediaAritmetica($value, $value2);
    }

    else if ($operator == 'harm')
    {
        return mediaHarmonica($value, $value2);
    }
    
    else if ($operator == '^')
    {
        return potenciacao($value, $value2);
    }

    else if ($operator == '%-')
    {
        return desconto($value, $value2);
    }

    else if ($operator == '%+')
    {
        return acrescimo($value, $value2);
    }

    else if ($operator == '@@')
    {
        $result = anoBissexto($value);
        return anoBissexto($value);
    }

    else /*if ($operator == '-')*/
    {
        return menos($value, $value2);
    }
}

function soma($value, $value2)
{
    return $value + $value2;
}

function multiplicacao($value, $value2)
{
    return $value * $value2;
}

function divisao($value, $value2)
{
    return $value / $value2;
}

function mediaAritmetica($value, $value2)
{
    return ($value + $value2) / 2 ;
}

function mediaHarmonica($value, $value2)
{
    return round(2 / (1/$value + 1/$value2), 2);
}

function potenciacao($value, $value2)
{
    return $value ** $value2;
}

function desconto($value, $value2)
{
    return $value - $value * ($value2 / 100) ;
}

function acrescimo($value, $value2)
{
    return $value + $value * ($value2 / 100) ;
}

function menos($value, $value2)
{
    return $value - $value2 ;    
}

function parOuImpar($result)
{
    if ($result % 2 == 0)
    {
        return "par";
    }

    else
    {
        return "impar";
    }
}

function anoBissexto($value)
{
    if ($value % 4 == 0 && $value % 100 == 0 && $value % 400 == 0)
    {
        return "bissexto"; 
    }
    else
    {
        return "não é bissexto";
    }
}




function exibir($result, $parImpar)
{
    echo "Resultado é {$result} e ele é {$parImpar} <br>";
}




















/*

Media ponderada
$nota1 = 4;
$prova1 = 6;
$nota2 = 6;
$prova2 = 7;
$nota3 = 5;
$prova3 = 7;
$resultmedia = 0;
$denominador = 0;

function mediaPonderada()
{
    $denominador = ($prova1 + $prova2 + $prova3) ;
    
    $result = ($nota1 * $prova1 + $nota2 * $prova2 + $nota3 * $prova3) / $denominador ;
    
    //Media dos pesos das provas, 80% para aprovar
    $resultmedia = round((($denominador / 3) * 80) / 100 ,2);
}

*/