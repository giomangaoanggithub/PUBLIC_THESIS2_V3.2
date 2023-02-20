<?php

include 'zerver_entrance.php';

session_start();

error_reporting(0);

$email_input = $_SESSION["curr_email_user"];

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT a_t_c_id, admin_email, teacher_email, connection, profile_pic_address FROM `admin_teacher_conn` INNER JOIN `user_accounts` ON admin_teacher_conn.teacher_email = user_accounts.email WHERE connection = 0 AND admin_email = '$email_input'");
    $stmt->execute();
  
    // set the resulting array to associative
    $result = $stmt->FetchAll(PDO::FETCH_ASSOC);
    
    echo json_encode($result);
    

  } catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
  }
  $conn = null;

?>