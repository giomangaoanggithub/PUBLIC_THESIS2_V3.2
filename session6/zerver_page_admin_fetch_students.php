<?php

include 'zerver_entrance.php';

session_start();

error_reporting(0);

$email_input = $_SESSION["curr_email_user"];

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT DISTINCT user_id, profile_pic_address, username, email, contact_number FROM ((`teacher_student_connection` INNER JOIN `admin_teacher_conn` ON teacher_student_connection.teacher_email = admin_teacher_conn.teacher_email) INNER JOIN `user_accounts` ON teacher_student_connection.student_email = user_accounts.email) WHERE admin_email = '$email_input'");
    $stmt->execute();
  
    // set the resulting array to associative
    $result = $stmt->FetchAll(PDO::FETCH_ASSOC);

    echo json_encode($result);
  } catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
  }
  $conn = null;
?>