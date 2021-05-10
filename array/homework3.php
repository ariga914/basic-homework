<?php
$multiArray =array(
    array(5, 12, 17, 9, 13),
    array(13, 4, 8, 14,1),
    array(9, 5, 3, 17,21)
);

$sum = 0;
$avg = 0;
$min = 100;
$max = 0;

for ($i=0; $i<sizeof($multiArray); ++$i) {
    $subSum = 0;
    $subMin = 100;
    $subMax = 0;

    for ($j=0; $j<sizeof($multiArray[$i]); ++$j) {
        $subSum += $multiArray[$i][$j];

        if ($multiArray[$i][$j] < $subMin){
            $subMin = $multiArray[$i][$j];
        }

        if ($multiArray[$i][$j] > $subMax){
            $subMax = $multiArray[$i][$j];
        }
    } 

    $sum += $subSum;

    if ($subMin < $min) {
        $min = $subMin;
    }

    if ($subMax > $max) {
        $max = $subMax;
    }
}



echo $sum."<br>";

$avg = $sum / (sizeof($multiArray) * sizeof($multiArray[0]));
echo round($avg)."<br>";

echo $min."<br>";

echo $max;

?>
