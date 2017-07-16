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

    private function getPM(Team $team) 
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

    private function getQC(Team $team) 
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

    private function getDev(Team $team) 
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
            return $this->getPM($team);
        } elseif ($position === 'QC') {
            return $this->getQC($team);
        } else {
            return $this->getDev($team);
        }
    }

}
