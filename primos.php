<?php
$number = 13;
$quant = 0; 

 for($n = 1; $n < $number;$n++)
 {
    $resto = $number % 2; 
    
    if($resto == 0 )
    {
        break;
    }

    $resto = $number % $n; 

    if($resto != 0 )
    {
        $quant++;
    }
 }

 if($quant > 0 )
 {
    echo " $number é primo";
 }

 else
 {
    echo " $number não é primo";
 }