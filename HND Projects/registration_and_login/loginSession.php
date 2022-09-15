<?php
//Credentials below
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '1xCMat5k5Cb4';
$database = 'PHP_testing_project';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $database) or die('Could not connect: ' . mysqli_connect_error());

//require_once 'db.php';

$query = "SELECT * FROM users WHERE Username = '$_POST[username]' AND Password = '$_POST[password]'";
$result = mysqli_query($conn, $query ) or die ("couldn't run query");
$count = mysqli_num_rows($result);

mysqli_close($conn);

if($count==1){
    session_start();
    $_SESSION['user'] = $_POST['user'];
    $seconds = 5 + time();
    setcookie('loggedin', date("F jS - g:i a"), $seconds);
//    header("location:welcomeMessage.php");
    header('Location:members.php');
}else{
    echo 'Incorrect Username or Password';
}

