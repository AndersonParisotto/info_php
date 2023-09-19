<?php
// digitar as datas
$dataStr = "30/6/1997";

// separa em dia, mes e ano
$data = explode("/", $dataStr);
$dia = $data[0];
$mes = $data[1];
$ano = $data[2];

// verifica se é ano bissexto
$bissexto = anoBissexto($ano); 
$mesCheck = 28;

// se for bissexto e fevereiro adiciona um dia a mais nesse mes
if ($bissexto == true && $mes == 2)
{
    $mesCheck = 29;
}

// verifica o mes
$mesCheck = checkMes($mes, $mesCheck);

// verifica o dia
$diaCheck = checkDia($dia, $mesCheck, $mes, $ano); 

// arruma as datas invalidas
if ($diaCheck == false)
{
    // se for menor que zero apenas adiciona 1 dia
    if ($dia < 1)
    {
        $dia = 1;
    }

    // se for final de ano coloca a data de ano novo
    else 
    {
        $dia = $mesCheck;
    }
}

// exibição final das informações
echo "$dataStr<br/>";
exibir($diaCheck, $dia, $mes, $ano);
exibirB($bissexto);

// funcão para verificar se ano é bissexto
function anoBissexto($ano)
{
    if (($ano % 4 == 0 && $ano % 100 != 0) || ($ano % 4 == 0 && $ano % 100 == 0 && $ano % 400 == 0))
    {
        return true; 
    }
}

// função para verificar se o mes é valido e retorna o valor de dia maximo
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

// função verifica se o dia é valido usando o valor maximo do dia
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

// função para exibir o resultado
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

// função para exibir se é ano bissexto
function exibirB($bissexto)
{
    if ($bissexto == true)
    {
        echo " e é bissexto";
    }

    else
    {
        echo " e não é bissexto";
    }
}