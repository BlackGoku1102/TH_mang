<?php
function countOccurrences($arr,$target){
    $count = 0;
    foreach($arr as $val){
        if($val == $target){
            $count++;
        }
    }
    return $count;
}
$number = [1,2,5,4,3,2,1,5,2];
$count = countOccurrences($number,2);
echo "The number 2 appears"  . $count .  "times in the array.";
?>