<?php
$servername = "ec2-35-169-188-58.compute-1.amazonaws.com";
$usernameDB = "nfvnrnqjenqluo";
$password = "b36955c25c0755800f98cb12a6c948d45793a0879c4d8e9746e60bb508a7bf14";
$db = "d9me5d5brvng9j";
$uri = 'postgres://nfvnrnqjenqluo:b36955c25c0755800f98cb12a6c948d45793a0879c4d8e9746e60bb508a7bf14@ec2-35-169-188-58.compute-1.amazonaws.com:5432/d9me5d5brvng9j';
// Create connection
$conn = pg_connect($uri);

// Check connection
if (!$conn) {
  die('Error: Could not connect: ' . pg_last_error());
}
?>