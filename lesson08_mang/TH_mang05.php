<?php
function reverseArray($arr){
    $result = [];
    for($i = count($arr) - 1; $i >= 0; $i--){
        $result[] = $arr[$i];
    }
    return $result;
} 
$numbers = [1,2,3,4,5];
$reverse = reverseArray($numbers);
echo "The reversed array is:" . implode(",",$reverse);
?>