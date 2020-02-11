<?php

class T
{
    public $current_workers = [];
    public $all_workers = [];

    public function __construct($workers, $hr_model)
    {
        $workers_id = "";
        for($i = 0; $i < count($workers); $i++){
            if($i == count($workers)-1)$workers_id .= $workers[$i];
            else $workers_id .= $workers[$i].', ';
        }
        // get current_workers
        $query = "select id from $hr_model where id in($workers_id)";
        $arr = Singletone::query($query);
        for($i = 0; $i < count($arr); $i++){
            $this->current_workers[] = $arr[$i]['id'];
        }
        //get all_workers
        $query = "select id from $hr_model";
        $arr = Singletone::query($query);
        for($i = 0; $i < count($arr); $i++){
            $this->all_workers[] = $arr[$i]['id'];
        }
    }
}