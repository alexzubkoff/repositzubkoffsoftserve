
<?php

class Envelope{

  private   $envelope_a;
  private   $envelope_b;
  
 function __construct($myenvelope_a,$myenvelope_b){
  
   $this->envelope_a=(float)$myenvelope_a;
   $this->envelope_b=(float)$myenvelope_b;
  }


  public function compareTo(Envelope $other_envelope){

  if ($this->envelope_a>$other_envelope->envelope_a&&$this->envelope_b>$other_envelope->envelope_b){
      return '2';
  }elseif ($other_envelope->envelope_a>$this->envelope_a&&$other_envelope->envelope_b>$this->envelope_b){
      return '1';
  }else{
      return '0';
  }
}

 }


?>





