<?php

class Queue
{
    private $elements;

    public function __construct()
    {
        $this->elements = array();
    }

    public function enqueue($num) {
        array_unshift($this->elements, $num);
    }

    public function dequeue() {
        if (!$this->isEmpty()) {
            unset($this->elements[sizeof($this->elements) - 1]);
        }
    }

    public function front() {
        if (!$this->isEmpty()) {
            return $this->elements[sizeof($this->elements) - 1];
        }
        return null;
    }

    public function isEmpty() {
        return empty($this->elements);
    }
}

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

;

function inserting (object $bt, object $insert) {
    $queue1 = new Queue;
    if ($bt->getRoot() != null) {
        $queue1->enqueue($bt->getRoot());
    } else {
        $bt->setRoot($insert);
    }
    if($bt->getRoot()->getLeft() != null) {
        $queue1->enqueue($bt->getRoot()->getLeft());
    } else {
        $bt->getRoot()->setLeft($insert);
    }
    if($bt->getRoot()->getRight() != null) {
        $queue1->enqueue($bt->getRoot()->getRight());
    } else {
        $bt->getRoot()->setRight($insert);
    }

    $queue1->dequeue();
    while ($queue1->front()->getLeft() != null || $queue1->front()->getRight() != null) {
        if($queue1->front()->getLeft() != null) {
            $queue1->enqueue($queue1->front()->getLeft());
        } else {
            $queue1->front()->setLeft($insert);
        }
        if($queue1->front()->getRight() != null) {
            $queue1->enqueue($queue1->front()->getRight());
        } else {
            $queue1->front()->setRight($insert);
        }
        $queue1->dequeue();
    }
}

$left1 = new Node(7);
$left2 = new Node(15);
$left3 = new Node(8);

$parent1 = new Node(11, $left1);
$parent2 = new Node(9, $left2, $left3);

$root = new Node(10, $parent1, $parent2);

$bts = new BT($root);

$insertion1 = new Node(12);

inserting($bts, $insertion1);
echo $bts->getRoot()->getLeft()->getRight()->getData();
?>
