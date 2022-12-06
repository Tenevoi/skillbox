<?php
function calculateOperation(int $a,int $b,string $operation= '+'){
    if ($operation=='+'){
        return$a+$b;
    }
    elseif ($operation=='-'){
        return $a-$b;
    }

    elseif ($operation=='*'){
        return $a*$b;
    }}
  echo  calculateOperation(2,2,'-');