<?php
// mini-projet-ci
require_once './src/Calculator.php';  // Inclure la classe Calculator

$calculator = new Calculator();  // Créer une instance de la classe Calculator

$a = 2;
$b = 3;

$result = $calculator->add($a, $b);  // Appeler la méthode add()

echo "Hello, World! The sum of $a and $b is: " . $result;