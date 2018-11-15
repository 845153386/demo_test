<?php 
    // function FindNumberWithSum($arr,$sum){
    //     //总数
    //     $count = count($arr);
    //     for($i=0;$i<$count;$i++){
    //         //取差值
    //         $diff = $sum - $arr[$i];
    //         //差值是否在数组  在存入，不在跳过
    //         if (in_array($diff, $arr)) {
    //             //取积
    //             $product = $arr[$i] * $diff;
    //             //存值
    //             $data[$product] = [$arr[$i], $diff,$product];
    //         }
    //     }
    //     //排序最小积
    //     ksort($data);
    //     return array_shift($data);
    // }
    $arr = [1,2,3,4,5,6,90,98,99];
    $sum = 10;
    
    // // $data = FindNumberWithSum($arr, $sum);
    $data = FindNumberWithSum1($arr, $sum);
    echo "<pre>";
    print_r($data);
    
    function FindNumberWithSum1($arr, $sum)
    {
         $count  = count($arr);
         for($i=0;$i<$count;$i++){
            for($j=$i+1;$j<$count-$i;$j++){
                $newsum = $arr[$i] + $arr[$j];
                if($newsum == $sum){
                    $data = [$arr[$i],$arr[$j]];
                    print_r($data);die;
                }
            }
         }
    }