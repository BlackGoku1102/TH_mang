<?php
function find_Multiples_Of_Three($arr){
$result = [];
foreach($arr as $val){
    if($val % 3 == 0){
        $result[] = $val;
    }
}
return $result;
}
$number = [3,4,5,6,7,8,9];
$multiples = find_Multiples_Of_Three($number);
echo "The multiples of three are :" . implode(",",$multiples);
?>