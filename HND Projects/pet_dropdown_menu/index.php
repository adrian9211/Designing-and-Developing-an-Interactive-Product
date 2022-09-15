<!DOCTYPE HTML>
<html>
<head>
    <title>My Profile</title>
    <link rel="stylesheet" href="style/style.css" title="style" />
</head>
<body>
<div id="main">
    <nav id="nav">

    </nav>
    <div id="site_content">
        <h1>Pets table</h1>
        <div id="content">
            <h2>Dynamic dropdown menu</h2>
        </div>
        <form action="" method="post">
            <?php
            // Create connection
            require_once ("db.php"); // database credentials and connection

            $pet_query = "SELECT DISTINCT PetType FROM pet  "; // SQL query to select all pet records
            $pet_result = mysqli_query($conn, $pet_query)// run the query
            or die ("couldn't run query"); // if query fails, display error message

            echo "<select name='PetType'>"; // start the dropdown menu
            while ($pet_row = mysqli_fetch_array($pet_result)) {
                echo "<option value='" . $pet_row['PetType'] . "'>" . $pet_row['PetType'] . "</option>";
            }

            echo "</select>"; // close the dropdown menu
            ?>
            <label for="GO"></label>
            <br>
            <br>
            <input type="submit" name="go" value="submit" >
        </form>
    </div>

</div>
</body>
</html>
