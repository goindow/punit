<?php
require_once("../PunitAssert.php");
class TestDemo2 {

    public function NotATestCase() { 
        // no test case
    }
    
    public function testCasePassed() { 
        // passed
        PunitAssert::assertEquals(1, 1);
    }

    public function testCaseFailed() { 
        // failed
        PunitAssert::assertEquals(1, 2);
    }
    
}
