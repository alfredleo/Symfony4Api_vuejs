<?php
use App\Format\JSON;
use App\Format as F;

require __DIR__ . '/../vendor/autoload.php';
print_r("Namespaces");


$json = new JSON();
$xml = new \App\Format\XML();
$yml = new F\YAML();



echo '<pre>';
var_dump($json);
var_dump($xml);
var_dump($yml);