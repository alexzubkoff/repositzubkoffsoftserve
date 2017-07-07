<?php
class Hamster extends FluffyPets{
	
     public  function __construct($color,$price){
    	parent::__construct($color,$price);
    }
    
	public function toString()
	{	
		return get_class($this)."=> color: ".$this->color."; price: ".$this->price.";is_fluffy: ".$this->is_fluffy.";<br/>";
	}
	
}