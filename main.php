
<?php

/////// 1.Chess board////////////////////////////
echo '<h1 style="color:blue;">PHP tasks</h1>';

echo '<h1 style="color:blue;margin-left:5px;">1.Chess board</h1>';

//////////// Initialisation Block///////////

$board_width= 6;
$board_heigth=4;
$board_sign="*";

/////////////////////////////////////////////

try {

  checkNum($board_width,$board_heigth,$board_sign);

  include 'tasks/task1.php';

  $newchessboard=new ChessBoard($board_width,$board_heigth,$board_sign);
   
  $res=$newchessboard->getChessBoard();

  echo '<h1 style="color:blue;position:absolute; margin-left:10px;top:400px;">'.$res.'</h1>';
}
catch(Exception $e) {
  echo '<h1>{status: "failed", reason:"'.$e->getMessage().'"}</h1>';
}


function checkNum($number1,$number2,$sign) {
  if($number1<0||!is_int($number1)||$number2<0||!is_int($number2)||empty($sign)) {
    throw new Exception("<h1>Value must be 0 or below or sign must be not empty</h1>");
  }
  return true;
}

echo '<h2 style="color:blue;position:absolute; margin-left:10px;top:120px;">Width:'.$board_width.';</h2>';
echo '<h2 style="color:blue;position:absolute; margin-left:10px;top:180px;">Heigth:'.$board_heigth.';</h2>';
echo '<h2 style="color:blue;position:absolute; margin-left:10px;top:240px;">Sign:'.$board_sign.';</h2>';
echo '<h1 style="color:blue;position:absolute;margin-left:10px; top:320px;">Result:</h1>';

//////////////////Chess board////////////////////////


////////////////2.Enelyse envelopes/////////////////

echo '<h1 style="color:blue;margin-left:230px;">2.Analyse envelopes</h1>';


////////////////// Intialisation Block///////

$envelope_a= 5.7;
$envelope_b= 4.7;
$envelope_c= 5.6;
$envelope_d= 4.6;

///////////////////////////////////////////
try {

  checkNum2($envelope_a,$envelope_b,$envelope_c,$envelope_d);
  include "tasks/task2.php";

  $envelope1= new Envelope($envelope_a,$envelope_b);
  $envelope2= new Envelope($envelope_c,$envelope_d);

  $result = $envelope1->compareTo($envelope2);

  echo '<h1 style="color:blue;position:absolute;margin-left:250px; top:450px;">'.$result.'</h1>';

}catch(Exception $e) {
  echo '<h1>{status: "failed", reason:"'.$e->getMessage().'"}</h1>';
}

echo '<h3 style="color:blue;position:absolute; margin-left:230px;top:170px;">Envelope1 side a:'.$envelope_a.';</h3>';
echo '<h3 style="color:blue;position:absolute; margin-left:230px;top:230px;">Envelope1 side b:'.$envelope_b.';</h3>';
echo '<h3 style="color:blue;position:absolute; margin-left:230px;top:300px;">Envelope2 side c:'.$envelope_c.';</h3>';
echo '<h3 style="color:blue;position:absolute; margin-left:230px;top:350px;">Envelope2 side d:'.$envelope_d.';</h3>';

echo '<h1 style="color:blue;position:absolute;margin-left:230px; top:400px;">Result:</h1>';


function checkNum2($env_a,$env_b,$env_c,$env_d) {
  if($env_a<0||!is_numeric($env_a)||$env_b<0||!is_numeric($env_b)||$env_c<0||!is_numeric($env_c)||$env_d<0||!is_numeric($env_d)) {
    throw new Exception("<h1>Value must be 0 or below</h1>");
  }
  return true;
}

//////////////////////Enelyse envelopes//////////////////////////////////////

//////////////// 3.Sort triangles //////////////////////////////////////////

echo '<h1 style="color:blue;margin-left:570px;">3.Sort triangles</h1>';

////////////// Initialisation Block//////////////////////////////////////
$triangle1="ABC";
$triangle1_a=4;
$triangle1_b=5;
$triangle1_c=6;

$triangle2="BCD";
$triangle2_a=5;
$triangle2_b=5;
$triangle2_c=5;

$triangle3="CBD";
$triangle3_a=4;
$triangle3_b=4;
$triangle3_c=4;
////////////////////////////////////////////////////////////////////////

