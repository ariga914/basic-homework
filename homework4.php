<?php
//homework4
function checkPrimeNumber2($n) {
    if($n == 1){
      echo "1 isn't Prime Number";
    }else{
      for($k =2;$k<=$n;++$k){
      $i=2;
      while($i<=$k){
        if($k % $i == 0 && $k != $i){
          
          break;
        }else if($k % $i != 0){
          ++$i;
        }else{
            echo $k;
            echo "<br>";
            ++$i;
          }
        }
      }
      }    
    }
?>