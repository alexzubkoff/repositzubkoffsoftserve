
<?php

class HappyTicket{
      private $context_min;
      private $context_max;
      private $simple_count=0;
      private $notsimple_count=0;

      function __construct($context_min,$context_max){

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
          $this->context_miax=intval(strval($context_max)."0000");
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

    public function methodSimple(){
     
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
         return  $this->simple_count;
    }
    
   public function methodNotSimple(){
      $count=0;
      for ($i=$this->context_min; $i<=$this->context_max; $i++){
        $num=str_split(strval($i));
        $sum1=$num[0]+$num[2]+$num[4];
        $sum2=$num[1]+$num[3]+$num[5];
         if ($sum1==$sum2){
           $this->notsimple_count++;
        }
      }
         return  $this->notsimple_count;
    }

    public function methodChampion(){
      
         if($this->simple_count>$this->notsimple_count){
          echo '<h2 style="color:blue;position:absolute;margin-left:1000px;top:550px;">Simple: '.$this->methodSimple().' tickets</h2>';
          echo '<h2 style="color:blue;position:absolute;margin-left:1000px;top:600px;">Not simple: '.$this->methodNotSimple().' tickets</h2>';
       }else{
          echo '<h2 style="color:blue;position:absolute; margin-left:1000px;top:550px;">Not simple: '.$this->methodNotSimple().' tickets</h2>';
          echo '<h2 style="color:blue;position:absolute; margin-left:1000px;top:600px;">Simple: '.$this->methodSimple().' tickets</h2>';
      }
    }

 }


?>

</body>
</html>