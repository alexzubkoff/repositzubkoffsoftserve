<?php
require_once 'C:\OpenServer\domains\phptaskssoftserve.com\tasks\task2.php';

use PHPUnit\Framework\TestCase;

class EnvelopeTestNegative extends TestCase {
     /**
     * @dataProvider additionProvider
     */
    public function testcompareTo($a,$b,$c,$d, $expected)
    {   
        $my1 = new Envelope($a,$b);
        $my2 = new Envelope($c,$d);
        $this->assertEquals($expected,$my1->compareTo($my2));
    }

    public function additionProvider()
    {
        return [
            [6.3,4.5,6.2,4.4,'1'],
            [6.2,4.4,6.3,4.5,'2'],
            [6.3,4.5,6.3,4.5,'1']
        ];
    }

    }