<?php
class RowFibonache{
  private   $length;
  private   $min=0;
  private   $max=0;
  
  function __construct(Context $other){
    $number1=$other->getContextLength();
    $number2=$other->getContextMin();
    $number3=$other->getContextMax();
    if($number1<0||!is_numeric($number1)||$number2<0||!is_numeric($number2)||$number3<0||!is_numeric($number3)) {
      throw new Exception("<h1>Value must be 0 or below</h1>");
    }else{
      $this->length=$other->getContextLength();
      $this->min=$other->getContextMin();
      $this->max=$other->getContextMax();  
    }            
    }

  public  function getRowFibonache(){
       $length = $this->length;
       $min    = $this->min;
       $max    = $this->max;
       $num1   = 0;
       $num2   = 1;
       $num3   = 0;
       $arr=array();
       $arr_new=array();

  for ($i=0; $i<$length; $i++){
       $arr[$i]=$num1;
       $num3=$num1+$num2;
       $num2=$num1;
       $num1=$num3;
      }

      $count=0;

      if (($min!==0||$max!==0)&&($max>$min)){
        for ($i=0; $i<$length; $i++){
          if(($arr[$i]>=$min)&&($arr[$i]<=$max)){
            $arr_new[$count]=$arr[$i];
            $count++;
            }           
          }
               return $arr_new;
          }else{
               return $arr;
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





