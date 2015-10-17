<?php

$autoloader = new Autoloader(__DIR__ . '/lib/');
$autoloader->register();

$obj = new Popds\Writer();
//$obj->exec();
