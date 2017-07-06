<?php
class HappyTicket extends Task{
      private $context_min;
      private $context_max;
      private $simple_count=0;
      private $notsimple_count=0;

      function __construct(ContextTicket $other){
         $env_a=$other->getContextMin();
         $env_b=$other->getContextMax();
        if($env_a<0||!is_numeric($env_a)||$env_b<0||!is_numeric($env_b)||strlen(strval($env_a))>6||strlen(strval($env_b))>6) {
         throw new Exception("<h1>Value must be 0 or below and must has not more 6 digits</h1>");
        }else{
          $context_min=$other->getContextMin();
          $context_max=$other->getContextMax();

        if (strlen(strval($context_min))==1){
          $this->context_min=intval(strval($context_min)."00000");     
        }elseif(strlen(strval($context_min))==2){
          $this->context_min=intval(strval($context_min)."0000");
        }elseif(strlen(strval($context_min))==3){
          $this->context_min=intval(strval($context_min)."000");
        }elseif(strlen(strval($context_min))==4){
          $this->context_min=intval(strval($context_min)."00");
        }elseif(strlen(strval($context_min))==5){
          $this->context_min=intval(strval($context_min)."0");
        }else{
          $this->context_min=$context_min;
        }
        
        if (strlen(strval($context_max))==1){
          $this->context_max=intval(strval($context_max)."00000");     
        }elseif(strlen(strval($context_max))==2){
          $this->context_max=intval(strval($context_max)."0000");
        }elseif(strlen(strval($context_max))==3){
          $this->context_max=intval(strval($context_max)."000");
        }elseif(strlen(strval($context_max))==4){
          $this->context_max=intval(strval($context_max)."00");
        }elseif(strlen(strval($context_max))==5){
          $this->context_max=intval(strval($context_max)."0");
        }else{
          $this->context_max=$context_max;
        }
    }

        }

        protected function validate(){
          if($this->context_min!==null&&$this->context_max!==null){
              $this->is_valid=true;
          }
        }

        protected function run(){
        for ($i=$this->context_min; $i<=$this->context_max; $i++){
        $num=strval($i);
        $num1=substr($num,0,2);
        $num2=substr($num,3,5);
        $sum1=array_sum(str_split($num1));
        $sum2=array_sum(str_split($num2));
        if ($sum1==$sum2){
            $this->simple_count++;
        }
      }  
        $count=0;
      for ($j=$this->context_min; $j<=$this->context_max; $j++){
        $num=str_split(strval($j));
        $sum1=$num[0]+$num[2]+$num[4];
        $sum2=$num[1]+$num[3]+$num[5];
         if ($sum1==$sum2){
           $this->notsimple_count++;
        }
      }

      if($this->simple_count>$this->notsimple_count){
          $this->str_result.='<h2 style="color:blue;position:absolute;margin-left:1000px;top:550px;">Simple: '.$this->simple_count.' tickets</h2>';
          $this->str_result.='<h2 style="color:blue;position:absolute;margin-left:1000px;top:600px;">Not simple: '.$this->notsimple_count.' tickets</h2>';
       }else{
          $this->str_result.='<h2 style="color:blue;position:absolute; margin-left:1000px;top:550px;">Not simple: '.$this->notsimple_count.' tickets</h2>';
          $this->str_result.='<h2 style="color:blue;position:absolute; margin-left:1000px;top:600px;">Simple: '.$this->simple_count.' tickets</h2>';
            }

    }

 }

 class ContextTicket{
       private $min=0;
       private $max=0;

       function __construct($min,$max){
        
        $this->min=$min;
        $this->max=$max;
       }
        
        public function getContextMin(){
          return $this->min;
        }
        public function getContextMax(){
          return $this->max;
        }
     }




