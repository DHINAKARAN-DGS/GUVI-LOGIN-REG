<?php error_reporting(0);
header('Access-Control-Allow-Origin: *');
require 'vendor/autoload.php';
$data = [];
$servername = "localhost";
$username = "id20571861_dhinakaran";
$password = "YgX&G=1#Ymp(jTCu";
$dbname = "id20571861_guvi_registration_database";

// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$email = $_POST['emailID'];
$password = $_POST['pwd'];

$stmt = $conn->prepare('SELECT 1 FROM user_data WHERE email=?');
$stmt->bind_param('s', $email);
$stmt->execute(); // Get the first row from result and cast to boolean
$exists = (bool) $stmt->get_result()->fetch_row();
if ($exists) {
  echo "User already exists";
} else {
    echo "New";
    // prepare and bind
    $sttmnt = $conn->prepare("INSERT INTO user_data (email, password) VALUES (?, ?)");
    $sttmnt->bind_param("ss", $email, $password);
    $sttmnt->execute();

    $db_url = 'mongodb+srv://dhinakarandgs23:ThilakKumar2009@cluster0.gleofif.mongodb.net/?retryWrites=true&w=majority';
    $client = new MongoDB\Client($db_url);

    // Checking the status of connection request
    if (!$client) {
      echo "Unable to connect to Database";
    }
    // Selecting the database
    $db_name = $client->GUVI;
    if (!$db_name) {
      echo "guviInternship";
    }else{
      echo "error";
    }

    
}


?>