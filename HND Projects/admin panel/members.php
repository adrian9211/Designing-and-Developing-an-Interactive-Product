<?php

session_start();

$user = $_SESSION['user'];
if ( !isset($_SESSION['logged-in']) || $_SESSION['logged-in'] !== true) {

    header('Location:login.php');
    exit;

}

function registerUser() {
            echo "<form action='members.php' method='post'>";
            echo "<tr>";
            echo "<td><input type='text' class='form-control' name='hidden' placeholder='Do not need to be filled up  ' value='" . $row['UserID'] . "'></td>";
            echo "<td><input type='text' class='form-control' name='Username' value='" . $row['Username'] . "'></td>";
            echo "<td><input type='text' class='form-control' name='Password' value='" . $row['Password'] . "'></td>";
            echo "<td><input type='text' class='form-control' name='FirstName' value='" . $row['FirstName'] . "'></td>";
            echo "<td><input type='text' class='form-control' name='Surname' value='" . $row['Surname'] . "'></td>";
            echo "<td><input type='submit' name='insert' class='btn btn-primary' onclick='insertUser()' value='insert'></td>";
            echo "</tr>";
            echo "</form>";
        };

?>

<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>Members</title>
    <link rel="stylesheet" href="style/style.css" title="style" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
<div class="container">
    <div id="main" class="col-md-auto">
        <nav id="nav">

        </nav>
        <div>Welcome : <?php echo "$user";?></div>
        <br>
        <p>Great to see you again</p>
        <br>



        <form action="logout.php" method="post">
            <br>
            <label>Would you like to log out? Just hit button.</label>
            <button type="submit" name="submit" value="submit" class="btn btn-primary" >Logout</button>
        </form>

        <h2>Would you like to do some changes in Your database?</h2>

        <?php
        require_once ("db.php");
        if (isset($_POST['update']))
        {
            $updateQuerry = "UPDATE users SET FirstName = '$_POST[FirstName]', Surname = '$_POST[Surname]', Username = '$_POST[Username]', Password = '$_POST[Password]' WHERE UserID = '$_POST[hidden]'";
            mysqli_query($conn, $updateQuerry) or die ("couldn't run query");
//            echo "Record updated";
        }
        if (isset($_POST['delete']))
        {
            $deleteQuerry = "DELETE FROM users WHERE UserID = '$_POST[hidden]'";
            mysqli_query($conn, $deleteQuerry) or die ("couldn't run query");
//            echo 'User deleted';
        }

        if (isset($_POST['insert']))
        {
            $insertQuerry = "INSERT INTO users (FirstName, Surname, Username, Password) VALUES ('$_POST[FirstName]', '$_POST[Surname]', '$_POST[Username]', '$_POST[Password]')";
            mysqli_query($conn, $insertQuerry)
            or die ("couldn't run query");
//            echo "New User record inserted";
        }

        $result = mysqli_query($conn, "SELECT * FROM users ");

        echo "<table border='1'>
            <tr>
                <th>UserID</th>
                <th>Username</th>
                <th>Password</th>
                <th>First Name</th>
                <th>Surname</th>
            </tr>";

        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            echo "<form action='members.php' method='post'>";
            echo "<tr>";
            echo "<td><input type='text' class='form-control' name='hidden' value='" . $row['UserID'] . "'></td>";
            echo "<td><input type='text' class='form-control' name='Username' value='" . $row['Username'] . "'></td>";
            echo "<td><input type='text' class='form-control' name='Password' value='" . $row['Password'] . "'></td>";
            echo "<td><input type='text' class='form-control' name='FirstName' value='" . $row['FirstName'] . "'></td>";
            echo "<td><input type='text' class='form-control' name='Surname' value='" . $row['Surname'] . "'></td>";
            echo "<td><input type='submit' name='update' class='btn btn-success' onclick='update2()' value='update'></td>";
            echo "<td><input type='submit' name='delete' class='btn btn-danger'  onclick='deleted()' value='delete'></td>";
            echo "</tr>";
            echo "</form>";
        }
        registerUser();
        echo "</table>";
        //        registerUser(); // calling function to insert new user
        mysqli_close($conn);
        ?>


        <!--    <div class="input-group">-->
        <!--        <input type="text" class='form-control' placeholder="Recipient's username" aria-label="Recipient's username with two button addons">-->
        <!--        <button class="btn btn-outline-secondary" type="button">Button</button>-->
        <!--        <button class="btn btn-outline-secondary" type="button">Button</button>-->
        <!--    </div>-->

    </div>
</div>
<!--Bootstrap-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script>
    function insertUser() {
        alert("New user added");
    }

    function update2() {
        alert("User details updated!");
    }

    function deleted() {
        alert("User deleted!");
    }


</script>
</body>
</html>