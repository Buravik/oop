<?php
/**
 * Created by PhpStorm.
 * User: Botir
 * Date: 26.04.2018
 * Time: 18:39
 */

class Car
{
    public $color;
    public $wheels = 4;
    public $speed = 180;
    public $brand;

    public function __construct($color,$wheels,$speed,$brand)
    {
        $this->color=$color;
        $this->wheels = $wheels;
        $this->speed = $speed;
        $this->brand = $brand;
    }

    public function getCarInfo(){
        return "<h3>О моём авто</h3>
            Марка: {$this->brand}<br>
            Цвет: {$this->color}<br>
            Кол-во колес: {$this->wheels}<br>
            Мак. скорость: {$this->speed}";
    }
}