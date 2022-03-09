<?php
    include "database.php";
    session_start();

    $user_choice_id = $_POST["answer"];
    $question_idd = $_POST["question"];

    $correct_choicee = $db->query("SELECT * FROM answers WHERE question_id = $question_idd AND is_true=  1");
    $correct_choice_idd = $correct_choicee->query()["text"];


    if($user_choice_idd == $correct_choice_idd)
    {
        $_SESSION["user_score"]++;
    }

    $question_id++;
    if($_SESSION["question_number"] >= $question_idd)
    {
        header("Location: question.php=$question_idd");
    }
    else
    {
        header("Location: QUIZZER1.php");
    }
?>