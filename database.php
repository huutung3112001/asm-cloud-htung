<?php
$servername = "ec2-3-216-221-31.compute-1.amazonaws.com";
$usernameDB = "anmvhqifhrelof";
$password = "b1c5b9de4ada863333da4e0df19ad62adb8ece194da1d01fb74075ef19b6da04";
$db = "dr4viqhane5dt";
$uri = 'postgres://anmvhqifhrelof:b1c5b9de4ada863333da4e0df19ad62adb8ece194da1d01fb74075ef19b6da04@ec2-3-216-221-31.compute-1.amazonaws.com:5432/dr4viqhane5dt';
// Create connection
$conn = pg_connect($uri);

// Check connection
if (!$conn) {
  die('Error: Could not connect: ' . pg_last_error());
}
?>