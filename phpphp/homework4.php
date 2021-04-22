<?php
function checkPrimeNumber2 ($n) {    
  for ($i = 0; $i <= $n; ++$i) {
    $a = checkPrimeNumber($i);
    if ($a == 1) {
      echo $i;
      echo "<br>";  
    }    
  }  
}

?>