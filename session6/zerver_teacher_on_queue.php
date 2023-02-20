<?php

include 'zerver_entrance.php';

session_start();

error_reporting(0);

$email = $_SESSION["curr_email_user"];

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT * FROM `admin_teacher_conn` WHERE teacher_email = '$email' AND connection = 0");
    $stmt->execute();
  
    // set the resulting array to associative
    $result = $stmt->FetchAll(PDO::FETCH_ASSOC);

    echo '["'.$result[0]["teacher_email"].'"]';

  } catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
  }
  $conn = null;

?>