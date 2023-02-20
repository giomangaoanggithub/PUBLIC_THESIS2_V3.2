<?php

session_start();

error_reporting(0);

$_SESSION["curr_update_q"] = str_replace("question_gear_", "",$_POST["curr"]);

echo $_SESSION["curr_update_q"];

?>