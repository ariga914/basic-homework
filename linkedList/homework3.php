<?php
require_once('linkedList.php');

/* I completely obeyed a hint.
before reading hints, nothing occurred to me, Oh my godness.*/
class LinkedList4 extends LinkedList
{
    public function mergeUtil ($firstList, $secondList) {
        if($firstList->head->getNext() == null) {
            $firstList->head->setNext($secondList);
            return $firstList;
        }
        $curr1 = $firstList->head;
        $next1 = $firstList->head->getNext();
        $curr2 = $secondList->head;
        $next2 = $secondList->head->getNext();

        while ($next1 != null && $curr2 != null) {
            if (($curr2->getData()) >= ($curr1->getData()) && ($curr2->getData()) <= ($next1->getData())) {
                $next2 = $curr2->getNext();
                $curr1->setNext($curr2);
                $curr2->setNext($next1);

                $curr1 = $curr2;
                $curr2 = $next2;
            } else {
                if ($next1->getNext() != null) {
                    $next1 = $next1->getNext();
                    $curr1 = $curr1->getNext();
                } else {
                    $next1->setNext($curr2);
                    return $firstList;
                }
            }
        }
        return $firstList;
    }

    public  function merge($firstList, $secondList) {
        if ($firstList->head == null) {
            return $secondList;
        }
        if ($secondList->head == null) {
            return $firstList;
        }
        if ($firstList->head->getData() < $secondList->head->getData()) {
            return $this->mergeUtil($firstList, $secondList);
        } else {
            return $this->mergeUtil($secondList, $firstList);
        }
        
    }
} 

$list = new LinkedList4;
$list->insert(5);
$list->insert(7);
$list->insert(9);

$list1 = new LinkedList4;
$list1->insert(4);
$list1->insert(6);
$list1->insert(8);

$list2 = $list->merge($list, $list1);
$list2->visit();
echo "<br>";

$list3 = new LinkedList4;
$list3->insert(1);
$list3->insert(3);
$list3->insert(7);
$list3->insert(8);

$list4 = new LinkedList4;
$list4->insert(2);
$list4->insert(4);
$list4->insert(5);
$list4->insert(6);
$list4->insert(9);

$list5 = $list->merge($list3, $list4);
$list5->visit();
?>
