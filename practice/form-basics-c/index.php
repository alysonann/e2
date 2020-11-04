<?php
//Handle session data
session_start();
//Extract data from the session, if the session has the results
//Otherwise, assume we've just landed on the page fresh (i.e. the form has not been submitted)
if (isset($_SESSION["results"])) {
    $results =$_SESSION['results'];
    extract($results);
//$haveAnswer = $results["haveAnswer"];
    //$correct=$results["correct"];
} else {
    $results = false;
}
//Rest the game data so we can start fresh the next time the page is loaded
$_SESSION['results'] = null;
require 'index-view.php';
