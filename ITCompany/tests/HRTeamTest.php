<?php

require_once 'C:\OpenServer\domains\phptaskssoftserve.com\ITCompany\Person.php';
require_once 'C:\OpenServer\domains\phptaskssoftserve.com\ITCompany\Candidate.php';
require_once 'C:\OpenServer\domains\phptaskssoftserve.com\ITCompany\HRTeam.php';
require_once 'C:\OpenServer\domains\phptaskssoftserve.com\ITCompany\PMRecruter.php';
require_once 'C:\OpenServer\domains\phptaskssoftserve.com\ITCompany\DevRecruter.php';
require_once 'C:\OpenServer\domains\phptaskssoftserve.com\ITCompany\QCRecruter.php';
require_once 'C:\OpenServer\domains\phptaskssoftserve.com\ITCompany\AbstractRecruter.php';
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

    public function testcanFindSpecialist() 
    {
        $cand1 = new Candidate('Vasya', 1200, 'JavaScript', 'PM');
        $cand2 = new Candidate('Kolya', 1300, 'Java', 'PM');
        $cand3 = new Candidate('Serg', 1100, 'SQL', 'DEV');
        $hr = new HRTeam();
        $hr->addCandidates($cand1);
        $hr->addCandidates($cand2);
        $hr->addCandidates($cand3);

        $team1 = new Team('Java', 'project');

        $this->assertEquals(true, $hr->canFindSpecialist($team1, 'PM'));
        $this->assertEquals(false, $hr->canFindSpecialist($team1, 'QC'));
        $this->assertEquals(false, $hr->canFindSpecialist($team1, 'DEV'));
    }

    public function testgetSpecialist() 
    {
        $cand1 = new Candidate('Vasya', 1200, 'JavaScript', 'PM');
        $cand2 = new Candidate('Kolya', 1300, 'Java', 'PM');
        $cand3 = new Candidate('Serg', 1100, 'SQL', 'DEV');
        $cand4 = new Candidate('Vasya', 1200, 'C++', 'QC');
        $cand5 = new Candidate('Kolya', 1300, 'C#', 'DEV');
        $cand6 = new Candidate('Serg', 1100, 'Delphi', 'DEV');

        $hr = new HRTeam();
        $hr->addCandidates($cand1);
        $hr->addCandidates($cand2);
        $hr->addCandidates($cand3);
        $hr->addCandidates($cand4);
        $hr->addCandidates($cand5);
        $hr->addCandidates($cand6);

        $team1 = new Team('Java', 'project');
        $team2 = new Team('JavaScript', 'project');
        $team3 = new Team('C#', 'project');

        $this->assertEquals($cand2, $hr->getSpecialist($team1, 'PM'));
        $this->assertEquals(null, $hr->getSpecialist($team1, 'QC'));
        $this->assertEquals(null, $hr->getSpecialist($team1, 'DEV'));

        $this->assertEquals($cand1, $hr->getSpecialist($team2, 'PM'));
        $this->assertEquals(null, $hr->getSpecialist($team2, 'QC'));
        $this->assertEquals(null, $hr->getSpecialist($team2, 'DEV'));

        $this->assertEquals($cand5, $hr->getSpecialist($team3, 'DEV'));
        $this->assertEquals(null, $hr->getSpecialist($team3, 'QC'));
        $this->assertEquals(null, $hr->getSpecialist($team3, 'PM'));
    }

}
