<?php
require_once('linkedList.php');

class LinkedList3 extends LinkedList 
{
    //made function without following hints at first
    public function reverse() {
        if ($this->head == null) {
            echo "List is empty";
        }

        $currNode = $this->head; 
        $arr = [];  
        while ($currNode != null) {
            array_push($arr, $currNode->getData());
            $currNode = $currNode->getNext();
        }
        
        $arr2 = [];
        for ($i=sizeof($arr2)-1; $i>=0; $i--) {
            $t =$arr[$i]; 
            $t = $arr[(sizeof($arr)-1-$i)];
            array_push($arr2, $t);
            print $arr2[$i]." ";
        }         
    }

    //made function, following hints 
    public function reverse2() {
        $prevNode = null;
        $curr =$this->head;
        $nextNode = null;

        while ($curr != null) {
            $nextNode = $curr->getNext();
            $curr->setNext($prevNode);
            $prevNode = $curr;
            $curr = $nextNode;
        }
        $this->head = $prevNode;
    }
}


$list = new LinkedList3;
$list->insert(1);
$list->insert(2);
$list->insert(3);
$list->insert(4);
$list->insert(5);

$list->reverse2();

$list->visit();

?>