echo '<h3 style="color:blue;position:absolute; margin-left:550px;top:230px;">Triangle 1='.$triangle1.";side a=".$triangle1_a.";side b=".$triangle1_b.";side c=".$triangle1_c.';</3>';
echo '<h3 style="color:blue;position:absolute; margin-left:550px;top:250px;">Triangle 2='.$triangle2.";side a=".$triangle2_a.";side b=".$triangle2_b.";side c=".$triangle2_c.';</h3>';
echo '<h3 style="color:blue;position:absolute; margin-left:550px;top:270px;">Triangle 3='.$triangle3.";side a=".$triangle3_a.";side b=".$triangle3_b.";side c=".$triangle3_c.';</h3>';
try {
  checkNum3($triangle1_a,$triangle1_b,$triangle1_c);
  checkNum3($triangle2_a,$triangle2_b,$triangle2_c);
  checkNum3($triangle3_a,$triangle3_b,$triangle3_c);

  $triangles=array();
  include "tasks/task3.php";
  $triangles[0]= new Triangle($triangle1,$triangle1_a,$triangle1_b,$triangle1_c);
  $triangles[1]= new Triangle($triangle2,$triangle2_a,$triangle2_b,$triangle2_c);
  $triangles[2]= new Triangle($triangle3,$triangle3_a,$triangle3_b,$triangle3_c);
  
  $results_array=createAssociativeArraysTriangles($triangles);

   function cmp($a, $b) {
    if ($a == $b) {
        return 0;
    }
    return ($a < $b) ? 1 : -1;
    }  


  uasort($results_array,'cmp');
  

echo '<h2 style="color:blue;position:absolute;margin-left:550px;margin-top:160px;">Result:</h2>';

foreach($results_array as $triangle => $area) {
    echo '<h2 style="color:blue;position:absolute;margin-left:550px;margin-top:190px;">Triangle=' .$triangle . ",&nbsp&nbsp&nbsp&nbspArea=" . $area."</h2>";
    echo "<br>";
    echo "<p></p>";
    
}

}catch(Exception $e) {
  echo '<h1>{status: "failed", reason:"'.$e->getMessage().'"}</h1>';
}


function createAssociativeArraysTriangles($triangles_array){
      $length=count($triangles_array);
       for ($i=0;$i<$length;$i++){
          $assocarr[$triangles_array[$i]->toString()]=$triangles_array[$i]->getArea();
       }  
       return $assocarr;
}

function checkNum3($env_a,$env_b,$env_c) {
  if($env_a<0||!is_numeric($env_a)||$env_b<0||!is_numeric($env_b)||$env_c<0||!is_numeric($env_c)) {
    throw new Exception("<h1>Value must be 0 or below</h1>");
  }
  return true;
}

////////////////////////////////////////////////////////////////////////////


//////////////////// 4. Happy tickets///////////////////////////////////////
echo '<h1 style="color:blue;margin-left:1000px;">4.Happy tickets</h1>';
echo '<h1 style="color:blue;position:absolute;margin-left:1000px;top:500px;">Result:</h1>';


/////////////////Initialisation Block//////////////////////////////////////

$context_min=112000;
$context_max=222000;

///////////////////////////////////////////////////////////////////////////

try {
   checkNum4($context_min,$context_max);

   include "tasks/task4.php";
   
   $context_tick= new ContextTicket($context_min,$context_max);
   $happy_tick=new HappyTicket($context_tick);
     
    echo '<h2 style="color:blue;position:absolute; margin-left:1000px;top:380px;">Context min: '.$context_min.'</h2>';
    echo '<h2 style="color:blue;position:absolute;margin-left:1000px;top:430px;">Context max: '.$context_max.'</h2>';

    $happy_tick->methodChampion();

}catch(Exception $e) {
  echo '<h1>{status: "failed", reason:"'.$e->getMessage().'"}</h1>';
}


function checkNum4($env_a,$env_b) {

  if($env_a<0||!is_numeric($env_a)||$env_b<0||!is_numeric($env_b)||strlen(strval($env_a))>6||strlen(strval($env_b))>6) {
    throw new Exception("<h1>Value must be 0 or below and must has not more 6 digits</h1>");
  }
  return true;
}

///////////////////////////////////////////////////////////////////////////


////////////////////// 5. Fibonache numbers///////////////////////////////

echo '<h1 style="color:blue;position:absolute;margin-left:1350px; top:610px;">Result:</h1>';
echo '<h1 style="color:blue;margin-left:1350px;top:500px;">5.Fibonache numbers</h1>';

/////////////////// Initialisation block////////////////// 
$cont_min=0;
$cont_max=10;
$myrow=10;

/////////////////////////////////////////////////////////


try {
  checkNum5($myrow,$cont_min,$cont_max);
  include "tasks/task5.php";

  $context=new Context($myrow);
  $context->setMinMax($cont_min,$cont_max);

  $fibrow=new RowFibonache($context);
  $result=$fibrow->getRowFibonache();
  echo '<h3 style="color:blue;position:absolute;margin-left:1350px; top:470px;">Row min:'.$cont_min.';</h3>';
  echo '<h3 style="color:blue;position:absolute;margin-left:1350px; top:510px;">Row max:'.$cont_max.';</h3>';
  echo '<h3 style="color:blue;position:absolute;margin-left:1350px; top:550px;">Row length:'.count($result).';</h3>';
  $result_str= implode(",", $result);
  echo '<h2 style="color:blue;position:absolute;margin-left:1350px; top:650px;">'.$result_str."</h2>";

}catch(Exception $e) {
  echo '<h1>{status: "failed", reason:"'.$e->getMessage().'"}</h1>';
}



function checkNum5($number1,$number2,$number3) {
  if($number1<0||!is_numeric($number1)||$number2<0||!is_numeric($number2)||$number3<0||!is_numeric($number3)) {
    throw new Exception("<h1>Value must be 0 or below</h1>");
  }
  return true;
}

////////////////////////////////////////////////////////////////////////
?>






