<?php 
function FirstNotRepeatingChar($find){
    $str = 'abcd';
    $val = strpos($str, $find);
    if(!$val){
        $val = -1;
    }
    return $val;
}
echo FirstNotRepeatingChar('B');