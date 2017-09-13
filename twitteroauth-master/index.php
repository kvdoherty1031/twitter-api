<?php
//keys and tokens
$consumer_key = '4T7eFElkLYhosV5jL3I4eDZb9';
$consumer_secret = 'NYEnnzL2bwijUOaT5eIIefirZAU3jA6uCPJKnepcHAzmAMmII3';
$access_token = '569220369-YoFpqLvwYQLj5NeG2scE050zNCoKuTUJSskpgEYP';
$access_token_secret = 'iuhCxeBGqISI2b6nH4sKk96LA4DeM7lQCx8iVl2NWAs7Z';

//Include library
require "autoload.php";
use Abraham\TwitterOAuth\TwitterOAuth;

//Connect to API
$connection = new TwitterOAuth ($consumer_key, $consumer_secret, $access_token, $access_token_secret);
$content = $connection->get("account/verify_credentials");

//Create Tweets
$new_status = $connection->post("statuses/update", ["status" => "This Tweet is brought to you by the Twitter API :)"]);

//Get Tweets
$statuses = $connection->get("statuses/home_timeline", ["count" => 5, "exclude_replies" => true]);

print_r($statuses);