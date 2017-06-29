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

<h1 style="color:blue;">4.Happy tickets</h1>

<?php
echo '<h1 style="color:blue;position:absolute; top:180px;">Result:</h1>';
?>

<?php

/////////////////

$context_min=111111;
$context_max=222222;

/////////////////

class HappyTicket{
      public $context_min;
      public $context_max;

      function __construct($context_min,$context_max){
      $this->context_min=$context_min;
      $this->context_max=$context_max;
      
    }

    public function methodSimple(){
      $count=0;
      for ($i=$this->context_min; $i<=$this->context_max; $i++){
        $num=strval($i);
        $num1=substr($num,0,2);
        $num2=substr($num,3,5);
        $sum1=array_sum(str_split($num1));
        $sum2=array_sum(str_split($num2));
        if ($sum1==$sum2){
            $count++;
        }
      }   
          
          return $count;
    }
    
   public function methodNotSimple(){
      $count=0;
      for ($i=$this->context_min; $i<=$this->context_max; $i++){
        $num=str_split(strval($i));
        $sum1=$num[0]+$num[2]+$num[4];
        $sum2=$num[1]+$num[3]+$num[5];
         if ($sum1==$sum2){
            $count++;
        }
      }
          return $count;
    }

 }

function checkNum($env_a,$env_b) {

  if($env_a<0||!is_numeric($env_a)||$env_b<0||!is_numeric($env_b)||strlen(strval($env_a))>6||strlen(strval($env_b))>6) {
    throw new Exception("<h1>Value must be 0 or below and must has not more 6 digits</h1>");
  }
  return true;
}


try {
  checkNum($context_min,$context_max);

   $happy_tick=new HappyTicket($context_min,$context_max);
     $simple=$happy_tick->methodSimple();
     $notsimple=$happy_tick->methodNotSimple();

    echo '<h1 style="color:blue;position:absolute; top:70px;">Context min: '.$context_min.'</h1>';
    echo '<h1 style="color:blue;position:absolute; top:110px;">Context max: '.$context_max.'</h1>';

      if($simple>$notsimple){
          echo '<h2 style="color:blue;position:absolute; top:250px;">Simple: '.$simple.' tickets</h2>';
          echo '<h2 style="color:blue;position:absolute; top:310px;">Not simple: '.$notsimple.' tickets</h2>';
      }else{
          echo '<h2 style="color:blue;position:absolute; top:250px;">Not simple: '.$notsimple.' tickets</h2>';
          echo '<h2 style="color:blue;position:absolute; top:310px;">Simple: '.$simple.' tickets</h2>';
      }

}catch(Exception $e) {
  echo '<h1>{status: "failed", reason:"'.$e->getMessage().'"}</h1>';
}

?>

</body>
</html>