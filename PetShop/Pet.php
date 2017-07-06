<?php
abstract class Petshop{
	protected $price;
	protected $color;
	protected $is_fluffy=false;
	protected $has_name=true;
	protected $name="";

	public function isYourPrice(){
        return $this->price;
	}

	public function isYourColor(){
        return $this->color;
	}
	public function isYourName(){
        if ($this->has_name){
		 return $this->name;
		}
	}

	public function isFluffy(){
		if ($this->is_fluffy){
		 return $this->is_fluffy;
		}
		
	}
        
}