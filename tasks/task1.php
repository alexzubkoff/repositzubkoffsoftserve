
<?php

echo '<h1 style="color:blue;margin-left:5px;">1.Chess board</h1>';
echo '<h1 style="color:blue;position:absolute;margin-left:10px; top:320px;">Result:</h1>';

function ChessBoard($myboard_weight,$myboard_height,$myboard_sign){

$board_weight=intval($myboard_weight);
$board_height=intval($myboard_height);;
$board_sign=$myboard_sign;
$str_result1="";
  
  for ( $i=0; $i<$board_weight;$i++){
    $str_result1.=$board_sign."&nbsp";
  }
  
  for ( $j=0; $j<$board_height;$j++){
     if ($j%2!==0){
      $str_result2.="&nbsp".$str_result1."&nbsp<br>"."<p></p>";
     }else{
      $str_result2.=$str_result1."&nbsp<br>"."<p></p>";
     }
    
  }
  echo '<h1 style="color:blue;position:absolute; margin-left:10px;top:120px;">Width:'.$board_weight.';</h1>';
  echo '<h1 style="color:blue;position:absolute; margin-left:10px;top:180px;">Heigth:'.$board_height.';</h1>';
  echo '<h1 style="color:blue;position:absolute; margin-left:10px;top:240px;">Sign:'.$board_sign.';</h1>';
  echo '<h1 style="color:blue;position:absolute; margin-left:10px;top:400px;">'.$str_result2."</h1>";

}

//////////////////

$wid= 6;
$heig=4;
$sig="*";

///////////////////

function checkNum($number1,$number2,$sign) {
  if($number1<0||!is_int($number1)||$number2<0||!is_int($number2)) {
    throw new Exception("<h1>Value must be 0 or below</h1>");
  }
  return true;
}

try {
  checkNum($wid,$heig,$sig);
  ChessBoard($wid,$heig,$sig);
}catch(Exception $e) {
  echo '<h1>{status: "failed", reason:"'.$e->getMessage().'"}</h1>';
}

?>



