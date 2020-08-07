<?php

class single
{

    // 私有化静态变量 $instance 保存对象, 私有化避免外部调用，静态变量提供给静态方法使用
    private static $instance = null;

    // 私有化构造函数避免直接new生成对象
    private function __construct()
    {

    }

    // 私有化克隆方法，避免复制对象
    private function __clone()
    {

    }

    // 公开的静态方法获取类的对象
    public static function getInstance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function test()
    {
        echo "single";
    }
}

// 通过公有方法获取实例化对象
$singleObject = Single::getInstance();

$singleObject->test();