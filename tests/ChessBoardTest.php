<?php
require_once 'C:\OpenServer\domains\phptaskssoftserve.com\tasks\task1.php';

use PHPUnit\Framework\TestCase;

class ChessBoardTest extends TestCase {

    public function testgetChessBoard()
    {
        $my = new ChessBoard(6,1,'*');
        $this->assertEquals('*&nbsp*&nbsp*&nbsp*&nbsp*&nbsp*&nbsp<br>', $my->getChessBoard()); 
 }
}