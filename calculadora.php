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
@@ = Verificar ano bissexto de $value
!! = fatorial de $value
primo = verifica se o $value é primo
*/

// digitar os valores e os operadores
$value = 5;
$value2 = 12;
$operator = '+';

// verifica o operador para exibições diferenciadas
if ($operator == '@@')
{
    echo "$value <br/>";
    
    $result = anoBissexto($value);
    
    exibir($result);
}

else if ($operator == 'primo')
{
    $result = calcular($operator, $value, $value2);

    echo "Verificando o número {$value}<br/>";
    exibir($result);
}

else
{
    $result = calcular($operator, $value, $value2);

    exibir($result);

    $parImpar = parOuImpar($result);
   
    parImpar($parImpar);
}

// função principal de calcular
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

    else if ($operator == 'primo')
    {
        $result = primos($value);
        return $result;
    }

    else if ($operator == '@@')
    {
        $result = anoBissexto($value);
        return anoBissexto($value);
    }

    else if ($operator == '!!')
    {
        $result = fatorial($value);
        return $result;

    }

    else /*if ($operator == '-')*/
    {
        return menos($value, $value2);
    }
}

// funções de cada operador
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

function fatorial($value)
{
    $i = $value - 1;

    while ($i != 1)
    {
        $value = $value * $i;
        $i--;
    }

    return $value;

}

function primos($value)
{
    $quant = 0; 

    for($n = 1; $n < $value;$n++)
 {
    $resto = $value % 2; 
    
    if($resto == 0 )
    {
        break;
    }

    $resto = $value % $n; 

    if($resto != 0 )
    {
        $quant++;
    }
 }

    if($quant > 0 )
    {
        return " é primo";
    }

    else
    {
        return " não é primo";
    }
}

// verificar se é par ou impar
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

// verifica se é ano bissexto
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

// exibição do resultado padrão
function exibir($result)
{
    echo "Resultado: {$result} ";
}

// função secundária de par ou impar
function parImpar($parImpar)
{
    echo "e ele é {$parImpar}";
}