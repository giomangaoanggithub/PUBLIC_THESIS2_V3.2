<?php

include 'zerver_entrance.php';

session_start();

error_reporting(0);

$outcome = $_POST["number"];
$email = $_SESSION["curr_email_user"];
$interaction = $_POST["interaction"];

if ($outcome == 0){
  $filename = $email;
  $target_directory = "profiles/";
  unlink($target_directory.$email);    
  $target_file = $target_directory.basename($_FILES["file"]["name"]);
  $filetype = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  $newfilename = $target_directory.$filename.".".$filetype;
  move_uploaded_file($_FILES["file"]["tmp_name"],$newfilename);
} else {
  $sql = "";
  if ($outcome == 1){
    $sql = "UPDATE user_accounts SET username='$interaction' WHERE email='$email'";
  }
  else if ($outcome == 2){
    $sql = "UPDATE `user_accounts`, `companies` SET companies.company_name = '$interaction' WHERE companies.company_admin_email = '$email'";
  }
  else if ($outcome == 3){
    $sql = "UPDATE `user_accounts`, `companies` SET companies.company_code = '$interaction' WHERE companies.company_admin_email = '$email'";
  }
  else if ($outcome == 4){
    $sql = "UPDATE user_accounts SET contact_number='$interaction' WHERE email='$email'";
  }
  try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
    if($outcome == 5){
      $stmt = $conn->prepare("UPDATE `user_accounts` SET `email` = '$interaction' WHERE `user_accounts`.`email` = '$email'");
      $stmt->execute();

      $stmt = $conn->prepare("UPDATE `admin_teacher_conn` SET `admin_email` = '$interaction' WHERE `admin_teacher_conn`.`admin_email` = '$email'");
      $stmt->execute();

      $stmt = $conn->prepare("UPDATE `admin_teacher_conn` SET `teacher_email` = '$interaction' WHERE `admin_teacher_conn`.`teacher_email` = '$email'");
      $stmt->execute();

      $stmt = $conn->prepare("UPDATE `classrooms` SET `owner_email` = '$interaction' WHERE `classrooms`.`owner_email` = '$email'");
      $stmt->execute();

      $stmt = $conn->prepare("UPDATE `classrooms` SET `company_src` = '$interaction' WHERE `classrooms`.`company_src` = '$email'");
      $stmt->execute();

      $stmt = $conn->prepare("UPDATE `companies` SET `company_admin_email` = '$interaction' WHERE `companies`.`company_admin_email` = '$email'");
      $stmt->execute();

      $stmt = $conn->prepare("UPDATE `created_questions` SET `owner_teacher` = '$interaction' WHERE `created_questions`.`owner_teacher` = '$email'");
      $stmt->execute();

      $stmt = $conn->prepare("UPDATE `student_answers` SET `owner_student` = '$interaction' WHERE `owner_student` = '$email'");
      $stmt->execute();

      $stmt = $conn->prepare("UPDATE `teacher_student_connection` SET `teacher_email` = '$interaction' WHERE `teacher_student_connection`.`teacher_email` = '$email'");
      $stmt->execute();

      $stmt = $conn->prepare("UPDATE `teacher_student_connection` SET `student_email` = '$interaction' WHERE `teacher_student_connection`.`student_email` = '$email'");
      $stmt->execute();
    } else {
      // Prepare statement
      $stmt = $conn->prepare($sql);
    
      // execute the query
      $stmt->execute();
    }
    
  
    
  } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }
  $conn = null;

}
?>