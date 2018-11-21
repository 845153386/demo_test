<?php 
    //递归
    // function recursion($arr,$num){
    //     $tmp = count($arr) / 2;
    //     echo $tmp;
    //     if($arr[$tmp] == $num){
    //         return $tmp;
    //     } else if($num  < $arr[$tmp]){
    //         $arr = array_splice($arr,0,$tmp);
    //         // echo $tmp;
    //         // print_r($arr);die;
    //         recursion($arr,$num);
    //     }else{
    //         $arr = array_splice($arr, $tmp);
    //         // print_R($arr);die;
    //         // echo $tmp;
    //         recursion($arr, $num);
    //     }
    // }
    $arr = [1,2,3,4,5,6,7,8,9,10];
    echo (bin_recur_search($arr,3));
    echo (bin_search($arr,3));
function bin_recur_search($arr, $val)
{
    global $time;
    if (count($arr) >= 1) {
        $mid = intval(count($arr) / 2);
        $time++;
        if ($arr[$mid] == $val) {
            return '值为:' . $arr[$mid] . '<br>查找次数：' . $time . '<br>';
        } elseif ($arr[$mid] > $val) {
            $arr = array_splice($arr, 0, $mid);
            return bin_recur_search($arr, $val);
        } else {
            $arr = array_slice($arr, $mid + 1);
            return bin_recur_search($arr, $val);
        }
    }
    return '未找到' . $val;
}
function bin_search($arr, $val)
{
    if (count($arr) >= 1) {
        $low = 0;
        $high = count($arr);
        $time = 0;
        while ($low <= $high) {
            $time++;
            $mid = intval(($low + $high) / 2);
            if ($val == $arr[$mid]) {
                return '索引：' . $mid . '<br>值为：' . $arr[$mid] . '<br>查找次数：' . $time;
            } elseif ($val > $arr[$mid]) {
                $low = $mid + 1;
            } else {
                $high = $mid - 1;
            }
        }
    }
    return '未找到' . $val;
}
