<?php
class HrDepartment {
	protected $candidates = array();
    
    public function __construct(){

    }
    public function addCandidate(Candidate $candidate)
    {
    	array_push($this->candidates, $candidate);
    }
    public function getCandidates()
    {
    	if (count($this->candidates)>0){
    		return $this->candidates;
    	}else{
    		return "Candidates' base is empty!";
    	}
    }
	
}