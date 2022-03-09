<?php
$servername = "ec2-3-216-221-31.compute-1.amazonaws.com";
$usernameDB = "anmvhqifhrelof";
$password = "b1c5b9de4ada863333da4e0df19ad62adb8ece194da1d01fb74075ef19b6da04";
$db = "dr4viqhane5dt";
$uri = 'postgres://anmvhqifhrelof:b1c5b9de4ada863333da4e0df19ad62adb8ece194da1d01fb74075ef19b6da04@ec2-3-216-221-31.compute-1.amazonaws.com:5432/dr4viqhane5dt';
// Create connection
$conn = pg_connect($uri);

// $conn_string = "host=ec2-54-91-188-254.compute-1.amazonaws.com
// "
//         . " port=5432 dbname=dcok9uvp4rl5h8"
//         . " user=dlpyuedphkuxkv
// "
//         . " password=28bf6138b9f274a22697fb6f2d531c02f86b95e700ddb2e1bca20935d7ba57c8";
// $db = pg_connect($conn_string);
// ec2-54-91-188-254.compute-1.amazonaws.com

// Check connection
if (!$conn) {
  die('Error: Could not connect: ' . pg_last_error());
}
?>