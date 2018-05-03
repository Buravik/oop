<?php
require_once 'classes/Write.php';

function debug($data){
    echo "<pre>".print_r($data, 1)."</pre>";
}
$Write1 = new Write('test.txt');
$Write1->writeFile("Hello 1!".PHP_EOL);
$Write1->writeFile("Hello 2!".PHP_EOL);
$Write1->writeFile("Hello 3!".PHP_EOL);
$Write1->writeFile("Hello 4!".PHP_EOL);
$Write1->writeFile("Hello 5!".PHP_EOL);


