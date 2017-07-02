
<?php

class RowFibonache{

private   $num1=0;
private   $num2=1;
private   $num3=0;
private   $length;
private   $arr=array();
private   $min=0;
private   $max=0;
private   $arr_new=array();

  

  function __construct(Context $other){
    $this->length=$other->getContextLength();
    $this->min=$other->getContextMin();
    $this->max=$other->getContextMax();

  }
  public  function getRowFibonache(){

  for ($i=0; $i<$this->length; $i++){
      $this->arr[$i]=$this->num1;
      $this->num3=$this->num1+$this->num2;
      $this->num2=$this->num1;
      $this->num1=$this->num3;
      }
      $count=0;
      if (($this->min!==0||$this->max!==0)&&($this->max>$this->min)){
        for ($i=0; $i<$this->length; $i++){
          if(($this->arr[$i]>=$this->min)&&($this->arr[$i]<=$this->max)){
            $this->arr_new[$count]=$this->arr[$i];
            $count++;
          }
           
        }
        return $this->arr_new;

      }else{
        return $this->arr;
      }
       
    }
}

     class Context{
       private $min=0;
       private $max=0;
       private $length=0;

       function __construct($length){
        $this->length=$length;
       }
        
        public function setMinMax($min,$max){
          $this->min=$min;
          $this->max=$max;
        }
        public function getContextLength(){
          return $this->length;
        }
        public function getContextMin(){
          return $this->min;
        }
        public function getContextMax(){
          return $this->max;
        }
     }



?>


