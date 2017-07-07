<?php
class Petshop{
	protected $pets_array = array();
    private $count_pets = 0;
	public function __construct(array $pets)
	{
	  $length = count($pets);
       for ($i = 0; $i<$length; $i++){
          $this->pets_array[$i]=$pets[$i];
       }
	}
	public function getPets()
	{
		return $this->pets_array;

	}
	public function toString()
	{    
        $str = "";
		$length = count($this->pets_array);
		for ($i = 0; $i<$length; $i++){
          $str.= $this->pets_array[$i]->toString();
		}
		return $str;
	}
	public function moreAveragePrice()
	{    
        $straver = "";
        $aver = 0;
		$length = count($this->pets_array);
		for ($i = 0; $i<$length; $i++){
          $aver+= $this->pets_array[$i]->isYourPrice();
		}
		$aver=$aver/$length;
		for ($i = 0; $i<$length; $i++){
           if ($this->pets_array[$i]->isYourPrice()>=$aver){
           	$straver.= $this->pets_array[$i]->toString();
          } 
		}
		return $straver;
	}
	public function whiteOrFluffyCats()
	{    
        $strwhitefluf = "";
       
		$length = count($this->pets_array);
		for ($i = 0; $i<$length; $i++){
          if (($this->pets_array[$i]->getClassName()==="Cat" )&&(($this->pets_array[$i]->isYourColor()==='white')||$this->pets_array[$i]->isFluffy())){
          		$strwhitefluf.= $this->pets_array[$i]->toString();
			}
		}
				return $strwhitefluf;
	}
	public function getExpensivePet()
	{    
        $exp = $this->pets_array[0]->isYourPrice();
        $strexp = "";
		$length = count($this->pets_array);
		for ($i = 1; $i<$length; $i++){
        	if ($this->pets_array[$i]->isYourPrice()>=$exp){
          		//$strwhitefluf.= $this->pets_array[$i]->toString();
          		$exp = $this->pets_array[$i]->isYourPrice();
			}
		}	
			for ($i = 0; $i<$length; $i++){
        	if ($this->pets_array[$i]->isYourPrice()===$exp){
          		
          		$strexp.=$this->pets_array[$i]->toString();
			}
		}
				return $strexp;
	}
}