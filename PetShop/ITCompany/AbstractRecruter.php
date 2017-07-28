<?php

abstract class AbstractRecruter {

    public function getSpecialist(HRTeam $hr_team, Team $team) 
    {
        $candidate_real;
        $new_arr = [];
        $candidates = $hr_team->getArrayCandidates();

        foreach ($candidates as $candidate) {
            if ($this->isMatch($candidate, $team)) {
                $newSpec = $this->createSpecialist($candidate, $team);
            } else {
                $new_arr[] = $candidate;
            }
        }
        $hr_team->setCandidates($new_arr);
        return $newSpec;
    }

    abstract public function isMatch(Candidate $candidate, Team $team);

    abstract public function createSpecialist(Candidate $candidateReal, Team $team);
}
