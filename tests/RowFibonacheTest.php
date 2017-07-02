<?php
require_once 'C:\OpenServer\domains\phptaskssoftserve.com\tasks\task5.php';

use PHPUnit\Framework\TestCase;

class RowFibonacheTest extends TestCase {

    public function testgetRowFibonache()
    {   
       
        $my_cont = new Context(5);
        $my= new RowFibonache($my_cont);
        $this->assertEquals([0,1,1,2,3], $my->getRowFibonache());

        $my_cont = new Context(10);
        $my_cont->setMinMax(0,3);
        $my= new RowFibonache($my_cont);
        $this->assertEquals([0,1,1,2,3], $my->getRowFibonache());

        $my_cont = new Context(10);
        $my_cont->setMinMax(0,25);
        $my= new RowFibonache($my_cont);
        $this->assertEquals([0,1,1,2,3,5,8,13,21], $my->getRowFibonache());

        $my_cont = new Context(10);
        $my_cont->setMinMax(2,25);
        $my= new RowFibonache($my_cont);
        $this->assertEquals([2,3,5,8,13,21], $my->getRowFibonache());


 }
}