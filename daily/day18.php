<?php 
function NumberOf1($n){
    $number = decbin($n);
    return substr_count($number,1);
}
echo NumberOf1(10);