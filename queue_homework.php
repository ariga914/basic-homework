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

function secretary(array $priority, array $dependent, int $n) {
    $queue = new Queue;
    for ($i=0; $i<$n; ++$i) {
        $queue->enqueue($priority[$i]);    
    }
    $counter = 0;
    for ($i=0; $i<$n; ++$i) {
        while ($queue->front() != $dependent[$i]) {
            $front = $queue->front();
            if ($front != $dependent[$i]) {
                $arrs = [];
                $queue->dequeue();
                array_push($arrs, $front);
                $queue->enqueue($arrs[0]);                      
            }
            ++$counter;
        }
    
        if ($queue->front() == $dependent[$i]) {
            $queue->dequeue();
            $counter += 2;
        }
    }
    echo $counter;
}

$priority1 = [2, 1, 3];
$dependent1 = [1, 2, 3];
secretary($priority1, $dependent1, 3);
?>
