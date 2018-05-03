<?php
require_once 'classes/Car.php';

function debug($data){
    echo "<pre>".print_r($data, 1)."</pre>";
}
$Car1 = new Write();
$Car2 = new Write();
debug($Car1);

$Car1->color = "Black";
$Car1->brand = "Volvo";
$Car1->speed = 200;
$Car1->year = 2018;
debug($Car1);

$Car2->color = "White";
$Car2->brand = "Chevrolet";
$Car2->speed = 180;
$Car2->year = 2012;
echo $Car1->getCarInfo();
echo $Car2->getCarInfo();


