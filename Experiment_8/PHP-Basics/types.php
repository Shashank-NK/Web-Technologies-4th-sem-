<?php
$var = 10;

echo "<pre>";
var_dump($var);
echo "Type: " . gettype($var) . "\n";

$var = 10.5;
var_dump($var);
echo "Type: " . gettype($var) . "\n";

$var = "Hello";
var_dump($var);
echo "Type: " . gettype($var) . "\n";

$var = true;
var_dump($var);
echo "Type: " . gettype($var) . "\n";

$var = [1, 2, 3];
var_dump($var);
echo "Type: " . gettype($var) . "\n";
echo "</pre>";
?>