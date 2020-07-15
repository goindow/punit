# punit - 单元测试脚手架
使用 reflection 和 aop 自动解析执行测试用例，无依赖/无断言库/无侵入的三无轻量级单元测试脚手架

## 使用
- /usr/local/bin/php，php cli 命令执行程序
- /usr/local/var/php/punit/Punit.php，自动测试脚手架
- /usr/local/var/php/punit/example/，测试用例类目录，只解析当前目录（目录深度一级、不支持迭代解析）
```shell
/usr/local/bin/php /usr/local/var/php/punit/Punit.php /usr/local/var/php/punit/example/
```

## 规范
- TestXXX.php 被解析为测试用例类
- TestXXX.php 下的 testXXX 方法被解析为测试用例
- TestXXX.php 下的 before/after 方法分别在每个 testXXX 测试用例执行前/后执行
- 只要 testXXX 抛出异常，失败用例 +1，否则，成功用例 +1
```php
class TestDemo1 {
    public function before() {}    // do something before cast invoked

    public function after() {}    // do something after cast invoked

    public function notATestCase() {}    // not a test case
    
    public function testCasePassed() {}    // passed

    public function testCaseFailed() { throw new Exception("some exception"); }    // failed
}
```
```php
// 使用断言库
require_once("../PunitAssert.php");
class TestDemo2 {
    public function before() {}    // do something before cast invoked

    public function after() {}    // do something after cast invoked

    public function notATestCase() {}    // not a test case
    
    public function testCasePassed() { PunitAssert::assertEquals(1, 1); }    // passed

    public function testCaseFailed() { PunitAssert::assertEquals(1, 2); }    // failed
}
```

## 测试报告
![测试报告](https://github.com/goindow/designPattern/blob/master/doc/factoryPattern/UML/abstractFactory.png?raw=true)