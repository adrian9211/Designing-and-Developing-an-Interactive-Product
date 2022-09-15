<?php
session_start();

//Credentials below
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '1xCMat5k5Cb4';
$database = 'PHP_testing_project';
@mysqli_connect($dbhost, $dbuser, $dbpass, $database) or die('Could not connect: ' . mysqli_connect_error());
@mysqli_select_db($database) or die("error");






