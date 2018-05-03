<?php
require_once 'classes/Car.php';

function debug($data){
    echo "<pre>".print_r($data, 1)."</pre>";
}
$Car1 = new Write('Black', 'Volovo', 200, 2018);
$Car2 = new Write('White', 'Chevrolet', 180, 2012);

echo $Car1->getCarInfo();
echo $Car2->getCarInfo();


