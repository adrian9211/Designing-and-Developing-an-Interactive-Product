<?php
// include connection credentials from file
//include 'db.php';
//Credentials below
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '1xCMat5k5Cb4';
$database = 'PHP_testing_project';


$username = $_POST['username']; //username from HTML form
//Create connection
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $database);
$checkUser = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");
if (mysqli_num_rows($checkUser) > 0) {
    echo "Username already exists - Please Login or choose another username";
} else {
    $sql = mysqli_prepare($conn, "INSERT INTO `users` (Username, Password, FirstName, Surname) VALUES ('$_POST[username]', '$_POST[password]', '$_POST[firstname]', '$_POST[surname]')");
    if($sql !== FALSE){
        if(mysqli_stmt_execute($sql)){
            echo "New record created successfully";
        } else {
            echo mysqli_stmt_error($sql);
        }
    } else{
        echo mysqli_error($conn);
    }
}
?>
