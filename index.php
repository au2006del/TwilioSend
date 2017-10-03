<?php
// this line loads the library
// require('Twilio.php');
// use vendor\twilio\sdk\Twilio\Rest\Client;
error_reporting(E_ALL);
require_once "vendor/autoload.php";
use Twilio\Rest\Client;
echo "Hello";

$account_sid = 'ACa49266a70a3af56e47fcc14864334c3b' ;
$auth_token = 'c96173043eb7864c8eaa676ac4e597be';
$client = new Client($account_sid, $auth_token);




$client->messages->create(
'+19173490168',
array(
// 'To' => "+19173490168",
'From' => "+16283003802",
'Body' => "Hello from Anshul Upadhyay CS643 Fall 2017"
));
?>
