<?php
function findMax($arr){
    $max = $arr[0];
    foreach($arr as $val){
        if($val > $max){
            $max = $val;
        }
    }
    return $max;
}
$numbers = [1,2,3,5,4,3];
$max = findMax($numbers);
echo "The largest number is :" . $max;

?>