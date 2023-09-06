<?php
$Inicial = "23:00:00";
$Final = "00:30:00";

$arrayTempoFinal = explode(":", $Final);

$horaFinal = $arrayTempoFinal[0];
$minFinal = $arrayTempoFinal[1];
$segFinal = $arrayTempoFinal[2];

$finalEmSeg = $horaFinal * 3600 + $minFinal * 60 + $segFinal;

$arrayTempoInicial = explode(":", $Inicial);

$horaInicial = $arrayTempoInicial[0];
$minInicial = $arrayTempoInicial[1];
$segInicial = $arrayTempoInicial[2];

$inicioEmSeg = $horaInicial * 3600 + $minInicial * 60 + $segInicial;

if ($finalEmSeg > $inicioEmSeg)
{
    $tempo = ($finalEmSeg - $inicioEmSeg) / 60;
    echo "Tempo de Jogo: $tempo";
}

else
{
    $tempo = (($finalEmSeg + 86400) - $inicioEmSeg) / 60;
    echo "Tempo de Jogo: $tempo";
}