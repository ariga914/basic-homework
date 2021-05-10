<?php
$arr = array(5, 12, 17, 9, 3);
$sum = 0;
$avg = 0;
$min = 100;
$max = 0;

for ($i = 0; $i < sizeof($arr); ++$i) {
    $sum += $arr[$i];

    if($arr[$i] < $min) {
        $min = $arr[$i];
    }
    
    if($arr[$i] > $max) {
        $max = $arr[$i];
    }
    
}

echo $sum."<br>";

$avg = $sum / count($arr);
echo $avg."<br>";

echo $min."<br>";

echo $max."<br>";
?>
