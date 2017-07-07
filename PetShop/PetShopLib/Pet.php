<?php
abstract class Pet{
	protected $price = 0;
	protected $color = "";

   public  function __construct($color,$price){
    	$this->color = $color;
    	$this->price = $price;
    }
	public function isYourPrice()
	{
        return $this->price;
	}

	public function isYourColor()
	{
        return $this->color;
	}
    public abstract function toString();   
}