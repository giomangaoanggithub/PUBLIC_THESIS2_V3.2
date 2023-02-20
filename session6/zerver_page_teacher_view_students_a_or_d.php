<?php

include 'zerver_entrance.php';

session_start();

error_reporting(0);

$outcome = $_POST["outcome"];
$conn_id = $_POST["conn_id"];
$email = $_SESSION["curr_email_user"];

if($conn_id[0] == 'a'){
    $conn_id = str_replace("accept_", "", $conn_id);
} else {
    $conn_id = str_replace("decline_", "", $conn_id);
}

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
    $sql = "UPDATE teacher_student_connection SET t_s_connection ='$outcome' WHERE teacher_email = '$email' AND t_s_conn_id = '$conn_id'";
  
    // Prepare statement
    $stmt = $conn->prepare($sql);
  
    // execute the query
    $stmt->execute();
  
  } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }
  
  $conn = null;
  
?>