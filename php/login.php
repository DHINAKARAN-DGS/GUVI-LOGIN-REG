<?php error_reporting(0);
header('Access-Control-Allow-Origin: *');
require '../vendor/autoload.php'; 
$data = [];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "GUVI";

// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$email = $_POST['emailID'];
$password = $_POST['pwd'];

$stmt = $conn->prepare('SELECT 1 FROM user_data WHERE email=? AND password=?');
$stmt->bind_param('ss', $email,$password);
$stmt->execute(); // Get the first row from result and cast to boolean
$exists = (bool) $stmt->get_result()->fetch_row();
if ($exists) {
  echo "LOGIN";
} else {
    echo "REGISTER";
}

?>