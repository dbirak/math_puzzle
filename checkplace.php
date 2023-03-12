<?php
    
    include("config.php");

    $time = $_POST['time'];
    $V = $_POST['V'];
    
    if($_POST['game_num'] == 1) $game_num = "5x5";
    else if($_POST['game_num'] == 2) $game_num = "6x6";
    else if($_POST['game_num'] == 3) $game_num = "7x7";
    else if($_POST['game_num'] == 4) $game_num = "8x8";

    $query = 'SELECT * FROM `tabela_'.$game_num.'_1-'.$V.'` WHERE `time` <= '.$time;
    
    $result = mysqli_query($con, $query);
    $place =  mysqli_num_rows($result);
    echo $place+1;

    $con->close();

?>