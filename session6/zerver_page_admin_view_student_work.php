<?php

include 'zerver_entrance.php';

session_start();

error_reporting(0);

$viewable = $_SESSION["curr_email_user"];

$person = $_SESSION["current_view_person"];

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT answer_id, answer, time_of_submission, due_date, grades FROM `student_answers` INNER JOIN `created_questions` ON student_answers.question_id = created_questions.question_id INNER JOIN admin_teacher_conn ON created_questions.owner_teacher = admin_teacher_conn.teacher_email WHERE admin_email = '$viewable' AND owner_student = '$person'");
    $stmt->execute();
  
    // set the resulting array to associative
    $result = $stmt->FetchAll(PDO::FETCH_ASSOC);

    echo json_encode($result);

  } catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
  }
  $conn = null;

?>