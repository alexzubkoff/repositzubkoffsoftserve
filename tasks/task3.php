
<?php

 class Triangle{
  
      private $name;
      private $a;
      private $b;
      private $c;

    function __construct($name,$a,$b,$c){
      $this->name=$name;
      $this->a=$a;
      $this->b=$b;
      $this->c=$c;
    }

    public function getArea(){
      $p=($this->a+$this->b+$this->c)/2;
      $S=sqrt($p*($p-$this->a)*($p-$this->b)*($p-$this->c));
       return round($S,2);
    }
    
   public function toString(){
       return $this->name;
    }
 }
  
  

?>
