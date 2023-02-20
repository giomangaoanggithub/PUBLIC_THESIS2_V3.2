<?php

include 'zerver_entrance.php';

session_start();

error_reporting(0);

$room_name = $_POST["room_name"];
$room_code = $_POST["room_code"];
$email = $_SESSION["curr_email_user"];

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO classrooms (room_name, room_code, owner_email)
  VALUES ('$room_name','$room_code', '$email')";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "ROOM CREATED";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>