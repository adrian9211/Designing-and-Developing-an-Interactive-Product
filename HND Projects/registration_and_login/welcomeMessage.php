<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Welcome</title>
</head>
<body>
<?php
session_start(); // Start the session.
if(isset($_SESSION['user']))
{
    echo "Welcome to your account";            // If the user is logged in, print a greeting.
}
else
{
    header("Location:http://webdev.edinburghcollege.ac.uk/~HNCWEBMR6/HND%20Projects/Cookies%20&%20Sessions/filedLogin.php");  // Redirecting to other page
}
?>

</body>
</html>