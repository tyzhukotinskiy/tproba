<?php

class Programmer
{
    public $boss;
    public $result;

    public function __construct()
    {
        $this->boss = new Teamlead();
    }

    public function work(){
        $workResult = rand(0, 1);
        $this->result = $workResult;
        //$this->boss->checkWork($workResult);
    }

    public function goodWork(){
        return "Programmer sends a job well done!";
    }

    public function badWork(){
        return "Programmer sends poorly done work!";
    }
}