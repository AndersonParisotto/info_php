<?php

$dataStr = "32/12/2000";
$data = explode("/", $dataStr);
$dia = $data[0];
$mes = $data[1];
$ano = $data[2];

$bissexto = anoBissexto($ano); 
$mesCheck = 28;

if ($bissexto == true && $mes == 2)
{
    $mesCheck = 29;
    $bissexto = "é bissexto";

}

else if ($bissexto == true)
{
    $bissexto = "é bissexto";
}

else
{
    $bissexto =="não é bissexto";
}

$mesCheck = checkMes($mes, $mesCheck);

$diaCheck = checkDia($dia, $mesCheck, $mes, $ano); 

if ($diaCheck == false)
{
    if ($dia < 1)
    {
        $dia = 1;
    }

    else if ($mes == 12)
    {
        $ano++;
        $bissexto = anoBissexto($ano); 
        $dia = 1;
        $mes = 1;
    }

    else
    {
        $dia = 1;
        $mes++;
    }
}

echo "$dataStr<br/>";
exibir($diaCheck, $dia, $mes, $ano);
exibirB($bissexto);

function anoBissexto($ano)
{
    if (($ano % 4 == 0 && $ano % 100 != 0) || ($ano % 4 == 0 && $ano % 100 == 0 && $ano % 400 == 0))
    {
        return true; 
    }
}

function checkMes($mes, $mesCheck)
{
    if ($mes == 1 || $mes == 3 || $mes == 5 || $mes == 7 || $mes == 8 || $mes == 10 || $mes == 12)
    {
        return 31;
    }

    else if ($mes == 4 || $mes == 6 || $mes == 9 || $mes == 11)
    {
        return 30;
    } 

    else if ($mesCheck == 29)
    {
        return 29;
    }

    else if ($mes == 02)
    {
        return 28;
    }

    else
    {
        return 0;
    }
}

function checkDia($dia, $mesCheck, $mes, $ano)
{
    if ($dia <= $mesCheck && $dia >= 1)
    {
        return true;
    } 

    else
    {
        return false;
    }
}

function exibir($diaCheck, $dia, $mes, $ano)
{
    if ($diaCheck == true)
    {
        echo "Data válida";
    }
    else
    {
        echo "Data inválida, nova data: {$dia}/{$mes}/{$ano}";
    }
}


function exibirB($bissexto)
{
    if ($bissexto == true)
    {
        echo " é bissexto";
    }

    else
    {
        echo " e não é bissexto";
    }
}