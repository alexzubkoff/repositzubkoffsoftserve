
<?php

class RowFibonache{

private   $num1=1;
private   $num2=0;
private   $num3=0;
private   $length=0;
private   $arr=array();
  

  function __construct($length){
    $this->length=$length;
  }

  public  function getRowFibonache(){

  for ($i=$this->num1; $i<=$this->length; $i++){
      $this->arr[$i]=$this->num1;
      $this->num3=$this->num1+$this->num2;
      $this->num2=$this->num1;
      $this->num1=$this->num3;
      }

       return $this->arr;
    }
}



?>


