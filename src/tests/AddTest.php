<?php

use PHPUnit\Framework\TestCase;

class AddTest extends TestCase {
    public function testAdd() {
        $this->assertEquals(5, add(2, 3));
        $this->assertEquals(0, add(-1, 1));
    }
}
