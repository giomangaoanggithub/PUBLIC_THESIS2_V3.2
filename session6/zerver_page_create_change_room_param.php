<?php
session_start();
error_reporting(0);
$outcome = $_POST["outcome"];

if($outcome == "0"){
    $_SESSION["create-change"] = "0";
}
else if($outcome == "1") {
    $_SESSION["create-change"] = "1";
}
echo $_SESSION["create-change"];
?>