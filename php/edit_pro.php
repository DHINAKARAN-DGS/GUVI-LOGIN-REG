<?php error_reporting(0);
header('Access-Control-Allow-Origin: *');
require '../vendor/autoload.php'; 

$username = $_POST['username'];
$dob = $_POST['dob'];
$contact = $_POST['contact'];
$email = $_POST['email'];

echo $dob;

// $url = "mongodb://localhost:27017";
// $db = "GUVI";
// $collection = "Profile_data";

// $client = new MongoDB\Client($url);


// $updateResult = $collection->updateOne(
//     [ 'email' => $email ],
//     [ '$set' => [ 'username' => $username, 'dob' => $dob, 'contact' => $contact, 'email' => $email ]]
//  );


// echo "updated";

?>