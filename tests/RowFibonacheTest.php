<?php

require_once 'C:\OpenServer\domains\phptaskssoftserve.com\tasks\task5.php';

use PHPUnit\Framework\TestCase;

class RowFibonacheTest extends TestCase {
    
    protected $my_cont1;
    protected $my_cont2;
    protected $my_cont3;
    protected $my_cont4;

    protected function setUp()
    {

        $this->my_cont1 = new Context(10);

        $this->my_cont2 = new Context(10);
        $this->my_cont2->setMinMax(0,3);

        $this->my_cont3 = new Context(10);
        $this->my_cont3->setMinMax(5,10);

        $this->my_cont4 = new Context(10);
        $this->my_cont4->setMinMax(2,25);
    }

    public function testgetRowFibonache()
    {   

        $my= new RowFibonache($this->my_cont1);
        $this->assertEquals([0,1,1,2,3,5,8,13,21,34], $my->getRowFibonache());

        $my= new RowFibonache($this->my_cont2);
        $this->assertEquals([0,1,1,2,3], $my->getRowFibonache());

        $my= new RowFibonache($this->my_cont3);
        $this->assertEquals([5,8], $my->getRowFibonache());

        $my= new RowFibonache($this->my_cont4);
        $this->assertEquals([2,3,5,8,13,21], $my->getRowFibonache());
    }

        protected function tearDown()
        {
            $this->my_cont1 = null;
            $this->my_cont2 = null;
            $this->my_cont3 = null;
            $this->my_cont4 = null;
            
        }
}