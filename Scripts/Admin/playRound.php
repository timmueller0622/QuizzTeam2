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
    <title>Genre Auswählen</title>
    <meta charset="utf-8">
</head>
<body>
    <?php
    // http://quizzteam2.jedimasters.net/Scripts
    require 'navi.php';
    
    echo "test1";
    try {
        require '../Game/questionsandanswers.php';
        
    echo "test2";
        require '../Game/roundscript.php';
        
    echo "test3";
        require '../Game/questionsandanswers.php';
        
    echo "test4";
    } catch (Exception $e){
        echo $e;
    }
    echo "test";
    $qpr = Round::getQuestionsPerRound($_SESSION['roundid']);
    print_r($qpr);
    $qArray = Game::createQuestions($qpr, $_SESSION['roundid']);
    $question = QuestionData::getQuestionFromSettings($_SESSION['roundid']);
    $qnum = rand(0, sizeof($question));

    $s = '<div align="center">';
    $s .= explode(';', $question[$qnum])[1] . '<br>';
    $answers = QuestionData::getAnswersFromQuestion(explode(';', $question[$qnum])[0]);
    foreach($answers as $answer){
        $s .= explode(';', $answer)[1] . '<br>';
    }
    $s .= '</div>';
    echo $s;
    ?>
</body>
</html>