<?php
session_start();
echo $_SESSION["admin_view_details"].", ".$_SESSION["current_view"];
?>