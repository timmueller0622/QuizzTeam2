<?php
session_start();
require '../connectToDatabase.php';
if (!isset($_SESSION["username"])) {
    header('Location: loginAPI.php');
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Runde spielen</title>
    <meta charset="utf-8">
</head>
<body>
    <?php
    // http://quizzteam2.jedimasters.net/Scripts
    require 'navi.php';
    require '../Game/questionsandanswers.php';
    require '../Game/roundscript.php';
    require '../Game/creategame.php';
    
    $s = '<div align="center"><form method="post" action=';

    $qArray = $_SESSION['roundid']['QUESTIONS'];
    print_r($qArray);
    foreach($qArray as $question){
        $s .= QuestionData::getQuestion($question['QUESTIONID']) . "<br>";
        $aArray = QuestionData::getAnswersFromQuestion($question['QUESTIONID']);
        print_r($aArray);
        echo "<br>";
        foreach($aArray as $answer){
            $s .= $answer['ANSWERDESCRIPTION'] . "<br>";
        }
        $s .= "<br><hr>";
    }
    $s .= '</form></div>';
    echo $s;
    ?>
</body>
</html>