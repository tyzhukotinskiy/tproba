<?php
    include_once 'Teamlead.php';
    include_once 'Database.php';
    include_once 'Singletone.php';
    include_once 'T.php';
    include_once 'T1000.php';
    include_once 'T1001.php';
    include_once 'Programmer.php';

    $proger = new Programmer();
    $proger->work();

    $workResult = ($proger->result == 1) ? $proger->goodWork() : $proger->badWork();
    /*$teamleadResponse = $proger->boss->teamleadResponse;
    $teamleadStatus = $proger->boss->currentMood;
    $all_t1000 = $proger->boss->t1000->all_workers;
    $current_t1000 = $proger->boss->t1000->current_workers;
    $t1000_rebuke = $proger->boss->t1000->rebuke_quantity;
    $all_t1001 = $proger->boss->t1001->all_workers;
    $current_t1001 = $proger->boss->t1001->current_workers;
    $t1001_praise = $proger->boss->t1001->praise_quantity;*/

    echo "Programmer finish task!\n";
    echo $workResult;
?>