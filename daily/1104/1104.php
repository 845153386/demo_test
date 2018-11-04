<?php 
class test {
    //ip转数字
    public function one(){
        $ip = "192.168.1.1";
        $result = ip2long($ip);
        echo $result;
    }

    //猴子递归
    public function recursion($n){
        if($n==10){
            return 1;
        }
        return ($this->recursion($n + 1) + 1)*2;
    }

    public function three($num){
        $length = 0;
        $n = 10;
        do {
            $result = $num / $n;
            $n = $n * 10;
            $length++;
        } while ($result >= 1);
        echo $length;
    }
}
$obj = new test;
$obj->one();
echo "<hr>";
echo ($obj->recursion(1));
echo "<hr>";
echo ($obj->three(1));
echo "<hr>";


//engine接口
interface engine
{
    public function drive();
}

//car类
class car {
    //汽车名称 车重
    public $name,$weight;
}

//jeep类
class jeep extends car implements engine{
    //接口重写
    public function drive(){}
}
//实例化3个类并赋值
$obj1 = new jeep;
$obj1->name = '宝马';
$obj1->weight = 123;

$obj2 = new jeep;
$obj2->name = '奔驰';
$obj2->weight = 456;

$obj3 = new jeep;
$obj3->name = '路虎';
$obj3->weight = 789;

//组成数组
$data[$obj1->weight] = $obj1->name;
$data[$obj2->weight] = $obj2->name;
$data[$obj3->weight] = $obj3->name;

//输出结果
echo four($data);

//定义函数
function four($arr){
    krsort($arr);
    foreach($arr as $val){
        return $val;
        break;
    }
}