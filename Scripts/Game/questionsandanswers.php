<?php

class QuestionData{
  
    public static function getQuestionWithAnswers($questionID){
        echo "Methodenaufruf";
        require '../connectToDatabase.php';

        $toReturn = array();

        foreach($conn->query("SELECT QuestionData JOIN AnswerData ON QuestionData.QuestionDataID = AnswerData.Question WHERE QuestionData = " . $questionID . ";") as $entry){
            $toReturn[] .= $entry['ANSWERID'] . ";" . $entry['ANSWERDESCRIPTION'] . ";" . $entry['ISRIGHT'] . ";" . $entry['QUESTION'] . ";|" ;
        }

        return $toReturn;        
    }

}

?>