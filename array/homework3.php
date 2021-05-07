<?php
$multiArray =array(
    array(5, 12, 17, 9, 13),
    array(13, 4, 8, 14,1),
    array(9, 5, 3, 17,21)
);

$sum = 0;
for ($i=0; $i<sizeof($multiArray); ++$i) {
    $subSum = 0;
    for ($j=0; $j<sizeof($multiArray[$i]); ++$j) {
        $subSum += $multiArray[$i][$j];
    } 
    $sum += $subSum;
}
echo $sum."<br>";

$avg = $sum / (sizeof($multiArray) * sizeof($multiArray[0]));
echo round($avg)."<br>";

$min = 100;
$subMin = 100;
for ($i=0; $i<sizeof($multiArray); ++$i) {
    for ($j=0; $j<sizeof($multiArray[$i]); ++$j) {
        if ($multiArray[$i][$j] < $subMin){
            $subMin = $multiArray[$i][$j];
        }
    } 
    if ($subMin < $min) {
        $min = $subMin;
    }
}
echo $min."<br>";

$max = 0;
$subMax = 0;
for ($i=0; $i<sizeof($multiArray); ++$i) {
    for ($j=0; $j<sizeof($multiArray[$i]); ++$j) {
        if ($multiArray[$i][$j] > $subMax){
            $subMax = $multiArray[$i][$j];
        }
    } 
    if ($subMax > $max) {
        $max = $subMax;
    }
}
echo $max;

?>
