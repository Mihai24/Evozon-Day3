<?php

require_once __DIR__ . '\EasySet.php';
require_once __DIR__ . '\AdvancedSet.php';

use Set\EasySet;
use Set\AdvancedSet;

//$set = new EasySet();
$set = new AdvancedSet();

$set->addValueToSet(4);
$set->addValueToSet(2);
$set->addValueToSet(2);

var_dump($set);