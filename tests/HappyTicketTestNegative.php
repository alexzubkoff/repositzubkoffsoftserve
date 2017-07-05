<?php
require_once 'C:\OpenServer\domains\phptaskssoftserve.com\tasks\task4.php';

use PHPUnit\Framework\TestCase;

class HapyTicketTestNegative extends TestCase {

    /**
     * @dataProvider additionProvider
     */
    
    public function testmethodSimple($a,$b,$expected)
    {   
        $my_cont= new ContextTicket($a,$b);
        $my1 = new HappyTicket($my_cont);    
        $this->assertEquals($expected,$my1->methodSimple()); 

    }

    public function additionProvider()
    {
        return [
            [112,222,5913],
            [11200,222000,5913],
            [112000,222000,5913]
        ];
    }

    /**
     * @dataProvider additionProvider2
     */
    public function testmethodNotSimple($a,$b,$expected)
    {   
        $my_cont= new ContextTicket($a,$b);
        $my1 = new HappyTicket($my_cont);    
        $this->assertEquals($expected,$my1->methodNotSimple()); 

    }

    public function additionProvider2()
    {
        return [
            [112,222,2968],
            [11200,222000,2968],
            [112000,222000,2968]
        ];
    }
}