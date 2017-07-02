<?php
require_once 'C:\OpenServer\domains\phptaskssoftserve.com\tasks\task4.php';

use PHPUnit\Framework\TestCase;

class HapyTicketTest extends TestCase {

    public function testmethodSimple()
    {   
        $my_cont = new ContextTicket(112,222);
        $my1 = new HappyTicket($my_cont);
        $this->assertEquals(2968, $my1->methodSimple()); 

        $my_cont = new ContextTicket(112,222000);
        $my1 = new HappyTicket($my_cont);
        $this->assertEquals(2968, $my1->methodSimple()); 

        $my_cont = new ContextTicket(112000,222000);
        $my1 = new HappyTicket($my_cont);
        $this->assertEquals(2968, $my1->methodSimple()); 
    }

    public function testmethodNotSimple()
    {   
        $my_cont = new ContextTicket(112,222);
        $my1 = new HappyTicket($my_cont);
        $this->assertEquals(5913, $my1->methodNotSimple());

        $my_cont = new ContextTicket(112,222000);
        $my1 = new HappyTicket($my_cont);
        $this->assertEquals(5913, $my1->methodNotSimple()); 

        $my_cont = new ContextTicket(112000,222000);
        $my1 = new HappyTicket($my_cont);
        $this->assertEquals(5913, $my1->methodNotSimple());
        
    }
}