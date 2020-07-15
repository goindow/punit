<?php
class NotATestClass {
    function NotATestCase() {}
    
    function testCasePassed() {}

    function testCaseFailed() { throw new Exception("some exception"); }
}