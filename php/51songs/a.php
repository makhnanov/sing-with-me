<?php

$splited = explode('/', __FILE__);
$textFileName = preg_replace('/\\.(php)$/', '', $splited[count($splited) - 1]) . '.timing';

$timing = [

];

require_once __DIR__ . '/to_css.php';
