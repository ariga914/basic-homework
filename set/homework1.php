<?php
class Set 
{
    protected $elements;

    public function __construct()
    {
        $this->elements = array();
    }

    public function isExist($ele) {
        return in_array($ele, $this->elements);
    }

    public function add($ele) {
        if (!$this->isExist($ele)) {
            $this->elements[] = $ele;
        }
    }

    public function get() {
        return $this->elements;

    }
}

$set = new Set;
$set->add(1);
$set->add(2);
$set->add(3);
$set->add(4);
$set->add(5);
$set->add(2);
$set->add(-1);
$set->add(5);
$set->add(2);
$set->add(7);
$set->add(11);
$set->add(11);
$set->add(-5);
print_r($set->get());
?>
