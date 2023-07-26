<?php
$value = '2';
$operator = '^';
$value2 = '3';
$result = 0;

if ($operator == '/') {
    $result = $value / $value2 ;
}

else if ($operator == '*') {
    $result = $value * $value2 ;
}

else if ($operator == '+') {
    $result = $value + $value2 ;
}

else if ($operator == '^'){
    $result = $value ** $value2 ;
}

else {
    $result = $value - $value2 ;
}

echo ("Resultado de {$value} {$operator} {$value2} = {$result} <br> " );

if ($result % 2 == 0){
    echo ("O número {$result} é Par ") ;
}
else {
    echo ("O número {$result} é Impar ") ;
}
?>
