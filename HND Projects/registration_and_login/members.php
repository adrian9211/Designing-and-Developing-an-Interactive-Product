<?php

session_start();

$user = $_SESSION['user'];
if ( !isset($_SESSION['logged-in']) || $_SESSION['logged-in'] !== true) {

    header('Location:login.php');
    exit;

}
?>

<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>Members</title>
    <link rel="stylesheet" href="style/style.css" title="style" />
</head>
<body>
<div id="main">
    <nav id="nav">

    </nav>
    <div>Welcome : <?php echo "$user";?></div>
    <br>
        <p>Great to see you again</p>
    <br>

    <form action="logout.php" method="post">
            <br>
            <button type="submit" name="submit" value="submit" >Logout</button>
        </form>

</div>
</body>
</html>