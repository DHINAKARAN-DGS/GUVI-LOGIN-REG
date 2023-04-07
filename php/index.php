<?php
echo 'aaaa';
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
}else{
    echo'a';
}

// prepare and bind
$stmt = $conn->prepare("INSERT INTO user_data (email, password) VALUES (?, ?)");
$stmt->bind_param("ss", $emailID, $password);

$emailID = $_POST['emailID'];
$password = $_POST['pwd'];
$stmt->execute();

echo "Registered Successfully" ;
?>