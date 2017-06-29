
<?php

echo '<h1 style="color:blue;margin-left:570px;">3.Sort triangles</h1>';
////////////////////

$triangle1="ABC";
$triangle1_a=4;
$triangle1_b=5;
$triangle1_c=6;

$triangle2="BCD";
$triangle2_a=5;
$triangle2_b=5;
$triangle2_c=5;

$triangle3="CBD";
$triangle3_a=4;
$triangle3_b=4;
$triangle3_c=4;

///////////////////

 class Triangle{
      public $name;
      public $a;
      public $b;
      public $c;

    function __construct($name,$a,$b,$c){
      $this->name=$name;
      $this->a=$a;
      $this->b=$b;
      $this->c=$c;
    }

    public function getArea(){
      $p=($this->a+$this->b+$this->c)/2;
      $S=sqrt($p*($p-$this->a)*($p-$this->b)*($p-$this->c));
       return (float)$S;
    }
    
   public function toString(){
       return $this->name;
    }
 }
  $triangles=array();

  $triangles[0]= new Triangle($triangle1,$triangle1_a,$triangle1_b,$triangle1_c);
  $triangles[1]= new Triangle($triangle2,$triangle2_a,$triangle2_b,$triangle2_c);
  $triangles[2]= new Triangle($triangle3,$triangle3_a,$triangle3_b,$triangle3_c);


function checkNum3($env_a,$env_b,$env_c) {
  if($env_a<0||!is_numeric($env_a)||$env_b<0||!is_numeric($env_b)||$env_c<0||!is_numeric($env_c)) {
    throw new Exception("<h1>Value must be 0 or below</h1>");
  }
  return true;
}

function createAssociativeArraysTriangles($triangles_array){
      $length=count($triangles_array);
       for ($i=0;$i<$length;$i++){
          $assocarr[$triangles_array[$i]->toString()]=$triangles_array[$i]->getArea();
       }  
       return $assocarr;
}

try {
  checkNum3($triangle1_a,$triangle1_b,$triangle1_c);
  checkNum3($triangle2_a,$triangle2_b,$triangle2_c);
  checkNum3($triangle3_a,$triangle3_b,$triangle3_c);

  $results_array=createAssociativeArraysTriangles($triangles);

  function cmp($a, $b) {
    if ($a == $b) {
        return 0;
    }
    return ($a < $b) ? 1 : -1;
}
uasort($results_array, 'cmp');

foreach($results_array as $triangle => $area) {
    echo '<h2 style="color:blue;position:absolute;margin-left:570px;">Triangle=' .$triangle . ", Area=" . $area."</h2>";
    echo "<br>";
}

}catch(Exception $e) {
  echo '<h1>{status: "failed", reason:"'.$e->getMessage().'"}</h1>';
}



?>
</body>
</html>