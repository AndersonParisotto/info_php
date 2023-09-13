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
@@ = Verificar ano bissexto ($value)
*/



$value = 2000;
$value2 = 11;
$operator = '@@';

if ($operator == '@@')
{
    echo "$value <br/>";
    
    $result = anoBissexto($value);
    
    exibir($result);
}

else
{
    $result = calcular($operator, $value, $value2);

    exibir($result);

   $parImpar = parOuImpar($result);
   
   parImpar($parImpar);
}

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
    if (($value % 4 == 0 && $value % 100 != 0) || ($value % 4 == 0 && $value % 100 == 0 && $value % 400 == 0))
    {
        return "Bissexto"; 
    }
  
    else
    {
        return "Não é bissexto";
    }
}

function exibir($result)
{
    echo "Resultado: {$result} ";
}

function parImpar($parImpar)
{
    echo "e ele é {$parImpar}";
}