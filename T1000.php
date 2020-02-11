<?php

class T1000 extends T
{
    public $rebuke_quantity;

    public function __construct($workers, $hr_model)
    {
        parent::__construct($workers, $hr_model);
        $this->getRebukeQuantity();
    }

    public function rebuke(){
        $workers_id = "";
        for($i = 0; $i < count($this->current_workers); $i++){
            if($i == count($this->current_workers)-1)$workers_id .= $this->current_workers[$i];
            else $workers_id .= $this->current_workers[$i].', ';
            echo "<p style='color: red'>Зарегистрирован еще один выговор t-1000 №".$this->current_workers[$i]."</p>";
        }

        $query = "update t1000 set rebuke_quantity = rebuke_quantity + 1 where id in($workers_id)";
        Singletone::query($query);

        $this->getRebukeQuantity();
    }

    public function getRebukeQuantity(){
        $this->rebuke_quantity = [];
        $query = "select rebuke_quantity from t1000";
        $arr = Singletone::query($query);
        for($i = 0; $i < count($arr); $i++){
            $this->rebuke_quantity[] = $arr[$i]['rebuke_quantity'];
        }
    }
}