<?php
require_once 'C:\OpenServer\domains\phptaskssoftserve.com\tasks\task3.php';

use PHPUnit\Framework\TestCase;

class TriangleTestNegative extends TestCase {
    /**
     * @dataProvider additionProvider
     */
    public function testgetArea($name,$a,$b,$c,$expected)
    {
        $my1 = new Triangle($name,$a,$b,$c);
        $this->assertEquals($expected, $my1->getArea()); 
        
    }
    public function additionProvider()
    {
        return [
            ["ABC",4,5,6,9],
            ["BCD",5,5,5,10.8],
            ["CBD",4,4,4,6.3]
        ];
    }
 }