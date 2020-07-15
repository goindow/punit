<?php
class TestDemo1 {

    public function NotATestCase() { 
        // no test case
    }
    
    public function testCasePassed() { 
        // passed
    }

    public function testCaseFailed() { 
        // failed
        throw new Exception("some exception"); 
    }
    
}
