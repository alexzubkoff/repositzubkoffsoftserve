<?php

class HRTeam {

    private $candidates = [];

    public function addCandidates(Candidate $candidate) 
    {
        array_push($this->candidates, $candidate);
        uasort($this->candidates, function($a, $b) {
            if ($a->compareTo($b) === 0) {
                return 0;
            }
            return $a->compareTo($b) ? 1 : -1;
        });
    }

    public function getArrayCandidates() 
    {

        return $this->candidates;
    }

    public function getCandidates() 
    {
        $result = "";
        foreach ($this->candidates as $candidate) {
            $result.=$candidate->toString();
        }
        return $result;
    }
    
    public function setCandidates(array $candidates) 
    {
        $this->candidates = $candidates;
    }
    
    public function canFindSpecialist(Team $team, $experience) 
    {
        foreach ($this->candidates as $candidate) {
            if ($candidate->getProfile() === $team->getTeamName() && $candidate->getExperience() === $experience) {
                return true;
            }
        }
    }

    public function getSpecialist(Team $team, $position) 
    {
        if ($position === 'PM') {
            $pm_recruter = new PMRecruter();
            return  $pm_recruter->getSpecialist($this,$team);
        } elseif ($position === 'QC') {
            $qc_recruter = new QCRecruter();
            return  $qc_recruter->getSpecialist($this,$team);
        } else {
            $dev_recruter = new DevRecruter();
            return  $dev_recruter->getSpecialist($this,$team);
        }
    }

}
