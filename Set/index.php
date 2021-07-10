<?php

require_once __DIR__ . '\EasySet.php';
//require_once __DIR__ . '\AdvancedSet.php';

use Set\EasySet;
//use Set\AdvancedSet;

$set = new EasySet();
$setTwo = new EasySet();

$set->addValueToSet(2);
$set->addValueToSet(3);
$set->addValueToSet(4);
$setTwo->addValueToSet(2);
$setTwo->addValueToSet(1);
$setTwo->addValueToSet(5);
$setTwo->addValueToSet(4);

var_dump($set->setIntersection($setTwo));
var_dump($set->setReUnion($setTwo));

