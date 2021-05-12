<?php

class Stack {
    private $elements;

    public function __construct()
    {
        $this->elements = array(); 
    }

    public function push($ele)
    {
        $this->elements[] = $ele;
    }
    
    public function pop()
    {
        if (!$this->isEmpty()) { 
            array_pop($this->elements); 
        }
    }

    public function top()
    {
        if (!$this->isEmpty()) {
            return $this->elements[sizeof($this->elements) -1];
        }

        return null;
    }

    public function isEmpty()
    {
        return empty($this->elements);
    }

    public function count(){
        echo sizeof($this->elements);
    }
}



function coupleBreaking(array $arrs) {
    $stack = new Stack;
    $stack->push($arrs[0]);
    for ($i=1; $i<sizeof($arrs); ++$i) {
        if ($stack->isEmpty()) {
            $stack->push($arrs[$i]);
            continue;
        }        
        $top = $stack->top();
        if ($top == $arrs[$i]) {
            $stack->pop();
        }else {
            $stack->push($arrs[$i]);        
        }
    }
    $stack->count();
}
//tests
$arr1 = ["ab","aa","aa","bcd","ab" ];
coupleBreaking($arr1);    
echo "<br>";
$arr2 = ["hello", "world", "world", "hello"];
coupleBreaking($arr2);    
?>
