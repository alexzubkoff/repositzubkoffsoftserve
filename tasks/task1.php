
<?php

class ChessBoard{

private $board_width;
private $board_heigth;
private $board_sign;
private $str_result1="";
private $str_result2="";

function __construct($myboard_width,$myboard_heigth,$myboard_sign){
     $this->board_width=intval($myboard_width);
     $this->board_heigth=intval($myboard_heigth);
     $this->board_sign=$myboard_sign;
}  
   public function getChessBoard(){

    for ( $i=0; $i<$this->board_width;$i++){
    $this->str_result1.=$this->board_sign."&nbsp";
  }
  
  for ( $j=0; $j<$this->board_heigth;$j++){
     if ($j%2!==0){
      $this->str_result2.="&nbsp".$this->str_result1."<br>";
     }else{
      $this->str_result2.=$this->str_result1."<br>";
     }
    
  }
      return $this->str_result2;
  }
}

?>



