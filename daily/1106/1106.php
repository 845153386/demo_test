<?php 
function ca1Fn($n,$m){
    static $number = 0;
    for($i=$n;$i<=$m;$i++){
        $number += substr_count($i,1);
    }
    return $number;
}
echo ca1Fn(100,1300);