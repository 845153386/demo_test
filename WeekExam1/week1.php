<?php
class one{
    //循环
    public function one1(){
        $number = 0;
        for($i=1;$i<=100;$i++){
            $number = $number + $i;
        }
        return $number;
    }
    //内置函数
    public function one2(){
        for ($i = 1; $i <= 100; $i++) {
            $data[] = $i;
        }
        return array_sum($data);
    }
    //递归
    public function one3($n){
        if($n==1){
            return 1;
        }
        $n = $this->one3($n - 1) + $n;
        return $n;
    }
}
$one = new one;
echo $one->one1(); 
echo "<hr>";
echo $one->one2();
echo "<hr>";
echo $one->one3(100);
echo "<hr>";


class two{
    //递归
    public function two1($n){
        if($n==1){
            return 1;
        }
        $n = $this->two1($n-1) * $n;
        return $n;
    }
    //循环
    public function two2($n){
        $number = $n;
        for($i=$n;$i>1;$i--){
            $number = $number * ($i - 1);
        }
        return $number;
    }
}
$two = new two;
echo $two->two1(5);
echo "<hr>";
echo $two->two2(5);
echo "<hr>";


class three{
    public function three1($str){
        $length = strlen($str);
        if($length%2===1){
            return "不是回文字符串";
        }
        $str1 = substr($str,0,$length/2);
        $str2 = strrev(substr($str, $length / 2));
        if($str1!=$str2){
            return "不是回文字符串";
        }
        return "是回文字符串";
    }
}
$three = new three;
echo $three->three1('abba');
echo "<hr>";

//定义Person类
class Person {
    //姓名、年龄
    public $name,$age;
}
//定义Walk接口类
interface Walk{
    //行走方法
    public function run();
}
//定义Student类  继承 person  继承walk
class Student extends Person implements Walk {
    public function run(){
        //重写父类
    }
    //赋值
    public function index($name,$age){
        $this->name = $name;
        $this->age = $age;
    }
}
//实例化8个对象
$obj1 = new Student;
$obj1->index('张三',11);

$obj2 = new Student;
$obj2->index('李四', 12);

$obj3 = new Student;
$obj3->index('王五',13);

$obj4 = new Student;
$obj4->index('赵六',14);

$obj5 = new Student;
$obj5->index('李三', 15);

$obj6 = new Student;
$obj6->index('张四', 19);

$obj7 = new Student;
$obj7->index('王六', 17);

$obj8 = new Student;
$obj8->index('赵5', 16);

//组成数组
$data[$obj1->age] = $obj1->name;
$data[$obj2->age] = $obj2->name;
$data[$obj3->age] = $obj3->name;
$data[$obj4->age] = $obj4->name;
$data[$obj5->age] = $obj5->name;
$data[$obj6->age] = $obj6->name;
$data[$obj7->age] = $obj7->name;
$data[$obj8->age] = $obj8->name;

//输出结果
echo height($data);
echo "<hr>";

//编写函数
function height($arr){
    ksort($arr);
    return array_pop($arr);
}