<?php
class Petshop{
	protected $pets_array= array();
    private $count_pets=0;

	function __construct(Pet $pet){
 
		$this->pets_array[count($this->pets_array)]=$pet;
	}

	public function getPets(){

		return $this->pets_array;

	}
}