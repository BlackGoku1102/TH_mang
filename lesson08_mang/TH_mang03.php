<?php
function total($arr){
    $sum = 0;
    foreach($arr as $val){
        $sum = $sum + $val;
    }
    return $sum;
}
$numbers = [1,2,3,4,5];
$sum = total($numbers);
echo "The sum is:" . $sum;
?>