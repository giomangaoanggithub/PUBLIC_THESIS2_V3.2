<?php

include 'zerver_entrance.php';

session_start();

error_reporting(0);

$email_input = $_SESSION["curr_email_user"];

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT user_role FROM user_accounts WHERE email='$email_input'");
    $stmt->execute();
  
    // set the resulting array to associative
    $result = $stmt->FetchAll(PDO::FETCH_ASSOC);

    $php_array_to_javascript_array = '["'.$result[0]["user_role"].'"';

    for($i = 1; $i < count($result);$i++){
      $php_array_to_javascript_array .= ', "'.$result[$i]["user_role"].'"';
    }

    $php_array_to_javascript_array = $php_array_to_javascript_array.']';

    echo $php_array_to_javascript_array;
  } catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
  }
  $conn = null;
?>