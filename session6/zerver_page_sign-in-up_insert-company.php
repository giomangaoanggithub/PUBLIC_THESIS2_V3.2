<?php

include 'zerver_entrance.php';

session_start();

error_reporting(0);

$email_input = $_POST["email"];
$company_input = $_POST["company"];

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO companies (company_name, company_admin_email)
  VALUES ('$company_input','$email_input')";
  // use exec() because no results are returned
  $conn->exec($sql);
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>