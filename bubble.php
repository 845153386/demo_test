<?php 
class bubble {
    //冒泡排序
    public function bubbleSort($arr){
        $count = count($arr);
        for($i=1;$i<$count;$i++){
            for($j=0;$j<$count-$i;$j++){
                if($arr[$j]>$arr[$j+1]){
                    $value = $arr[$j + 1];
                    $arr[$j + 1] = $arr[$j];
                    $arr[$j] = $value;
                }
            }
        }
        return $arr;
    }
}
// 54321
// 1   45321 43521 43251 43215
// 2   34215 32415 32145
// 3   23145 21345
// 4   12345
$obj = new bubble;
$arr = [9,5,4515,151,335,4,3,2,1];
echo "<pre>";
print_r($obj->bubbleSort($arr));