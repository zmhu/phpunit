--TEST--
phpunit ConcreteTest ../_files/ConcreteTest.php
--FILE--
<?php
$_SERVER['argv'][1] = '--no-configuration';
$_SERVER['argv'][2] = 'ConcreteTest';
$_SERVER['argv'][3] = dirname(dirname(__FILE__)) . '/_files/ConcreteTest.php';

require_once dirname(dirname(dirname(__FILE__))) . '/PHPUnit/Autoload.php';
PHPUnit_TextUI_Command::main();
?>
--EXPECTF--
PHPUnit %s by Sebastian Bergmann.

..

Time: %i %s, Memory: %sMb

OK (2 tests, 0 assertions)

