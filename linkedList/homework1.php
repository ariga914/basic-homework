<?php
require_once('linkedList.php');

$list = new LinkedList(); 
$list->insert(10); 
$list->insert(4); 
$list->insert(1); 
$list->insert(2);
$list->insert(5);
$list->insert(2);
$list->insert(3);

$list->deleteFirst(10);

$list->visit();
echo "<br>";

class LinkedList2 extends LinkedList 
{
    public function deleteAll($data) {
        if ($this->head == null){
            echo "List is empty.";
            return;
        }
        if ($this->head->getData() == $data){
            $this->head = $this->head->getNext();
        } else {
            $current = $this->head;
                while ($current->getNext() != null) {
                    if ($current->getNext()->getData() == $data) {
                        $current->setNext($current->getNext()->getNext());
                    }
                    $current = $current->getNext();                    
                }    
                                                                                            
        }
    }
}

$list2 = new LinkedList2(); 
$list2->insert(10); 
$list2->insert(4); 
$list2->insert(1); 
$list2->insert(2);
$list2->insert(5);
$list2->insert(2);
$list2->insert(3);
$list2->deleteAll(2);
$list2->visit()
?>