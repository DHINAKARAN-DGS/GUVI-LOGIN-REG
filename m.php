<?php

require "vendor/autoload.php";
echo 1;

$url = "mongodb+srv://dhinakarandgs23:ThilakKumar2009@cluster0.gleofif.mongodb.net/?retryWrites=true&w=majority";

$mongoClient = new MongoClient($url);

$db = $mongoClient->selectDB("GUVI");

$collection = $db->selectCollection("Profile_data");
    
?>