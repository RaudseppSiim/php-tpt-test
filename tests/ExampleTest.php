<?php

use PHPUnit\Framework\TestCase;

final class ExampleTest extends TestCase
{
     /**
     * @group example
     */
    public function testSomething(): void {
        $this->assertEquals("a", "a");
    }
    /**
     * @group math
     */
    public function testSum(): void {
        $s = new Math();
        $this->assertEquals($s->sum(2, 4), 6);
    }
}