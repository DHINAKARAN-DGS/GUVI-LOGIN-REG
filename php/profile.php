<?php error_reporting(0);
header('Access-Control-Allow-Origin: *');
require '../vendor/autoload.php'; 



$mongo_db_url = "mongodb://localhost:27017";
$mongo_db_name = "GUVI";
$mongo_collection_name = "Profile_data";

$client = new MongoDB\Client($mongo_db_url);

// Checking the status of connection request
if (!$client) {
    echo "Connection to MongoDB Failed!";
} 

$collection = $client->$mongo_db_name->$mongo_collection_name;

$cursor = $collection->find(
   [
      'email' => "admin@example.com",
   ],
   
);

try{
$redis = new Redis();
$redis ->connect('localhost',6379);
echo 'c';
}catch(Exception $e){
   echo $e;
}

foreach ($cursor as $restaurant) {
   $redis->set('email',$restaurant['email']);
   echo $redis->get('email');
};

?>