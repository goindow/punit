<?php
class TestDemo1 {
    public function notATestCase() {}    // not a test case
    
    public function testCasePassed() {}    // passed

    public function testCaseFailed() { throw new Exception("some exception"); }    // failed
}