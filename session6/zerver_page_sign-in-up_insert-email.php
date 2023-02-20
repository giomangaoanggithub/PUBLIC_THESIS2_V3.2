<?php

include 'zerver_entrance.php';

session_start();

error_reporting(0);

$email_input = $_POST["email"];
$username_input = $_POST["username"];
$password_input = md5($_POST["password"]);
$contact_num_input = $_POST["contact_number"];
$user_role_input = $_POST["user_role"];

$_SESSION["curr_email_user"] = $email_input;

if($user_role_input == 'teacher'){
    $user_role_input = 1;
}
else if($user_role_input == 'student'){
    $user_role_input = 0;
}
else if($user_role_input == 'administrator'){
    $user_role_input = 2;
}

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO user_accounts (email, username, password, contact_number, user_role, profile_pic_address)
  VALUES ('$email_input', '$username_input', '$password_input', '$contact_num_input', '$user_role_input', 'profiles/$email_input')";
  // use exec() because no results are returned
  $conn->exec($sql);
  if($user_role_input == 1){
    echo "teacher";
  }
  else if($user_role_input == 0){
    echo "student";
  }
  else if($user_role_input == 2){
    echo "administrator";
  }
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>