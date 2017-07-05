<?php
class Triangle{
      private $name;
      private $a;
      private $b;
      private $c;

    function __construct($name,$a,$b,$c){
      if($a<0||!is_numeric($a)||$b<0||!is_numeric($b)||$c<0||!is_numeric($c)) {
         throw new Exception("<h1>Value must be 0 or below</h1>");
        }else{
                $this->name=$name;
                $this->a=$a;
                $this->b=$b;
                $this->c=$c;
        }
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
  
  class TrianglesSortedArray{
    private $assocarr=array();

    function __construct(array $triangles_array){
      $length=count($triangles_array);
       for ($i=0;$i<$length;$i++){
          $this->assocarr[$triangles_array[$i]->toString()]=$triangles_array[$i]->getArea();
       } 
    }

    public function getSortedArray(){
      $sorted_arr=$this->assocarr;
    uasort($sorted_arr,function($a, $b){
    if ($a == $b) {
      return 0;
    }
      return ($a < $b) ? 1 : -1;
    });

      return $sorted_arr;
    } 
  }

  

