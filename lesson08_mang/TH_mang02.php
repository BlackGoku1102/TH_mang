<?php
function findMin($arr){
    $min = $arr[0];
    foreach ($arr as $val){
        if($val < $min){
            $min = $val;
        }
    }
    return $min;
}
$number = [1,2,3,4,5];
$min = findMin($number);
echo "The smallest number is :" . $min;
?>