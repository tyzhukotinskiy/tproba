<?php


class Teamlead
{
    public $currentMood;
    public $teamleadResponse;
    public $status = ["Убейся веником!", "Не попадись на глаза", "Плохое", "Нормальное настроение", "Хорошее настроение", "Прекрасно, вообще молодец!"];
    public $t1000;
    public $t1001;

    public function __construct()
    {
        $this->t1000 = new T1000(array(1, 2), 't1000');
        $this->t1001 = new T1001(array(1, 2), 't1001');
        $numberMood = Singletone::query('select current_mood from teamlead')[0]['current_mood'];
        $this->currentMood = $this->status[$numberMood];
    }

    public function checkWork($result){
        if($result == 1) $this->UpMood();
        else $this->DownMood();
    }

    public function UpMood(){
        $this->teamleadResponse =  "Ну вот теперь молодчина!";
        $this->changeMood(1);
    }

    public function DownMood(){
        $this->teamleadResponse = "Не беси, иди переделывай!";
        $this->changeMood(-1);
    }

    public function changeMood($change){
        $min = 0;
        $max = count($this->status)-1;

        $moodNumber = 0;
        for($i = 0; $i < count($this->status); $i++){
            if($this->status[$i] === $this->currentMood) $moodNumber = $i;
        }
        $prevMood = $moodNumber;

        $moodNumber += $change;
        if($moodNumber > $max) $moodNumber = $max;
        if($moodNumber < $min) $moodNumber = $min;

        switch($moodNumber){
            case $min:
                if($moodNumber == $prevMood){
                    $this->t1000->rebuke();
                    $this->teamleadResponse .= " Парень, тебе состоится взрывной выговор!";
                }
                break;
            case $max:
                if($moodNumber == $prevMood) {
                    $this->t1001->praise();
                    $this->teamleadResponse .= " Теперь даже похвалить не жалко!";
                }
                break;
        }
        $this->currentMood = $this->status[$moodNumber];
        Singletone::query('update teamlead set current_mood = '.$moodNumber.' where current_mood = '.$prevMood);
    }

    public function getCurrentT1000($t1000){
        $arr = [];
        foreach($t1000 as $key => $value){
            if(preg_match('/t1000/', $key)) $arr[] = $value;
        }
        if(count($arr) == 0){
            $arr[] = Singletone::query('select id from t1000 limit 1')[0]['id'];
        }
        return $arr;
    }

    public function getCurrentT1001($t1001){
        $arr = [];
        foreach($t1001 as $key => $value){
            if(preg_match('/t1001/', $key)) $arr[] = $value;
        }
        if(count($arr) == 0){
            $arr[] = Singletone::query('select id from t1001 limit 1')[0]['id'];
        }
        return $arr;
    }
}