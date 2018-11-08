<?php 
function LastRemaining_Solution($n, $m){
    if($n<1 || $m<1){
        return -1;
    }
    $last = 0;
    for($i=2;$i <= $n; $i++){
        $last = ($last + $m) % $i;
    }
    return $last;
}
echo LastRemaining_Solution(4,3);