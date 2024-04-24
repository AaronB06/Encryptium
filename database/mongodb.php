<?php


require_once __DIR__ . '/../vendor/autoload.php';

use MongoDB\Client;
use MongoDB\Driver\ServerApi;

$uri = 'mongodb+srv://pemboservices:Gh7nHqkttxt3IYd6@cluster0.cwpi02h.mongodb.net/?retryWrites=true&w=majority&appName=Cluster0';
$apiVersion = new MongoDB\Driver\ServerApi(MongoDB\Driver\ServerApi::V1);
$client = new MongoDB\Client($uri, [], ['serverApi' => $apiVersion]);


$database = $client->selectDatabase('encryptium_db');

// Get the user collection
$requestsCollection = $database->selectCollection("requests_cllctn");
$requestsSecCollection = $database->selectCollection("requestsSec_cllctn");

$registrationCollection = $database->selectCollection("registration_cllctn");
$bonafideCollection = $database->selectCollection("bonafide_residents");
$nonbonafideCollection = $database->selectCollection("non-bonafide_residents");
$officialsCollection = $database->selectCollection("officials_cllctn");

$verificationCollection = $database->selectCollection("verification_cllctn");
$adminsCollection = $database->selectCollection("admins_cllctn");
$fileUploadsCollection = $database->selectCollection("File_Uploads");
$unencryptedFilesCollection = $database->selectCollection("Unencrypted_Files");
$usersCollection = $database->selectCollection("users_cllctn");
$audit_trails = $database->selectCollection("user_activity");
?>