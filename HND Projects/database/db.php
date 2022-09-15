<?php
$host = "localhost";
$username = "HNCWEBMR6";
$password = "HpDPLzWDuw";
$database = "HNCWEBMR6";

// Create connection
$connection = mysqli_connect($host, $username, $password, $database)
or die('Could not connect: ' . mysqli_connect_error());


echo "<h1>Data</h1>";
$query = "SELECT * FROM admins";
$result = mysqli_query($connection, $query);


if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " - Name: " . $row["username"]. " " . $row["password"]. "<br>";
    }
} else {
    echo "0 results";
}
//echo "<table>"; // start a table tag in the HTML
//
//while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results
//    echo "<tr><td>" . htmlspecialchars($row['name']) . "</td><td>" . htmlspecialchars($row['age']) . "</td></tr>";  //$row['index'] the index here is a field name
//}
//
//echo "</table>"; //Close the table in HTML

//mysqli_close(); //Make sure to close out the database connection

?>