<?php
class Team{
    protected $name = "";
    protected $qc = null;
    protected $pm = null;
    protected $dev = null;

    public function __construct($name)
    {
    	$this->name = $name;
    }
    public function addTeamMember(HardSpecialist $hardspec)
    {
    	if ($hardspec instanceof Qc ){
    		$this->qc = $hardspec;
    	}elseif($hardspec instanceof Pm){
    		$this->pm = $hardspec;
    	}elseif($hardspec instanceof Dev){
    		$this->dev = $hardspec;
    	}else{
    		throw new Exception("Object is incorrect");
    	}
    }
    public function toString()
    {
         if ($this->qc != null && $this->pm != null && $this->dev != null){
			return "Team name: ".$this->name.";QC: ".$this->qc->getPersonalData().";PM: ".$this->pm->getPersonalData().";Dev: ".$this->dev->getPersonalData().";<br/>";
         }else {
         	return "Team is not complete";
         }
    	
    }

    public function isComplete()
    {
    	if ($this->qc === null && $this->pm === null && $this->dev === null){
    		return false;
    	}else{
    		return true;
    	}
    }
    public function getName()
    {
    	return $this->name;

    }

}