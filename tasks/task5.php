
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
       $length = $this->length;
       $num1   = $this->num1;
       $num2   = $this->num2;
       $num3   = $this->num3;
       $min    = $this->min;
       $max    = $this->max;

  for ($i=0; $i<$length; $i++){
       $this->arr[$i]=$num1;
       $num3=$num1+$num2;
       $num2=$num1;
       $num1=$num3;
      }

      $count=0;

      if (($min!==0||$max!==0)&&($max>$min)){
        for ($i=0; $i<$length; $i++){
          if(($this->arr[$i]>=$min)&&($this->arr[$i]<=$max)){
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


