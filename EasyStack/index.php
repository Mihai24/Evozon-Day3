<?php

require_once 'Stack.php';
use EasyStack\Stack\Stack;

$stack = new Stack();

$stack->push(2, 5, 6, 7);
$stack->push(4);
$stack->pop();
$stack->pop();
$stack->push(10);
//$stack->pop();

var_dump($stack);

