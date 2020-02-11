<?php

class T1001 extends T
{
    public $praise_quantity;

    public function __construct($workers, $hr_model)
    {
        parent::__construct($workers, $hr_model);
        $this->getPraiseQuantity();
    }

    public function praise(){
        $workers_id = "";
        for($i = 0; $i < count($this->current_workers); $i++){
            if($i == count($this->current_workers)-1)$workers_id .= $this->current_workers[$i];
            else $workers_id .= $this->current_workers[$i].', ';
            echo "<p style='color:green'>Зарегистрирована еще одна похвала t-1001 №".$this->current_workers[$i]."</p>";
        }

        $query = "update t1001 set praise_quantity = praise_quantity + 1 where id in($workers_id)";
        Singletone::query($query);

        $this->getPraiseQuantity();
    }

    public function getPraiseQuantity(){
        $this->praise_quantity = [];
        $query = "select praise_quantity from t1001";
        $arr = Singletone::query($query);
        for($i = 0; $i < count($arr); $i++){
            $this->praise_quantity[] = $arr[$i]['praise_quantity'];
        }
    }
}