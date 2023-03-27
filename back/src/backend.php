<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'vendor/autoload.php';

try{
$client = new MongoDB\Client(
    'mongodb://mongo1:27017,mongo2:27017/admin?replicaSet=rs0'
);
}
catch (MongoConnectionException $e) {
        die('Error connecting to MongoDB server');
        } catch (MongoException $e) {
        die('Error: ' . $e->getMessage());
        }

// Creates variables for connecting to each database table
$collection = $client->runnersDB->barcodes;
$users = $client->runnersDB->users;

$code = $_POST['hexcode'];
$firstName = $_POST['fname'];
$email = $_POST['email'];
$address = $_POST['address'];

$result = $collection->findOne(array('code' => $code));

/*
    Coupon information stored in a variable to be displayed to the user
    Delete the entry from the barcodes database if the code matches
    Store the user inputted data within the users database
*/
if ($result != null) 
{
    $coupon = $result['coupon'];
    $collection->findOneAndDelete(array('code' => $code));

    $insertUser = array(
        'first_name' => $firstName,
        'email' => $email,
        'address' => $address
    );

    $users->insert($insertUser);

    echo ("Coupon: ". $coupon);
    if ($coupon == "FREEBALL")
    {
        echo ("Congragulations! You are one of our lucky winners and have won a free ball"); 
    } 
    else 
    {
        echo ("Congragulations! You have got 10% off your next purchase of Runner's Crisps");
    }
}
?>
