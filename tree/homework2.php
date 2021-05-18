<?php
require_once ('tree_class.php');

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
            array_pop($this->elements);
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

function inserting (object $bt, object $insert) {
    $queue1 = new Queue;
    if ($bt->getRoot() != null) {
        $queue1->enqueue($bt->getRoot());
        while (!$queue1->isEmpty()) {
            $currNode = $queue1->front();
            
            if($currNode->getLeft() === null) {
                $currNode->setLeft($insert);
            } else {
                $queue1->enqueue($currNode->getLeft());
            }

            if($currNode->getRight() === null) {
                $currNode->setRight($insert);
            } else {
                $queue1->enqueue($currNode->getRight());
            }
            $queue1->dequeue();
        }
    } else {
        $bt->setRoot($insert);
    }
}

$left1 = new Node(7);
$left2 = new Node(15);
$left3 = new Node(8);

$parent1 = new Node(11, $left1);
$parent2 = new Node(9, $left2, $left3);

$root = new Node(10, $parent1, $parent2);

$bts = new BinaryTree($root);

$insertion1 = new Node(12);

inserting($bts, $insertion1);
echo $bts->getRoot()->getLeft()->getRight()->getData();
?>
