<?php error_reporting(0);
header('Access-Control-Allow-Origin: *');
require '../vendor/autoload.php'; 

$url = "mongodb://localhost:27017";
$db = "GUVI";
$collection_name = "Profile_data";

$username = $_POST['username'];
$dob = $_POST['dob'];
$contact = $_POST['contact'];
$email = $_POST['email'];


$client = new MongoDB\Client($url);

$collection = $client->$db->$collection_name;

try {
    $updateResult = $collection->updateOne(
        [ 'email' => $email ],
        [ '$set' => [ 'username' => $username, 'dob' => $dob, 'contact' => $contact, 'email' => $email]]
    );
    echo "Inserted";
} catch (Exception $e) {
    echo "Error inserting document: " . $e->getMessage();
}
    


?>