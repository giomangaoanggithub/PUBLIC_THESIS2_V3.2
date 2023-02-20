<?php

include 'zerver_entrance.php';

session_start();

error_reporting(0);

$outcome = $_POST["outcome"];

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "";

    if(str_contains($outcome, "accept_--")){
        $outcome =  trim(str_replace("accept_--","",$outcome));
        $sql = "UPDATE admin_teacher_conn SET connection = 1 WHERE a_t_c_id=$outcome";
    }
    else if(str_contains($outcome, "decline_--")){
        $outcome =  trim(str_replace("decline_--","",$outcome));
        $sql = "UPDATE admin_teacher_conn SET connection = -1 WHERE a_t_c_id=$outcome";
    }
  
    // Prepare statement
    $stmt = $conn->prepare($sql);
  
    // execute the query
    $stmt->execute();
  
    // echo a message to say the UPDATE succeeded
    echo $stmt->rowCount() . " records UPDATED successfully";
  } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }
  
  $conn = null;

?>