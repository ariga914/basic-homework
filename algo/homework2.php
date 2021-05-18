<?php
require_once('homework1.php');

function findSmallest (array $a, array $b, int $k) {
    if ($k > count($a)*count($b)) {
        echo "{$k} pairs does not exist";
        return;
    }
    
    quicksort($a, 0, sizeof($a)-1);
    quicksort($b, 0, sizeof($b)-1);
    
    $index2 = array_fill(0, count($a), 0);

    while ($k > 0) {
        $minSum = PHP_INT_MAX;
        $minIndex = 0;

        foreach ($a as $i => $value1) {
            if ($index2[$i] < count($b) && ($value1 + $b[$index2[$i]] < $minSum)) {
                $minIndex = $i;
                $minSum = $value1 + $b[$index2[$i]];
            }
        }

        echo "[{$a[$minIndex]}, {$b[$index2[$minIndex]]}]";

        $index2[$minIndex]++;

        $k--;
    }
}   

$array1 = [11, 7, 1];
$array2 = [4, 9, 2];
$k = 3;
findSmallest($array1, $array2, $k);
?>
