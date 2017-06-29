
<?php
echo '<h1 style="color:blue;margin-left:230px;">2.Analyse envelopes</h1>';
echo '<h1 style="color:blue;position:absolute;margin-left:230px; top:400px;">Result:</h1>';
function EnelyseEnvelopes($myenvelope_a,$myenvelope_b,$myenvelope_c,$myenvelope_d){
$envelope_a=(float)$myenvelope_a;
$envelope_b=(float)$myenvelope_b;
$envelope_c=(float)$myenvelope_c;
$envelope_d=(float)$myenvelope_d;

echo '<h1 style="color:blue;position:absolute; margin-left:230px;top:150px;">Envelope1 side a:'.$envelope_a.';</h1>';
echo '<h1 style="color:blue;position:absolute; margin-left:230px;top:210px;">Envelope1 side b:'.$envelope_b.';</h1>';
echo '<h1 style="color:blue;position:absolute; margin-left:230px;top:270px;">Envelope2 side c:'.$envelope_c.';</h1>';
echo '<h1 style="color:blue;position:absolute; margin-left:230px;top:330px;">Envelope2 side d:'.$envelope_d.';</h1>';

  if ($envelope_a>$envelope_c&&$envelope_b>$envelope_d){
      echo '<h1 style="color:blue;position:absolute;margin-left:250px; top:450px;">2</h1>';
  }elseif ($envelope_c>$envelope_a&&$envelope_d>$envelope_b){
      echo '<h1 style="color:blue;position:absolute; margin-left:250px;top:450px;">1</h1>';;
  }else{
      echo '<h1 style="color:blue;position:absolute;margin-left:250px; top:450px;">0</h1>';;
  }
}

//////////////////

$env_a= 5.8;
$env_b= 5.7;
$env_c= 4.5;
$env_d= 3;

///////////////////

function checkNum2($env_a,$env_b,$env_c,$env_d) {
  if($env_a<0||!is_numeric($env_a)||$env_b<0||!is_numeric($env_b)||$env_c<0||!is_numeric($env_c)||$env_d<0||!is_numeric($env_d)) {
    throw new Exception("<h1>Value must be 0 or below</h1>");
  }
  return true;
}


try {
  checkNum2($env_a,$env_b,$env_c,$env_d);
  EnelyseEnvelopes($env_a,$env_b,$env_c,$env_d);
}catch(Exception $e) {
  echo '<h1>{status: "failed", reason:"'.$e->getMessage().'"}</h1>';
}



?>

</body>
</html>



