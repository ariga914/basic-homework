<?php
$arr = array(5, 12, 17, 9, 3);
$sum = 0;

for ($i = 0; $i < sizeof($arr); ++$i) {
    $sum += $arr[$i];
}

echo $sum."<br>";

$avg = $sum / count($arr);
echo $avg."<br>";

$min = 100;
for ($i = 0; $i < sizeof($arr); ++$i) {
    if($arr[$i] < $min) {
        $min = $arr[$i];
    }
}
echo $min."<br>";

$max = 0;
for ($i = 0; $i < sizeof($arr); ++$i) {
    if($arr[$i] > $max) {
        $max = $arr[$i];
    }
}
echo $max."<br>";


?>
