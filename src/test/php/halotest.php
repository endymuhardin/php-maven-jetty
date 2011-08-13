<?php
require_once 'PHPUnit/Framework.php';
require_once '/halo.php';
class HaloTest extends PHPUnit_Framework_TestCase {
    function testHalo() {
        $this->assertEquals('halo', bilangHalo());
    }
}
?>