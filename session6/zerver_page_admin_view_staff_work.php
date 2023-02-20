<?php

include 'zerver_entrance.php';

session_start();

error_reporting(0);

$viewable = $_SESSION["curr_email_user"];

$person = $_SESSION["current_view_person"];

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT question_id, question, time_of_issue, due_date, publish FROM `created_questions` INNER JOIN `admin_teacher_conn` ON created_questions.owner_teacher = admin_teacher_conn.teacher_email WHERE admin_email = '$viewable' AND owner_teacher = '$person'");
    $stmt->execute();
  
    // set the resulting array to associative
    $result = $stmt->FetchAll(PDO::FETCH_ASSOC);

    echo json_encode($result);

  } catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
  }
  $conn = null;

?>