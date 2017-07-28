<?php

require_once 'AbstractRecruter.php';

class QCRecruter extends AbstractRecruter {

    public function isMatch(Candidate $candidate, Team $team) 
    {
        if ($candidate->getProfile() === $team->getTeamProject() && $candidate->getExperience() === 'QC') {
            return true;
        }
    }

    public function createSpecialist(Candidate $candidate_real, Team $team) 
    {
        return new QC($candidate_real->getName(), $candidate_real->getWantsSalary(), 'QC', $team->getTeamName());
    }

}
