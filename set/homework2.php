<?php
require_once('homework1.php');

class Dictionary extends Set
{
    
    public function exisitingWords( array $arrs) {
        foreach ($arrs as $arr) {
            if ($this->isExist($arr)) {
                echo "{$arr} is already included in your dictonary"."<br>";
            } else {
                $this->elements[] = $arr;
            }
        }
        echo "Dictionary is renewed."."<br>";
        print_r($this->elements);
        echo "<br>";
    }
}

$dictionary = new Dictionary;

$arr1 = ["Hello", "Hi", "Good Morning", "Good night"];
$dictionary->exisitingWords($arr1);

$arr2 = ["Hello", "Hi", "Good Morning", "Good night", "Name", "Age"];
$dictionary->exisitingWords($arr2);

$arr3 = ["Hello", "Good Morinig", "Good night", "Name", "Age", "How are you", "Fine", "Thank you"];
$dictionary->exisitingWords($arr3);
?>
