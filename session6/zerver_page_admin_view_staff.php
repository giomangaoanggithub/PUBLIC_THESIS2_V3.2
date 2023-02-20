<?php

include 'zerver_entrance.php';

session_start();

error_reporting(0);

$view_staff = $_POST["staff"];

$script = $_POST["script"];

$view_staff = str_replace("staff_", "", $view_staff);

$email = $_SESSION["curr_email_user"];

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT a_t_c_id, username, email, contact_number, teacher_email FROM `admin_teacher_conn` INNER JOIN `user_accounts` ON admin_teacher_conn.teacher_email = user_accounts.email WHERE a_t_c_id = '$view_staff' AND admin_email = '$email'");
    $stmt->execute();
  
    // set the resulting array to associative
    $result = $stmt->FetchAll(PDO::FETCH_ASSOC);

    $_SESSION["admin_view_details"] = $result[0]['a_t_c_id'].', '.$result[0]['username'].', '.$result[0]['email'].', '.$result[0]['contact_number'];

    $_SESSION["current_view_person"] = $result[0]['teacher_email'];

    $_SESSION["current_view"] = $script;

  } catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
  }
  $conn = null;

?>