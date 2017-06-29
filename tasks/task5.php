
<?php

echo '<h1 style="color:blue;position:absolute;margin-left:1350px; top:590px;">Result:</h1>';
echo '<h1 style="color:blue;margin-left:1350px;top:500px;">5.Fibonache numbers</h1>';
function getRowFibonachi($value){

$num1=1;
$num2=0;
$num3=0;
$arr=array();

for ($i=0; $i<$value; $i++){
  $arr[$i]=$num1;
  $num3=$num1+$num2;
  $num2=$num1;
  $num1=$num3;
  }

return $arr;
}
///////////////////

$myrow=10;

//////////////////

function checkNum5($number1) {
  if($number1<0||!is_numeric($number1)) {
    throw new Exception("<h1>Value must be 0 or below</h1>");
  }
  return true;
}

try {
  checkNum5($myrow);
  $result=getRowFibonachi($myrow);
  echo '<h1 style="color:blue;position:absolute;margin-left:1350px; top:480px;">Row length:'.$myrow.'</h1>';
  $result_str= implode(",", $result);
  echo '<h2 style="color:blue;position:absolute;margin-left:1350px; top:630px;">'.$result_str."</h2>";

}catch(Exception $e) {
  echo '<h1>{status: "failed", reason:"'.$e->getMessage().'"}</h1>';
}

?>


