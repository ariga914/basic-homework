<?php 
//homework2
function factorialOfNumber($n) {
    $i = 1;
    $product = 1;
    while ($i < $n) {
        $product *= $i;
        ++$i;
    }
    return $product;
}

echo factorialOfNumber(10);

?>