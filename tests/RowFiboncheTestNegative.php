<?php

require_once 'C:\OpenServer\domains\phptaskssoftserve.com\tasks\task5.php';

use PHPUnit\Framework\TestCase;

class RowFibonacheTestNegative extends TestCase {
    
    
    /**
     * @dataProvider additionProvider
     */

    public function testgetRowFibonache($a,$expected)
    {   
        $my_cont = new Context($a);
        $my= new RowFibonache($my_cont);
        $this->assertEquals($expected, $my->getRowFibonache());

    }
    public function additionProvider()
    {
        return [
            [9,[0,1,1,2,3,5,8,13,21,34]],
            [4,[0,1,1,2,3]],
            [2,[0,1,1]]
        ];
    }

        
}