<?php
//keys and tokens
$consumer_key = 'KEY';
$consumer_secret = 'SECRET';
$access_token = 'TOKEN';
$access_token_secret = 'TOKEN_SECRET';

//Include library
require "autoload.php";
use Abraham\TwitterOAuth\TwitterOAuth;

//Connect to API
$connection = new TwitterOAuth ($consumer_key, $consumer_secret, $access_token, $access_token_secret);
$content = $connection->get("account/verify_credentials");

//Create Tweets
$new_status = $connection->post("statuses/update", ["status" => "This Tweet is brought to you by the Twitter API :)"]);

//Get Tweets
$statuses = $connection->get("statuses/home_timeline", ["count" => 100, "exclude_replies" => true]);

print_r($statuses);