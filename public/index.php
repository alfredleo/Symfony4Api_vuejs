<?php

require __DIR__ . '/../vendor/autoload.php';

use App\Format\JSON;
use App\Format\XML;
use App\Format\YAML;

print_r("Interfaces\n\n");;

$data = [
    "name" => "John",
    "surname" => "Doe"
];

$json = new JSON($data);
$xml = new XML($data);
$yml = new YAML($data);



echo '<pre>';
echo($json);
echo '<br>';
echo($xml);
echo '<br>';
echo($yml);
