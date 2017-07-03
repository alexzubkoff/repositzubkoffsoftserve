<?php
require_once 'C:\OpenServer\domains\phptaskssoftserve.com\tasks\task3.php';

use PHPUnit\Framework\TestCase;

class TriangleTest extends TestCase {

    public function testgetArea()
    {
        $my1 = new Triangle("ABC",4,5,6);
        $this->assertEquals(9.92, $my1->getArea()); 
        
        $my1 = new Triangle("BCD",5,5,5);
        $this->assertEquals(10.83, $my1->getArea()); 

        $my1 = new Triangle("CBD",4,4,4);
        $this->assertEquals(6.93, $my1->getArea()); 
        
    }
 }