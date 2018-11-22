<?php  
    function CountSteps($x,$y){
        if ($x <= 0 || $y <= 0) return 0;
        if ($x == 1 || $y == 1) return 1;
        return countWays($x - 1, $y) + countWays($x, $y - 1);
    }
    echo CountSteps(1,2);