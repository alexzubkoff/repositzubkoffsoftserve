<?php
class ChessBoard{
    private $board_width;
    private $board_heigth;
    private $board_sign;

function __construct($myboard_width,$myboard_heigth,$myboard_sign){  
    if ($myboard_width<0||!is_int($myboard_width)||$myboard_heigth<0||!is_int($myboard_heigth)||empty($myboard_sign)){
        throw new Exception("<h1>Value must be 0 or below or the sign must be not empty</h1>");
        }else {
            $this->board_width=intval($myboard_width);
            $this->board_heigth=intval($myboard_heigth);
            $this->board_sign=$myboard_sign;
        }
     
    }  
    public function getChessBoard()
    {

     $str_result1="";
     $str_result2="";

    for ( $i=0; $i<$this->board_width;$i++)
    {
      $str_result1.=$this->board_sign."\xc2\xa0\xc2\xa0\xc2\xa0\xc2\xa0";
    }
  
    for ( $j=0; $j<$this->board_heigth;$j++)
    {
      if ($j%2!==0){
        $str_result2.="\xc2\xa0\xc2\xa0\xc2\xa0\xc2\xa0".$str_result1."<br/>";
        }else{
        $str_result2.=$str_result1."<br/>";
        }
    
    }
        return $str_result2;

    }
}





