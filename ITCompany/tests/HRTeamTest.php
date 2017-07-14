<?php

require_once 'C:\OpenServer\domains\phptaskssoftserve.com\ITCompany\Person.php';
require_once 'C:\OpenServer\domains\phptaskssoftserve.com\ITCompany\Candidate.php';
require_once 'C:\OpenServer\domains\phptaskssoftserve.com\ITCompany\HRTeam.php';
require_once 'C:\OpenServer\domains\phptaskssoftserve.com\ITCompany\Team.php';

use PHPUnit\Framework\TestCase;

class HRTeamTest extends TestCase {

    public function testaddCandidates() 
    {
        $cand1 = new Candidate('Vasya', 1200, 'JavaScript', 'PM');
        $cand2 = new Candidate('Kolya', 1300, 'C++', 'PM');
        $cand3 = new Candidate('Serg', 1100, 'Java', 'PM');
        $hr = new HRTeam();
        $hr->addCandidates($cand1);
        $hr->addCandidates($cand2);
        $hr->addCandidates($cand3);
        $this->assertEquals([$cand1, $cand2, $cand3], $hr->getArrayCandidates());
    }

    public function testgetPM() 
    {
        $cand1 = new Candidate('Vasya', 1200, 'JavaScript', 'PM');
        $cand2 = new Candidate('Kolya', 1300, 'Java', 'PM');
        $cand3 = new Candidate('Serg', 1100, 'SQL', 'PM');
        $hr = new HRTeam();
        $hr->addCandidates($cand1);
        $hr->addCandidates($cand2);
        $hr->addCandidates($cand3);

        $team1 = new Team('Java', 'project');
        $this->assertEquals($cand2, $hr->getPM($team1));
        $this->assertEquals([$cand1, $cand3], $hr->getArrayCandidates());

        $this->assertEquals(null, $hr->getQC($team1));
        $this->assertEquals([$cand1, $cand3], $hr->getArrayCandidates());

        $this->assertEquals(null, $hr->getDev($team1));
        $this->assertEquals([$cand1, $cand3], $hr->getArrayCandidates());

        $team2 = new Team('SQL', 'project');
        $this->assertEquals($cand3, $hr->getPM($team2));
        $this->assertEquals([$cand1], $hr->getArrayCandidates());

        $team3 = new Team('C++', 'project');
        $this->assertEquals(null, $hr->getPM($team3));
        $this->assertEquals([$cand1], $hr->getArrayCandidates());

        $team4 = new Team('JavaScript', 'project');
        $this->assertEquals($cand1, $hr->getPM($team4));
        $this->assertEquals([], $hr->getArrayCandidates());

        $team5 = new Team('Ruby', 'project');
        $this->assertEquals(null, $hr->getPM($team5));
        $this->assertEquals([], $hr->getArrayCandidates());
    }

}
