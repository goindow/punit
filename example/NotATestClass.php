<?php
class NotATestClass {

    function NotATestCase() { 
        // no test case
    }
    
    function testCasePassed() { 
        // passed
    }

    function testCaseFailed() { 
        // failed
        throw new Exception("some exception"); 
    }

}