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
    echo $_POST['genre'] . $_POST['difficulty'] . " posts....";
    echo "test1";
    require '../Game/creategame.php';
    echo "test2";
    require '../Game/questionsandanswers.php';
    //Game::createGame();
    echo "test3";
    
    $question = QuestionData::getQuestionFromSettings($_POST['genre'], $_POST['difficulty']);
    echo "test4";
    ?>
</body>
</html>