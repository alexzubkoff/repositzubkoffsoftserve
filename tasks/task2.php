<?php
class Envelope{
  private   $envelope_a;
  private   $envelope_b;
  
 function __construct($myenvelope_a,$myenvelope_b)
 {
  if($myenvelope_a<0||!is_numeric($myenvelope_b)) {
        throw new Exception("<h1>Value must be 0 or below</h1>");
  }else{
        $this->envelope_a=(float)$myenvelope_a;
        $this->envelope_b=(float)$myenvelope_b;
      }
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








