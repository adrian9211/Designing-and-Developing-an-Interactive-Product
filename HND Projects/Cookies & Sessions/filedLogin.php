<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Wrong credentials</title>
</head>
<body>
<h1>You can't access admin section</h1>
<?php
$username = $_POST['username'];
$password = $_POST['password'];
if($username== "admin" && $password== "secret")
{
    session_start();
    $_SESSION['submit']= "admin";
    header("Location:http://webdev.edinburghcollege.ac.uk/~HNCWEBMR6/HND%20Projects/Cookies%20&%20Sessions/welcomeMessage.php");
}
else
{
    echo "Wrong credentials";
}
?>
</body>
</html>