<?php

require_once('db.php');

session_start();

$user = $_SESSION['user'];
if ( !isset($_SESSION['logged-in']) || $_SESSION['logged-in'] !== true) {

    header('Location: login.php');

    exit;

}

?>


<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Staff Area</title>
</head>
<body>
<div style="margin-top:50px; color:#00F; margin-left:50px; font-size:18px;             position:absolute">Welcome<?php echo "$user";?></div>
</body>
</html>