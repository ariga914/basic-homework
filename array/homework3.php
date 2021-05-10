<?php
$multiArray =array(
    array(5, 12, 17, 9, 13),
    array(13, 4, 8, 14,1),
    array(9, 5, 3, 17,21)
);

$sum = 0;
$avg = 0;
$min = $multiArray[0][0];
$max = $multiArray[0][0];

foreach ($multiArray as $array) {
    foreach ($array as $ele) {
        $sum += $ele;

        if ($min > $ele){
            $min = $ele;
        }

        if ($max < $ele){
            $max = $ele;
        }
    } 
}



echo $sum."<br>";

/*if I use count($multiArray) instead of  
(sizeof($multiArray) * sizeof($multiArray[0])) as below,
count($multiArray) returns the number of key, 
not working like the one in the hint
*/
$avg = $sum / (sizeof($multiArray) * sizeof($multiArray[0]));
echo round($avg)."<br>";

echo $min."<br>";

echo $max;

?>
