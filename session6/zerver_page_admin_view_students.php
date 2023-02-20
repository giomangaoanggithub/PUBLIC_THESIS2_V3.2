<?php

include 'zerver_entrance.php';

session_start();

error_reporting(0);

$view_student = $_POST["student"];

$script = $_POST["script"];

$view_student = str_replace("student_", "", $view_student);

$email = $_SESSION["curr_email_user"];

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT * FROM `student_answers` INNER JOIN `created_questions` ON student_answers.question_id = created_questions.question_id INNER JOIN `admin_teacher_conn` ON created_questions.owner_teacher = admin_teacher_conn.teacher_email INNER JOIN `user_accounts` ON student_answers.owner_student = user_accounts.email WHERE admin_email = '$email' AND user_id = '$view_student'");
    $stmt->execute();
  
    // set the resulting array to associative
    $result = $stmt->FetchAll(PDO::FETCH_ASSOC);

    $_SESSION["admin_view_details"] = $result[0]['user_id'].', '.$result[0]['username'].', '.$result[0]['email'].', '.$result[0]['contact_number'];

    $_SESSION["current_view_person"] = $result[0]['email'];

    $_SESSION["current_view"] = $script;

  } catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
  }
  $conn = null;

?>