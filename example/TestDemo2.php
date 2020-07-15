<?php
require_once("../PunitAssert.php");
class TestDemo2 {
    public function before() {}    // do something before cast invoked

    public function after() {}    // do something after cast invoked

    public function notATestCase() {}    // not a test case
    
    public function testCasePassed() { PunitAssert::assertEquals(1, 1); }    // passed

    public function testCaseFailed() { PunitAssert::assertEquals(1, 2); }    // failed
}
