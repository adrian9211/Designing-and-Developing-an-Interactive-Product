<html>
<body>
<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '1xCMat5k5Cb4';
$database = 'PHP_testing_project';
// Create connection
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $database)
or die('Could not connect: ' . mysqli_connect_error());

///run SQL query
$query = "SELECT * FROM pet WHERE PetType = 'Dragon'";
$result = mysqli_query($connection, $query)
or die ("couldn't run query");

//start of HTML table
echo "<h3>Dragons</h3>";
echo "<table cellspacing = '15'>";
echo "<tr><td colspan='3'><hr></td></tr>";

//while loop to extract result set
while($row = mysqli_fetch_assoc($result)) {
    echo  $row["PetId"]. " | " . $row["PetType"]. " | " . $row["PetDescription"]. " | " . $row["Price"]. "<br>";
}
//end of HTML table
echo "</table>";
?>


</body>
</html>
