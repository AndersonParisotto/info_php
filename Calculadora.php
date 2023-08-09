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
pond = Média Ponderada
*/

//Calculadora
$value = 2;
$operator = 'pond';
$value2 = 3;
$result = 0;

//Media ponderada
$nota1 = 4;
$prova1 = 6;
$nota2 = 6;
$prova2 = 7;
$nota3 = 5;
$prova3 = 7;
$resultmedia = 0;
$denominador = 0;



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
    $result = round(2 / (1/$value + 1/$value2), 2);

    echo ("Média harmônica entre {$value} e {$value2} é de {$result}") ;

    exit ;
}
 
else if ($operator == '^')
{
    $result = $value ** $value2 ;
}

else if ($operator == '%-')
{
    $result = $value - $value * ($value2 / 100) ;

    echo ("{$value} com {$value2}% de desconto é de {$result}") ;

    exit ;
}

else if ($operator == '%+')
{
    $result = $value + $value * ($value2 / 100) ;

    echo ("{$value} com {$value2}% de acrescimo é de {$result}") ;

    exit ;
}

else if ($operator == 'mmc')
{
    echo ('Não tem') ;
    exit ;
}

else if ($operator == 'pond')
{   
    $denominador = ($prova1 + $prova2 + $prova3) ;
    $result = ($nota1 * $prova1 + $nota2 * $prova2 + $nota3 * $prova3) / $denominador ;

    echo ("A sua média ponderada é de: {$result} <br>") ;

    //Media dos pesos das provas, 80% para aprovar
    $resultmedia = round((($denominador / 3) * 80) / 100 ,2);

    echo ("Média para passar de ano: {$resultmedia} <br>");

    if ($result >= $resultmedia)
    {
        echo ("APROVADO");
    }
    else
    {
        echo ("REPROVADO");
    }
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








/*
$number = "3";
$i = 0;

echo "TABUADA DO $number <br>";

while ($i < 11)
{
   
    echo " $number x $i = " . $number * $i ." <br>";
    $i++;
}
*/
    