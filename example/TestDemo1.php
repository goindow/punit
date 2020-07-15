<?php
class TestDemo1 {
    public function before() {}    // do something before case invoked

    public function after() {}    // do something after case invoked

    public function notATestCase() {}    // not a test case
    
    public function testCasePassed() {}    // passed

    public function testCaseFailed() { throw new Exception("some exception"); }    // failed
}