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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

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
        <label>Would you like to log out? Just hit button.</label>
            <button type="submit" name="submit" value="submit" >Logout</button>
    </form>

    <h2>Would you like to do some changes in Your database?</h2>

    <?php
    require_once ("db.php");

    $id = $_POST['UserID'];
    $firstname = $_POST['firstname'];
    $surname = $_POST['surname'];
    $username = $_POST['username'];
    $password = $_POST['password'];

            $query = "SELECT * FROM users ";
            $result = mysqli_query($conn, $query)
            or die ("couldn't run query");

            echo "<table border='1'>
            <tr>
                <th>UserID</th>
                <th>First Name</th>
                <th>Surname</th>
                <th>Username</th>
                <th>Password</th>
            </tr>";
            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                echo "<form action='members.php' method='post'>";
                echo "<tr>";
                echo "<td><input type='text' name='id' value='" . $row['UserID'] . "'></td>";
                echo "<td><input type='text' name='FirstName' value='" . $row['FirstName'] . "'></td>";
                echo "<td><input type='text' name='surname' value='" . $row['Surname'] . "'></td>";
                echo "<td><input type='text' name='Username' value='" . $row['Username'] . "'></td>";
                echo "<td><input type='text' name='Password' value='" . $row['Password'] . "'></td>";
                echo "<td><input type='submit' name='update' value='update'></td>";
                echo "<td><input type='submit' name='delete' value='delete'></td>";
                echo "</tr>";
                echo "</form>";
            }
            echo "</table>";

    mysqli_close($conn);
    ?>

<!--    <div class="input-group">-->
<!--        <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username with two button addons">-->
<!--        <button class="btn btn-outline-secondary" type="button">Button</button>-->
<!--        <button class="btn btn-outline-secondary" type="button">Button</button>-->
<!--    </div>-->

</div>
<!--Bootstrap-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>