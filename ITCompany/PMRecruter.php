<?php

require_once 'AbstractRecruter.php';

class PMRecruter extends AbstractRecruter {

    public function getSpecialist(HRTeam $hr_team, Team $team) 
    {
        $candidate_real;
        $new_arr = [];
        $candidates = $hr_team->getArrayCandidates();
        foreach ($candidates as $candidate) {
            if ($candidate->getProfile() === $team->getTeamName() && $candidate->getExperience() === 'PM') {
                $candidate_real = $candidate;
            } else {
                $new_arr[count($new_arr)] = $candidate;
            }
        }
        $hr_team->setCandidates($new_arr);
        return $candidate_real;
    }

}
