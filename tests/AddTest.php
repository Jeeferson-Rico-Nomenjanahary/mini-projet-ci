<?php

use PHPUnit\Framework\TestCase;
require_once './src/Calculator.php';  // Inclure la classe Calculator

class AddTest extends TestCase {
    public function testAdd() {
        $calculator = new Calculator();  // Créer une instance de Calculator
        $this->assertEquals(5, $calculator->add(2, 3));
        $this->assertEquals(1, $calculator->add(-1, 1));
    }
}