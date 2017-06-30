
<?php

class AnalyseEnvelopes{

  private    $envelope_a;
  private    $envelope_b;
  private    $envelope_c;
  private    $envelope_d;

 function __construct($myenvelope_a,$myenvelope_b,$myenvelope_c,$myenvelope_d){

   $this->envelope_a=(float)$myenvelope_a;
   $this->envelope_b=(float)$myenvelope_b;
   $this->envelope_c=(float)$myenvelope_c;
   $this->envelope_d=(float)$myenvelope_d;
     
  }

 function getAnalyse(){

  if ($this->envelope_a>$this->envelope_c&&$this->envelope_b>$this->envelope_d){
      return '2';
  }elseif ($this->envelope_c>$this->envelope_a&&$this->envelope_d>$this->envelope_b){
      return '1';
  }else{
      return '0';
  }
}

 }


?>





