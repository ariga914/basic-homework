<?php
//homework3
function checkPrimeNumber ($n) {
  if ($n === 0 || $n === 1)  {
    return false;
  }
  if ($n === 2){
    return true;
  } 
  $m = $n/2;
  for($i = 2; $i <= $m; ++$i) {
      if ($n%$i == 0){
        return false;
        break;  
      }
  }
    return true;
}
?>