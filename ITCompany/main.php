<?php
require_once "ITCompanyLib/ITCompanyGlobal.php";
require_once "ITCompanyLib/ITCompanyRegional.php";
require_once "ITCompanyLib/Person.php";
require_once "ITCompanyLib/Candidate.php";
require_once "ITCompanyLib/Worker.php";
require_once "ITCompanyLib/Hr.php";
require_once "ITCompanyLib/HardSpecialist.php";
require_once "ITCompanyLib/Qc.php";
require_once "ITCompanyLib/Pm.php";
require_once "ITCompanyLib/Dev.php";
require_once "ITCompanyLib/HrDepartment.php";
require_once "ITCompanyLib/Team.php";

$itcomp = new  ITCompanyRegional("SuperSoft","Ukraine","Dnepropetrovsk","Vokzalnaya/4");

$cand1 = new Candidate("Vasya","Vaskin","1289.10.21",120,true);
$cand2 = new Candidate("Petya","Petkin","1287.10.21",340,true);
$cand3 = new Candidate("Kolya","Kolkin","1276.10.21",321,true);

$hrdep = new HrDepartment();
$hrdep->addCandidate($cand1);
$hrdep->addCandidate($cand2);
$hrdep->addCandidate($cand3);

$team1 = new Team("JavaScript");

$itcomp->getCandidates($hrdep);
$itcomp->addTeams($team1);

echo $itcomp->getItCompRecvisits();
echo "<p><p/>";
echo $itcomp->getTeams();