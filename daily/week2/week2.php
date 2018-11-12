<?php 
// function one($arr){
//     foreach($arr as $val){
//         $one = array_diff($arr,[$val]);
//         foreach($one as $val1){
//             $two = array_diff($one,[$val1]);
//             foreach($two as $val2){
//                 $data[] =  $val.$val1.$val2;
//             }
//         }
//     }
//     $info = [
//         'count'=>count($data),
//         'number'=>$data
//     ];
//     return $info;
// }
// echo "<pre>";
// $arr = [1,2,3,4];
// print_r(one($arr));

// function my_dir($dir){
//     static $data;
//     $file = array_diff(scandir($dir),['.','..']);
//     foreach($file as $val){
//         $file_info = pathinfo($val);
//         $path = $dir . '/' . $file_info['filename'];
//         if (!array_key_exists('extension',$file_info)) {
//             my_dir($path);
//         }
//         $data[] = $path;
//     }
//     return $data;
// }
// echo "<pre>";
// print_R(my_dir('D:/phpStudy/WWW/test'));

// function four()
// {
//     $str1 = '/a/b/c/d/test.php';
//     $str2 = '/a/b/d/c/test.php';

//     $start = 0;
//     $end = 2;
//     for ($i = 1; $i < strlen($str1); $i++) {
//         $strpart = substr($str1, $start, $end);
//         if (strpos($str2, $strpart) == true) {
//             $array[] = $strpart;
//             $end++;
//         } else {
//             $start = $i - 1;
//             $end = 2;
//         }
//     }
//     $result = '';
//     $c = count($array);

//     for ($j = 0; $j < $c - 1; $j++) {

//         if (substr($array[$j + 1], 0, -1) != $array[$j]) {
//             $result .= $array[$j] . '<br>';
//             $str_end = $array[$j];

//         }
//     }

//     if ($array[$c - 1] != $str_end) {
//         $result .= $array[$c - 1];
//     }
//     echo $result;
// }
// four();

//当前时间
$newtime = time();
//目标时间
$time = strtotime('20190101');
//时间差
$diftime = $time-$newtime;
$datetime = date('m-d H:i:s',$diftime);
echo $datetime;
echo ("<script type=\"text/javascript\">");
echo ("function fresh_page()");
echo ("{");
echo ("window.location.reload();");
echo ("}");
echo ("setTimeout('fresh_page()',1000);");
echo ("</script>");

