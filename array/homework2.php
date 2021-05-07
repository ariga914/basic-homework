<?php
$a = array(1, 2, 3, 4, 5);
$b = array(4, 5, 3, 2, 10);
$c = array();

for ($i=0; $i<sizeof($a); ++$i) {
    $j = $a[$i]+$b[$i];
    array_push($c, $j); 
}
print_r($c);

?>
