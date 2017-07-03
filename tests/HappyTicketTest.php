<?php
require_once 'C:\OpenServer\domains\phptaskssoftserve.com\tasks\task4.php';

use PHPUnit\Framework\TestCase;

class HapyTicketTest extends TestCase {
    protected $my_cont1;
    protected $my_cont2;
    protected $my_cont3;
    protected $my_cont4;

    protected function setUp()
    {
        $this->my_cont1 = new ContextTicket(112,222);
        $this->my_cont2 = new ContextTicket(112,222000);
        $this->my_cont3 = new ContextTicket(112000,222000);
    }

    public function testmethodSimple()
    {   
        $my1 = new HappyTicket($this->my_cont1);
        $this->assertEquals(2968, $my1->methodSimple()); 

       
        $my1 = new HappyTicket($this->my_cont2);
        $this->assertEquals(2968, $my1->methodSimple()); 

        $my_cont = new ContextTicket(112000,222000);
        $my1 = new HappyTicket($this->my_cont3);
        $this->assertEquals(2968, $my1->methodSimple()); 
    }

    public function testmethodNotSimple()
    {   
        $my1 = new HappyTicket($this->my_cont1);
        $this->assertEquals(5913, $my1->methodNotSimple());

        $my1 = new HappyTicket($this->my_cont2);
        $this->assertEquals(5913, $my1->methodNotSimple()); 

        $my1 = new HappyTicket($this->my_cont3);
        $this->assertEquals(5913, $my1->methodNotSimple());
    }

    protected function tearDown()
    {
        $this->my_cont1 = null;
        $this->my_cont2 = null;
        $this->my_cont3 = null;
    }


}