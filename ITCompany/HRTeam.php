<?php

class HRTeam {

    protected $candidates = [];

    public function addCandidates(Candidate $candidate) 
    {
        array_push($this->candidates, $candidate);
    }

    public function getPM(Team $team) 
    {
        $candidate_real;
        $new_arr = [];
        foreach ($this->candidates as $candidate) {
            if ($candidate->getProfile() === $team->getTeamName() && $candidate->getExperience() === 'PM') {
                $candidate_real = $candidate;
            } else {
                $new_arr[count($new_arr)] = $candidate;
            }
        }
        $this->candidates = $new_arr;
        return $candidate_real;
    }

    public function getQC(Team $team) 
    {
        $candidate_real;
        $new_arr = [];
        foreach ($this->candidates as $candidate) {
            if ($candidate->getProfile() === $team->getTeamName() && $candidate->getExperience() === 'QC') {
                $candidate_real = $candidate;
            } else {
                $new_arr[count($new_arr)] = $candidate;
            }
        }
        $this->candidates = $new_arr;
        return $candidate_real;
    }

    public function getDev(Team $team) 
    {
        $candidate_real;
        $new_arr = [];
        foreach ($this->candidates as $candidate) {
            if ($candidate->getProfile() === $team->getTeamName() && $candidate->getExperience() === 'DEV') {
                $candidate_real = $candidate;
            } else {
                $new_arr[count($new_arr)] = $candidate;
            }
        }
        $this->candidates = $new_arr;
        return $candidate_real;
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

}
