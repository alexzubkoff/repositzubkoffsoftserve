<?php
class RowFibonache extends Task{
  private   $length;
  private   $min = 0;
  private   $max = 0;
  
  function __construct(Context $other){
      $this->length = $other->getContextLength();
      $this->min = $other->getContextMin();
      $this->max = $other->getContextMax();           
    }

    protected function validate()
    {
      if ($this->length<0||!is_numeric($this->length)|| $this->min<0||!is_numeric( $this->min)||$this->max<0||!is_numeric($this->max)) {
      throw new Exception("<h1>Value must be 0 or below</h1>");
    }else{
         $this->is_valid = true;
      }   
    }


    protected function run()
    {
       $length = $this->length;
       $min    = $this->min;
       $max    = $this->max;
       $num1   = 0;
       $num2   = 1;
       $num3   = 0;
       $arr = array();
       $arr_new = array();

  for ($i=0; $i<$length; $i++){
       $arr[$i] = $num1;
       $num3 = $num1+$num2;
       $num2 = $num1;
       $num1 = $num3;
      }

      $count = 0;

      if (($min!==0||$max!==0)&&($max>$min)){
        for ($i=0; $i<$length; $i++){
          if (($arr[$i]>=$min)&&($arr[$i]<=$max)){
            $arr_new[$count]=$arr[$i];
            $count++;
            }           
          }
               $this->str_result = implode(',',$arr_new);
          }else{
               $this->str_result = implode(',',$arr);
          }
       
    }

}
     class Context extends ContextTicket{
       
       private $length = 0;

       public function __construct($min,$max,$length)
       {
          parent::__construct($min,$max);
          $this->length=$length;
       }
        public function getContextLength()
        {
          return $this->length;
        }
        
     }





