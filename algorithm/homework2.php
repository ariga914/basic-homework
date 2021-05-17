<?php
require_once('homework1.php');

function tripleSort (array $a, array $b, int $k) {
    $c = array();
    for ($i=0; $i<sizeof($a); $i++) {
        for ($j=0; $j<sizeof($b); $j++) {
            array_push($c, [$a[$i],$b[$j]]);
        }
    }
    
    quicksort($c, 0, sizeof($c)-1);
    
    for($i=0; $i<$k; $i++) {
        print_r($c[$i]);
    }
}   

$array1 = [11, 7, 1];
$array2 = [4, 6, 2];
$k = 3;
tripleSort($array1, $array2, $k);
?>
