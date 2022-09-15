<?php

session_start();

$user = $_SESSION['user'];
if ( !isset($_SESSION['logged-in']) || $_SESSION['logged-in'] !== true) {

    header('Location:loginSession.php');
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
    <div style="margin-top:50px; color:#00F; margin-left:50px; font-size:18px;             position:absolute">Welcome<?php echo "$user";?></div>
</div>
</body>
</html>