<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    .row.content {height: 550px}
    
    .sidenav {
      background-color: #ffffff;
      height: 100%;
    }
        
    /* On small screens, set height to 'auto' for the grid */
    @media screen and (max-width: 767px) {
      .row.content {height: auto;}
    }
  </style>
</head>
<body>

<h1 style="color:blue;">5.Fibonache numbers</h1>

<h1></h1>
<?php
echo '<h1 style="color:blue;position:absolute; top:200px;">Result:</h1>';
?>

<?php

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

function checkNum($number1) {
  if($number1<0||!is_numeric($number1)) {
    throw new Exception("<h1>Value must be 0 or below</h1>");
  }
  return true;
}

try {
  checkNum($myrow);
  $result=getRowFibonachi($myrow);
  echo '<h1 style="color:blue;position:absolute; top:120px;">Row length:'.$myrow.'</h1>';
  $result_str= implode(",", $result);
  echo '<h2 style="color:blue;position:absolute; top:250px;">'.$result_str."</h2>";

}catch(Exception $e) {
  echo '<h1>{status: "failed", reason:"'.$e->getMessage().'"}</h1>';
}

?>


</body>
</html>