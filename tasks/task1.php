
<?php

class ChessBoard{

private $board_weigth;
private $board_heigth;
private $board_sign;
private $str_result1="";
private $str_result2="";

function __construct($myboard_weigth,$myboard_heigth,$myboard_sign){
     $this->board_weigth=intval($myboard_weigth);
     $this->board_heigth=intval($myboard_heigth);
     $this->board_sign=$myboard_sign;
}  
   public function getChessBoard(){

    for ( $i=0; $i<$this->board_weigth;$i++){
    $this->str_result1.=$this->board_sign."&nbsp";
  }
  
  for ( $j=0; $j<$this->board_heigth;$j++){
     if ($j%2!==0){
      $this->str_result2.="&nbsp".$this->str_result1."&nbsp<br>"."<p></p>";
     }else{
      $this->str_result2.=$this->str_result1."&nbsp<br>"."<p></p>";
     }
    
  }
      return $this->str_result2;
  }
}

?>



