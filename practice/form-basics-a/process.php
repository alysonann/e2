<?php
//var_dump($_GET);
//var_dump($_GET['answer']);
$results='';
$correct = null;
$haveAnswer = true;
if ($_GET['answer']=='') {
    //var_dump('You didn\'t enter a guess');
    // $results ='You didn\'t enter a guess';
    $haveAnswer = false;
} elseif ($_GET['answer']=='pumpkin') {
    // var_dump('Correct!');
    //$results='Correct!';
    $correct = true;
} else {
    //var_dump('Incorrect');
    //$results = 'Incorrect';
    $correct = false;
}
require 'process-view.php';

//var_dump($_GET['answerB']);
//$_GET
//$_POST
//$_SESSION
