<?php
function Add($num1,$num2){
    while($num2!=0){
        $sum = $num1^$num2;
        $num2 = ($num1&$num2)<<1;
        $num1 = $sum;
    }
    return $num1;
}
echo Add(11,2);