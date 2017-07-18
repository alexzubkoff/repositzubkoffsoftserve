<?php

class HRTeam {

    private $candidates = [];
    private $arr_func = array("PMrecruter" => "PM", "QCRecruter" => "QC", "DevRecruter" => "DEV");

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

    public function getCandidates() 
    {
        $result = "";
        foreach ($this->candidates as $candidate) {
            $result.=$candidate->toString();
        }
        return $result;
    }

    public function getArrayCandidates() 
    {

        return $this->candidates;
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

    public function txtSerialize() 
    {
        $str = "";
        foreach ($this->candidates as $candidate) {
            $str.= $candidate->txtSerialize();
        }
        return $str;
    }

    public static function txtUnSerialize($str) 
    {
        $cand_arr = explode(";", $str);
        array_pop($cand_arr);
        $new_arr = [];
        foreach ($cand_arr as $cand) {
            array_push($new_arr, explode(":", $cand));
        }
        $length = count($new_arr);
        $hr = new HRTeam();
        for ($i = 0; $i < $length; $i++) {
            $hr->addCandidates(new $new_arr[$i][0]($new_arr[$i][1], $new_arr[$i][2], $new_arr[$i][3], $new_arr[$i][4]));
        }
        return $hr;
    }

    public function getSpecialist(Team $team, $position) 
    {
        $recruter = array_search($position, $this->arr_func);
        $rec = new $recruter();
        return $rec->getSpecialist($this, $team);
    }

}
