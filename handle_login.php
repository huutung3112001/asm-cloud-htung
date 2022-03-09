<?php
session_start();
include ('database.php');
$username = $_POST['username'];
$password = $_POST['password']; 
$pg = "SELECT * FROM user WHERE name = '".$username."' AND password ='".$password."'";


$result = pg_query($conn, $pg);
// var_dump($result);
//die();
$count = pg_num_rows($result);


$row = pg_fetch_assoc($result);// w3

if($count == 1){

    $_SESSION['login_user'] = $row['name'];
    header("location: index.php");
}
else{
    echo '<script language="javascript">alert("Password or username incorrect !!! try again!!"); window.location="login.php";</script>';
}
?>