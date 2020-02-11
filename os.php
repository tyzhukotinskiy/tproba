<!--<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="page.php" method="post">
    <?php/*
    if(isset($_REQUEST['check_work'])) {
        ?>
        <p><b>Программер:</b> <?=$workResult?></p>
        <p><b>Тимлид:</b> <?=$teamleadResponse?></p>
        <p><b>Текущее состояние Тимлида:</b> <?=$teamleadStatus?></p>
        <p>Активные hr T-1000: </p>
            <?php
                for($i = 0, $current = false; $i < count($all_t1000); $i++, $current = false){
                    for($j = 0; $j < count($current_t1000); $j++) {
                        if ($all_t1000[$i] == $current_t1000[$j]){
                            echo "<input type='checkbox' checked name='t1000-$i' value='$all_t1000[$i]'>T-1000 №".$all_t1000[$i];
                            $current = true;
                            break;
                        }
                    }
                    if(!$current)echo "<input type='checkbox' name='t1000-$i' value='$all_t1000[$i]'>T-1000 №".$all_t1000[$i];
                    echo "Который зарегистрировал уже $t1000_rebuke[$i] выговоров от тимлида.<br/>";
                }
            ?>
        <p>Активные hr T-1001: </p>
            <?php
            for($i = 0, $current = false; $i < count($all_t1001); $i++, $current = false){
                for($j = 0; $j < count($current_t1001); $j++) {
                    if ($all_t1001[$i] == $current_t1001[$j]){
                        echo "<input type='checkbox' checked name='t1001-$i' value='$all_t1001[$i]'>T-1001 №".$all_t1001[$i];
                        $current = true;
                        break;
                    }
                }
                if(!$current)echo "<input type='checkbox' name='t1001-$i' value='$all_t1001[$i]'>T-1001 №".$all_t1001[$i];
                echo "Который зарегистрировал уже $t1001_praise[$i] похвал от тимлида.<br/>";
            }
            ?>
        <?
    }
    */?>
    <input type="submit" value="Программер отправляет работу" name="check_work">
</form>
</body>
</html>-->
