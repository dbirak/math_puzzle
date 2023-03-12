<?php
    
    include("config.php");

    $time = $_POST['time'];
    $name = $_POST['name'];
    $V = $_POST['V'];
    
    if($_POST['game_num'] == 1) $game_num = "5x5";
    else if($_POST['game_num'] == 2) $game_num = "6x6";
    else if($_POST['game_num'] == 3) $game_num = "7x7";
    else if($_POST['game_num'] == 4) $game_num = "8x8";

    $query = 'INSERT INTO `tabela_'.$game_num.'_1-'.$V.'` VALUES (NULL, "'.$name.'", '.$time.')';
    
    mysqli_query($con, $query);

    $con->close();
?>