<?php
// 使用断言库
require_once("../PunitAssert.php");
class TestDemo2 {
    public function notATestCase() {}    // not a test case
    
    public function testCasePassed() { PunitAssert::assertEquals(1, 1); }    // passed

    public function testCaseFailed() { PunitAssert::assertEquals(1, 2); }    // failed
}
