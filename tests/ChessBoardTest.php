<?php

require_once 'C:\OpenServer\domains\phptaskssoftserve.com\tasks\task1.php';

use PHPUnit\Framework\TestCase;

class ChessBoardTest extends TestCase {

    public function testgetChessBoard() {
        $my = new ChessBoard(3, 1, '*');
        $this->assertEquals("*\xc2\xa0\xc2\xa0\xc2\xa0\xc2\xa0*\xc2\xa0\xc2\xa0\xc2\xa0\xc2\xa0*\xc2\xa0\xc2\xa0\xc2\xa0\xc2\xa0<br/>", $my->getChessBoard());
    }

}
