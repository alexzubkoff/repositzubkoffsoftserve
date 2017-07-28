<?php

require_once 'AbstractRecruter.php';

class PMRecruter extends AbstractRecruter {

    public function isMatch(Candidate $candidate, Team $team) 
    {
        if ($candidate->getProfile() === $team->getTeamProject() && $candidate->getExperience() === 'PM') {
            return true;
        }
    }

    public function createSpecialist(Candidate $candidate_real, Team $team) 
    {
        return new QC($candidate_real->getName(), $candidate_real->getWantsSalary(), 'PM', $team->getTeamName());
    }

}
