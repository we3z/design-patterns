<?php

class CarFactory
{
    public function __construct()
    {

    }

    /*
     * 根据传入的类名获取对应类
     */
    public function getCar($className)
    {
        // 判断是否存在这个类
        switch ($className) {
            case "Bus":
                return new cars\Bus();
            case "Suv":
                return new cars\Suv();
            case "Truck":
                return new cars\Truck();
            default:
                exit( '类 ' . $className . '不存在');
        }
    }
}

$carFactoryObject = new CarFactory();

$truckObject = $carFactoryObject->getCar('Bus');

$truckObject->showName();