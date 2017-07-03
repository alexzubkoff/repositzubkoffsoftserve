
<?php

class ChessBoard{

private $board_width;
private $board_heigth;
private $board_sign;

function __construct($myboard_width,$myboard_heigth,$myboard_sign){

     $this->board_width=intval($myboard_width);
     $this->board_heigth=intval($myboard_heigth);
     $this->board_sign=$myboard_sign;
}  
   public function getChessBoard(){

     $str_result1="";
     $str_result2="";

    for ( $i=0; $i<$this->board_width;$i++){

      $str_result1.=$this->board_sign."&nbsp";
    }
  
    for ( $j=0; $j<$this->board_heigth;$j++){
      if ($j%2!==0){
        $str_result2.="&nbsp".$str_result1."<br/>";
     }else{
        $str_result2.=$str_result1."<br/>";
     }
    
     }
        return $str_result2;

     }
}

?>



