<?php
    //connect.php
    echo "\ntestconnectenter";
    try {
        $pdo = new PDO('oracle:dbname=Team2;host=quizzteam2.jedimasters.net','opc','QuizzApp9755');
    } catch (Exception $e){
        echo ($e->getMessage());
    }
    echo "\ntestconnectreturn";
?>