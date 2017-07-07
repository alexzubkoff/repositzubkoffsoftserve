<?php
class ChessBoard extends Task{
    private $board_width;
    private $board_heigth;
    private $board_sign;

function __construct($myboard_width,$myboard_heigth,$myboard_sign)
    {  
      $this->board_width = intval($myboard_width);
      $this->board_heigth = intval($myboard_heigth);
      $this->board_sign = $myboard_sign;
    }  

    protected function validate()
    {
       if ($this->board_width<0||!is_int($this->board_width)||$this->board_heigth<0||!is_int($this->board_heigth)||empty($this->board_sign)){
            throw new Exception("<h1>Value must be 0 or below or the sign must be not empty</h1>");
        }else {
            $this->is_valid=true;
        }
    }

    protected function run()
    {

     $str_result1 = "";

    for ( $i = 0; $i<$this->board_width; $i++){
      $str_result1.=$this->board_sign."\xc2\xa0\xc2\xa0\xc2\xa0\xc2\xa0";
    }
  
    for ( $j=0; $j<$this->board_heigth;$j++){
      if ($j%2!==0){
        $this->str_result.="\xc2\xa0\xc2\xa0\xc2\xa0\xc2\xa0".$str_result1."<br/>";
        }else{
        $this->str_result.=$str_result1."<br/>";
        }
    }
        
    }

}





