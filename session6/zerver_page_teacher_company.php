<?php

include 'zerver_entrance.php';

session_start();

error_reporting(0);

$company = $_POST["company"];
$code = $_POST["code"];

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT * FROM `companies` WHERE company_name = '$company' AND company_code = '$code'");
    $stmt->execute();
  
    // set the resulting array to associative
    $result = $stmt->FetchAll(PDO::FETCH_ASSOC);

    echo '["'.$result[0]["company_name"].'", "'.$result[0]["company_code"].'", "'.$result[0]["company_admin_email"].'"]';

  } catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
  }
  $conn = null;

?>