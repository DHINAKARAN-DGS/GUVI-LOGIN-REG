<?php error_reporting(0);
header('Access-Control-Allow-Origin: *');
require '../vendor/autoload.php'; 
$data = [];
$servername = "localhost";
$usernamed = "root";
$password = "";
$dbname = "GUVI";

// Create connection

$conn = new mysqli($servername, $usernamed, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$email = $_POST['emailID'];
$password = $_POST['pwd'];
$username = $_POST['name'];
$dob=$_POST['dob'];
$contact=$_POST['contact'];


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

$url = "mongodb://localhost:27017";
$db = "GUVI";
$collection_name = "Profile_data";

$client = new MongoDB\Client($url);

// Checking the status of connection request
if (!$client) {
    echo "Connection to MongoDB Failed!";
} else{
    echo 'c';
}

$collection = $client->$db->$collection_name;

try {
    $insertOneResult = $collection->insertOne([
        'username'=>$username,
        'dob' => $dob,
        'contact' => $contact,
        'email' => $email,
    ]);
    echo "Inserted " . $insertOneResult->getInsertedCount() . " document(s)";
} catch (Exception $e) {
    echo "Error inserting document: " . $e->getMessage();
}
    
}


?>