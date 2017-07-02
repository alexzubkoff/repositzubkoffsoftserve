<?php
require_once 'C:\OpenServer\domains\phptaskssoftserve.com\tasks\task2.php';

use PHPUnit\Framework\TestCase;

class EnvelopeTest extends TestCase {

    public function testcompareTo()
    {
        $my1 = new Envelope(6.3,4.5);
        $my2 = new Envelope(6.2,4.4);
        $this->assertEquals('2', $my1->compareTo($my2)); 

        $my1 = new Envelope(6.2,4.4);
        $my2 = new Envelope(6.3,4.5);
        $this->assertEquals('1', $my1->compareTo($my2)); 

        $my1 = new Envelope(6.3,4.5);
        $my2 = new Envelope(6.3,4.5);
        $this->assertEquals('0', $my1->compareTo($my2)); 
 }
}