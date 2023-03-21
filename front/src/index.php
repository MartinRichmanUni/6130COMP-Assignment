<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'vendor/autoload.php';

echo "test";
try{
$client = new MongoDB\Client(
    'mongodb://mongo1:27017,mongo2:27017,mongo3:27017/admin?replicaSet=rs0'
);
}
catch (MongoConnectionException $e) {
        die('Error connecting to MongoDB server');
        } catch (MongoException $e) {
        die('Error: ' . $e->getMessage());
        }

$collection = $client->week4sweetshoptest->sweets;

$cursor = $collection->find();
echo "hello ";
foreach ($cursor as $document) {
    echo $document['_id'] . " " . $document['item'] . "<br>";
}
?>
