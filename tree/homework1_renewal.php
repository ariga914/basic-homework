<?php
require_once('tree_class.php');

$arr = [10, 5, 1, 6, 19, 17];

$tree = new SearchBinaryTree();
for($i=0,$n=count($arr);$i<$n;$i++) {
    $tree->insert($arr[$i]);
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

echo searchMin($tree);
echo searchMax($tree);
?>
