<?php
require __DIR__ . '/../vendor/autoload.php';
use App\Hello;

$wilder = new Hello();
echo $wilder->talk();