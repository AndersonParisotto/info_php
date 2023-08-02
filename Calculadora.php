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

$value = 4;
$operator = 'harm';
$value2 = 5;
$result = 0;

if ($operator == '/') 
{
    $result = $value / $value2 ;
}

else if ($operator == '*') 
{
    $result = $value * $value2 ;
}

else if ($operator == '+')
{
    $result = $value + $value2 ;
}

else if ($operator == 'arit')
{
    $result = ($value + $value2) / 2 ;
    echo ("Média aritmética entre {$value} e {$value2} é de {$result}") ;
    exit ;
}

else if ($operator == 'harm')
{
    $result = round(2 / ((1/$value) + (1/$value2)), 2);
    echo ("Média harmônica entre {$value} e {$value2} é de {$result}") ;
    exit ;
}
 
else if ($operator == '^')
{
    $result = $value ** $value2 ;
}

else if ($operator == '%-')
{
    $result = $value - ($value * ($value2 / 100)) ;
    echo ("{$value} com {$value2}% de desconto é de {$result}") ;
    exit ;
}

else if ($operator == '%+')
{
    $result = $value + ($value * ($value2 / 100)) ;
    echo ("{$value} com {$value2}% de acrescimo é de {$result}") ;
    exit ;
}

else if ($operator == 'mmc')
{
   echo ('Não tem') ;
   exit ;
}

else 
{
    $result = $value - $value2 ;
}

echo ("Resultado de {$value} {$operator} {$value2} = {$result} <br> " );

if ($result % 2 == 0)
{
    echo ("O número {$result} é Par ") ;
}

else 
{
    echo ("O número {$result} é Impar ") ;
}


    