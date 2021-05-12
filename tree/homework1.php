<?php
use Node as GlobalNode;

class Node 
{
    private $data;
    private $left;
    private $right;     

    public function __construct($data, $left = null, $right = null)
    {
        $this->data = $data;
        $this->left = $left;
        $this->right = $right;
    }

    public function getData() {
        return $this->data;
    }

    public function setData($data) {
        $this->data = $data;
    }

    public function getLeft() {
        return $this->left;
    }

     public function setLeft($left)
    {
        $this->left = $left;
    }

    public function getRight() {
        return $this->right;
    }
    
    public function setRight($right) {
        $this->right = $right;
    } 
}

class BT
{
    private $root;

    public function __construct($root = null)
    {
        $this->root = $root;
    }

    

    public function getRoot() {
        
        return $this->root;
    }

    public function setRoot($root) {
        $this->root = $root;
    }
}


function searchMin (object $bt) {
    
    if ($bt->getRoot() == null) {
        return $bt->getRoot()->getData();
    }

    $minv = $bt->getRoot();
    while ($minv->getLeft() != null) {
        $minv = $minv->getLeft();
    }

    echo $minv->getData();
}

function searchMax (object $bt) {

    if ($bt->getRoot()->getRight() == null) {
        return $bt->getRoot()->getData();
    }
    $maxv =$bt->getRoot()->getRight();
    while ($maxv->getRight() != null) {
        $maxv = $maxv->getRight()(); 
    }
    return $maxv->getdata();
}

$leaf1 = new Node (1);
$leaf2 = new Node (6);
$leaf3 = new NOde (17);
$parent1 = new Node (5, $leaf1, $leaf2);
$parent2 = new Node (19,$leaf3);
$root = new Node (10, $parent1, $parent2);
$bts = new BT ($root);

$a = searchMin($bts);
$b = searchMax($bts);

echo $a;
echo "<br>";
echo $b;
?>