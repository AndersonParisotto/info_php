<?php
  $number = 3;
  $quant = 0;
  $divisor = 2;
  
 
    while($divisor<$number)
    {
        $divisor++;
  
        if($number % $divisor == 0)
        {
            $quant++;
        }
    
     }
     
  if($quant>1)
  {
      
    echo "Não é primo";  
  } 
  
  else 
  {
  echo "É primo";
  }
