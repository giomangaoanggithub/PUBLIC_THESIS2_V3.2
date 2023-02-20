<?php

include 'zerver_entrance.php';

session_start();

error_reporting(0);

$email1 = $_POST["admin_email"];
$email2 = $_SESSION["curr_email_user"];

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO admin_teacher_conn (admin_email, teacher_email, connection)
    VALUES ('$email1', '$email2', 0)";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
  } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }
  
  $conn = null;

?>