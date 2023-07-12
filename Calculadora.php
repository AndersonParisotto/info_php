<?php
$value = '';
$operator = '';
$value2 = '';
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

else {
    $result = $value - $value2 ;
}

echo ("Resultado de {$value} {$operator} {$value2} = {$result}");
?>
