<?php
//单例
class Uni {
    //静态 私有的变量 保存类
    static private $instance;
    //防止之创建对象
    private function __construct(){

    }
    //防止克隆对象
    private function __clone(){

    }
    //公有的方法
    public function getName(){
        
    }
}