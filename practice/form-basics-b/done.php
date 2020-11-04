<?php
session_start();

$results =$_SESSION["results"];
//$haveAnswer = $results["haveAnswer"];
//$correct = $results["correct"];

extract($results);
require "done-view.php";
