<?php
// homewwork1
$i = 1;
$sum = 0;
while ($i <= 50) {
    if ($i%2 !== 0) {
        $sum += $i;
    }
    ++$i;
};
echo $sum;

?>
