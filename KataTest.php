<?php

require 'kata.php';

class KataTest extends \PHPUnit_Framework_TestCase
{
    public function testBissextile()
    {
        $this->assertTrue(estBissextile(2008));
    }

    public function testNonBissextile()
    {
        $this->markTestSkipped();
        $this->assertFalse(estBissextile(1997));
    }

    public function testNonBissextileSeTerminantPar100()
    {
        $this->markTestSkipped();
        $this->assertFalse(estBissextile(1700));
        $this->assertFalse(estBissextile(1800));
        $this->assertFalse(estBissextile(1900));
        $this->assertFalse(estBissextile(2100));
    }

    public function testEstBissextileSeTerminantPar100()
    {
        $this->markTestSkipped();
        $this->assertTrue(estBissextile(2000));
    }


}
