<?php

require_once '././ITCompany/main.php';

class ModelITCompany extends Model {

    const HOST = "127.0.0.1:3306";
    const DB = "zubkov";
    const USER = "root";
    const PASS = "";

    protected $dataprovjson;
    protected $candidates;
    protected $hr;
    protected $itcomp;
    protected $dbh;

    public function __construct() {
        $this->itcomp = new ITCompany("SuperSoft", "Hatsapetovka");


        $team1 = new Team('JavaScriptMonsters', 'JavaScript');
        $team2 = new Team('JavaSuper', 'Java');

        $worker1 = new PM('Alesha', 1200, 'PM', 'JavaScriptMonsters');
        $worker2 = new QC('Petya', 1300, 'QC', 'JavaSuper');

        $team1->addTeamMember($worker1);
        $team2->addTeamMember($worker2);

        $team1->addNeeds('QC');
        $team1->addNeeds('DEV');
        $team2->addNeeds('PM');
        $team2->addNeeds('DEV');

        $this->itcomp->addTeams($team1);
        $this->itcomp->addTeams($team2);

        $this->dataprovjson = new DataProviderJson();
        $this->candidates = $this->dataprovjson->readFile("ITCompany/Db/Candidates.json");
        $this->hr = HRTeam::jsonUnSerialize($this->candidates);
    }

    public function getAllCandidates() 
    {
        return $this->hr->getCandidates();
    }

    public function getTeamsbefore() 
    {
        return $this->itcomp->getTeams();
    }

    public function getTeamsafter() 
    {
        $this->itcomp->hire($this->hr);
        return $this->itcomp->getTeams();
    }

    public function getAlLCandidatesAfter() 
    {
        $this->itcomp->hire($this->hr);
        return $this->itcomp->getCandidates($this->hr);
    }

    public function getCandidatesfromdb() 
    {
        try {
            $connection = new PDO('mysql:host=' . self::HOST . ';dbname=' . self::DB . ';charset=utf8', self::USER, self::PASS);
            $sth = $connection->prepare("SELECT DISTINCT Candidates.Name,Candidates.Wants_Salary,Candidates.Profile,Candidates.Experience FROM Candidates INNER JOIN Teams ON Teams.Project= Candidates.Profile INNER JOIN Teams_Needs ON Candidates.Experience=Teams_Needs.Experience;");
            $connection = null;
            $sth->execute();
            $result = $sth->fetchAll(PDO::FETCH_ASSOC);
            $arrObjCand = [];
            $hr = new HRTeam();
            foreach ($result as $candidate) {
                $hr->addCandidates(new Candidate($candidate['Name'], $candidate['Wants_Salary'], $candidate['Profile'], $candidate['Experience']));
            }
        } catch (PDOException $exc) {
            echo "Error: " . $exc->getMessage();
        }

        return $hr->getCandidates();
    }

}
