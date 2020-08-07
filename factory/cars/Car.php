<?php
namespace cars;

abstract class Car
{
    public function showName()
    {
        echo __CLASS__;
    }
}
