<?php

include 'zerver_entrance.php';

error_reporting(0);

$email_input = $_POST["email"];
$password_input = md5($_POST["password"]);

$_SESSION["curr_email_user"] = $email_input;

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT email FROM user_accounts WHERE email='$email_input' AND password='$password_input'");
    $stmt->execute();
  
    // set the resulting array to associative
    $result = $stmt->FetchAll(PDO::FETCH_ASSOC);

    $php_array_to_javascript_array = '["'.$result[0]["email"].'"';

    for($i = 1; $i < count($result);$i++){
      $php_array_to_javascript_array .= ', "'.$result[$i]["email"].'"';
    }

    $php_array_to_javascript_array = $php_array_to_javascript_array.']';

    echo $php_array_to_javascript_array;
  } catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
  }
  $conn = null;
?>