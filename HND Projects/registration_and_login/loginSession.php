<?php
//Credentials below
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '1xCMat5k5Cb4';
$database = 'PHP_testing_project';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $database) or die('Could not connect: ' . mysqli_connect_error());

$query = "SELECT * FROM users WHERE Username = '$_POST[username]' AND Password = '$_POST[password]'";
$result = mysqli_query($conn, $query ) or die ("couldn't run query");
$count = mysqli_num_rows($result);

mysqli_close($conn);

if($count==1){
    session_start();        //start the session
    $_SESSION['logged-in'] = true;
//    $_SESSION['username'] = $_POST[username];  //set the username session variable
    $_SESSION['user'] = $_POST['username']; //set the username session variable
    $seconds = 5 + time();
    setcookie('loggedin', date("F jS - g:i a"), $seconds);
    header("location:members.php");
}else{
    echo 'Incorrect Username or Password';
}

?>
