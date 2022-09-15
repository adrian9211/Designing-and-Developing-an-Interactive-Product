<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Welcome</title>
</head>
<body>
<?php
session_start(); // Start the session.
echo $_SESSION['username'];
if(isset($_SESSION['username']))
{
    //Credentials below
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '1xCMat5k5Cb4';
    $database = 'PHP_testing_project';
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $database) or die('Could not connect: ' . mysqli_connect_error());

    $query = "SELECT Username, FirstName, Surname FROM 'users' WHERE Username = '$_SESSION[username]'";
    $result = mysqli_query($conn, $query ) or die ("couldn't run query");
    $count = mysqli_num_rows($result);

    mysqli_close($conn);
    echo "Welcome to your account";            // If the user is logged in, print a greeting.

}
else
{
    header("Location:http://webdev.edinburghcollege.ac.uk/~HNCWEBMR6/HND%20Projects/Cookies%20&%20Sessions/filedLogin.php");  // Redirecting to other page
}
?>

</body>
</html>