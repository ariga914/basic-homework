<?php
//homework3
function checkPrimeNumber($n) {
    if($n == 1){
      echo"1 isn't Prime Number";
    }else{
      $i=2;
      while($i<=$n){
        if($n % $i == 0 && $n != $i){
          echo "Not Prime Number";
          break;
        }else if($n % $i != 0){
          ++$i;
        }else{
            echo $n." is Prim Number";
            ++$i;
          }
        }
      }    
    }
?>