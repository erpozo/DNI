<?php

use PHPUnit\Framework\TestCase;
use classes\dni;

final class dniTest extends TestCase{
    public function testcreateDNI(){
        $dni1 = dni::createDNI(26304646,"y");
        $this->assertEquals("26304646Y",$dni1->__toString());
    }
}