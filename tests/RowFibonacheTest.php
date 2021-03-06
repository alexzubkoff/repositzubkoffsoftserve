<?php
require_once 'C:\OpenServer\domains\phptaskssoftserve.com\tasks\task5.php';
use PHPUnit\Framework\TestCase;

class RowFibonacheTest extends TestCase {
    
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
            [10,[0,1,1,2,3,5,8,13,21,34]],
            [5,[0,1,1,2,3]],
            [3,[0,1,1]]
        ];
    }

        
}