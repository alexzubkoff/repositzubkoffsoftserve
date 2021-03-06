<?php

require_once 'ITCompany.php';
require_once 'Person.php';
require_once 'AbstractRecruter.php';
require_once 'PMRecruter.php';
require_once 'DevRecruter.php';
require_once 'QCRecruter.php';
require_once 'HRTeam.php';
require_once 'Team.php';
require_once 'IITWorker.php';
require_once 'Candidate.php';
require_once 'Worker.php';
require_once 'HardSpecialist.php';
require_once 'HR.php';
require_once 'PM.php';
require_once 'QC.php';
require_once 'Dev.php';
require_once 'DataProvider.php';
require_once 'DataProviderJson.php';


$it_company = new ITCompany("SuperSoft", "Hatsapetovka");
//echo $it_company->getRecvisits();
//echo'<p><p/>';

$cand1 = new Candidate('Vasya', 1200, 'JavaScript', 'QC');
$cand2 = new Candidate('Kolya', 1000, 'C++', 'PM');
$cand3 = new Candidate('Serg', 1150, 'Java', 'PM');
$cand4 = new Candidate('Vlad', 1300, 'C++', 'DEV');
$cand5 = new Candidate('Andrey', 1250, 'Java', 'QC');
$cand6 = new Candidate('Vova', 1200, 'JavaScript', 'DEV');
$cand7 = new Candidate('Slava', 1300, 'C++', 'PM');
$cand8 = new Candidate('Leon', 1150, 'Java', 'DEV');

$worker1 = new PM('Alesha', 1200, 'PM', 'JavaScriptMonsters');
$worker2 = new QC('Petya', 1300, 'QC', 'JavaSuper');

$hr = new HRTeam();
$hr->addCandidates($cand1);
$hr->addCandidates($cand2);
$hr->addCandidates($cand3);
$hr->addCandidates($cand4);
$hr->addCandidates($cand5);
$hr->addCandidates($cand6);
$hr->addCandidates($cand7);
$hr->addCandidates($cand8);

//echo $hr->getCandidates();
//echo'<p><p/>';

//$team1 = new Team('JavaScriptMonsters', 'JavaScript');
//$team2 = new Team('JavaSuper', 'Java');

//$team1->addTeamMember($worker1);
//$team2->addTeamMember($worker2);
//echo $team1->getTeamMembers();
//echo $team2->getTeamMembers();
//echo'<p><p/>';

//$team1->addNeeds("QC");
//$team1->addNeeds("DEV");
//$team2->addNeeds("PM");
//$team2->addNeeds("DEV");


//echo $team1->getNeedstoString();
//echo $team2->getNeedstoString();
//echo'<p><p/>';

//$it_company->addTeams($team1);
//$it_company->addTeams($team2);

//$it_company->hire($hr);
//echo $it_company->getTeams();
//echo'<p><p/>';

//echo $it_company->getCandidates($hr);

//echo "<p><p/>";
//$dataprov = new DataProvider();
//$dataprov->writeFile("Db/Teams.txt", $it_company);
//$dataprov->writeFile("Db/Candidates.txt",$hr);
//$cand_txt = $dataprov->readFile("Db/Candidates.txt");
//$hrAfter = HRTeam::txtUnSerialize($cand_txt);
//echo "<h4>Recreated from Candidates.txt</h4><br/>";
//echo $hrAfter->getCandidates();

//$dataprovjson = new DataProviderJson();
//$dataprovjson->writeFile("Db/Candidates.json", $hr);
//$candidates = $dataprovjson->readFile("Db/Candidates.json");
//echo "<p><p/>";
//$hrAfter2= HRTeam::jsonUnSerialize($candidates);
//echo "<h4>Recreated from Candidates.json</h4><br/>";
//echo $hrAfter2->getCandidates();

//echo "<p><p/>";
//$dataprovjson->writeFile("Db/Teams.json", $it_company);
//$itComp = $dataprovjson->readFile("Db/Teams.json");



    
        


