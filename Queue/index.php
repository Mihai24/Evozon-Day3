<?php

require_once __DIR__ . '/EasyQueue.php';
require_once __DIR__ . '/AdvancedQueue.php';

use Queue\EasyQueue;
use Queue\AdvancedQueue;

$array = new EasyQueue();
//$array = new AdvancedQueue();

$array->queue(4);
$array->queue(2);
$array->queue(3);
$array->dequeue();
$array->dequeue();
$array->queue(6);
$array->queue(8);
$array->dequeue();
$array->queue(9);
$array->queue(10);
$array->dequeue();

var_dump($array);