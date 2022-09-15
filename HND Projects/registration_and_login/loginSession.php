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
    $_SESSION['user'] = $_POST['user']; //set the username session variable
    $seconds = 5 + time();
    setcookie('loggedin', date("F jS - g:i a"), $seconds);
    header("location:members.php");
}else{
    echo 'Incorrect Username or Password';
}
//$selected = mysqli_select_db("login", $conn);

//$username = $_POST['username'];
//$password = $_POST['password'];
//
//$username = stripslashes($username);
//$password = stripslashes($password);
//
//$query = "SELECT * FROM 'users' WHERE Username='$username' and Password='$password'";
//$result = mysqli_query($conn, $query);
//$count = mysqli_num_rows($result);
//
//if ($count == 1) {
//    echo "Login successful";
//} else {
//    echo "Login failed";
//}
//
//mysqli_close($conn);


//if($count==1){
//    $seconds = 5 + time();
//    setcookie(loggedin, date("F jS - g:i a"), $seconds);
//    header("location:login_success.php");
//}else{
//    echo 'Incorrect Username or Password';
//}
//session_start();
//
//if($_SERVER["REQUEST_METHOD"] == "POST") {
//    // username and password sent from form
//
//    $myusername = mysqli_real_escape_string($conn, $_POST['username']);
//    $mypassword = mysqli_real_escape_string($conn, $_POST['password']);
//
//    $sql = "SELECT * FROM 'users' WHERE Username = '$myusername' and Password = '$mypassword'";
//    $result = mysqli_query($conn,$sql);
//    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
//    $active = $row['active'];
//
//    $count = mysqli_num_rows($result);
//
//    // If result matched $myusername and $mypassword, table row must be 1 row
//
//    if($count == 1) {
//        $_SESSION['login_user'] = $myusername;
//
//        header("location: welcome.php");
//    }else {
//        $error = "Your Login Name or Password is invalid";
//    }
//}


?>
