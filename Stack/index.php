<?php

require_once __DIR__ . '/EasyStack.php';
require_once __DIR__ . '/AdvancedStack.php';

use Stack\AdvancedStack;
use Stack\EasyStack;

//$stack = new EasyStack();
$stack = new AdvancedStack();

$stack->push(2, 5, 6, 7);
$stack->push(4);
$stack->pop();
$stack->pop();
$stack->push(10);
$stack->push(3);
$stack->push(11);
$stack->pop();

var_dump($stack);

