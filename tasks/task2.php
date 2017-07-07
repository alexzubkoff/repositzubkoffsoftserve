<?php
class Envelope extends Task{
  private   $envelope_a;
  private   $envelope_b;
  
 function __construct($myenvelope_a,$myenvelope_b)
 {
        $this->envelope_a = (float)$myenvelope_a;
        $this->envelope_b = (float)$myenvelope_b;
  }

  protected function validate()
  {
    if($this->envelope_a<0||$this->envelope_b<0||!is_numeric($this->envelope_a)||!is_numeric($this->envelope_a)) {
        throw new Exception("<h1>Value must be 0 or below</h1>");
  }else{
        $this->is_valid=true;
      }
  }
  protected function run()
  {
      return true;
  }
  public function compareTo(Envelope $other_envelope)
  {

  if ($this->envelope_a>$other_envelope->envelope_a&&$this->envelope_b>$other_envelope->envelope_b){
      $this->str_result='2';
  }elseif ($other_envelope->envelope_a>$this->envelope_a&&$other_envelope->envelope_b>$this->envelope_b){
      $this->str_result='1';;
  }else{
      $this->str_result='0';;
    }
  }

}








