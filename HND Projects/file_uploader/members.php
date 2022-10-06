<?php
require_once ("db.php");

session_start();
$user = $_SESSION['user'];
if ( !isset($_SESSION['logged-in']) || $_SESSION['logged-in'] !== true) {

    header('Location:login.php');
    exit;

}

$userPrivilege = "SELECT Privileges FROM users WHERE Username = '$user'";
$userPrivilegeResult= mysqli_query($conn, $userPrivilege) or die ("couldn't run query");
$userPrivilegeResult2 = $userPrivilegeResult->fetch_assoc()['Privileges'];



function registerUser() {
            echo "<form action='members.php' method='post'>";
            echo "<tr>";
            echo "<td><input type='text' class='form-control' name='hidden' placeholder='Do not need to be filled up  ' value='" . $row['UserID'] . "'></td>";
            echo "<td><input type='text' class='form-control' name='Username' value='" . $row['Username'] . "'></td>";
            echo "<td><input type='text' class='form-control' name='Password' value='" . $row['Password'] . "'></td>";
            echo "<td><input type='text' class='form-control' name='FirstName' value='" . $row['FirstName'] . "'></td>";
            echo "<td><input type='text' class='form-control' name='Surname' value='" . $row['Surname'] . "'></td>";
            echo "<td><input type='text' class='form-control' name='dob' value='" . $row['DOB'] . "'></td>";
            echo "<td><input type='submit' name='insert' class='btn btn-primary' onclick='insertUser()' value='insert'></td>";
            echo "</tr>";
            echo "</form>";
        };

function addMovie() {
    echo "<form action='members.php' method='post'>";
    echo "<tr>";
    echo "<td><input type='text' class='form-control' name='hidden' placeholder='Do not need to be filled up  ' value='" . $row['MovieID'] . "'></td>";
    echo "<td><input type='text' class='form-control' name='Title' value='" . $row['Title'] . "'></td>";
    echo "<td><input type='text' class='form-control' name='Description' value='" . $row['Description'] . "'></td>";
    echo "<td><input type='value' class='form-control' name='Category' value='" . $row['Category'] . "'></td>";
    echo "<td><input type='text' class='form-control' name='Type' value='" . $row['Type'] . "'></td>";
    echo "<td><input type='text' class='form-control' name='Agerestricted' value='" . $row['Age restricted'] . "'></td>";
    echo "<td><input type='time' class='form-control' name='Display1' value='" . $row['Display time 1'] . "'></td>";
    echo "<td><input type='time' class='form-control' name='Display2' value='" . $row['Display time 2'] . "'></td>";
    echo "<td><input type='time' class='form-control' name='Display3' value='" . $row['Display time 3'] . "'></td>";
    echo "<td><input type='text' class='form-control' name='file_name' value='" . $row['file_name'] . "'></td>";
    echo "<td><input type='text' class='form-control' name='uploaded_on' value='" . $row['uploaded_on'] . "'></td>";
    echo "<td><input type='text' class='form-control' name='status' value='" . $row['status'] . "'></td>";
    echo "<td><input type='file' name='file'></td>";
    echo "<td><input type='submit' name='insert' class='btn btn-primary'  onclick='insertMovie()' value='insert'></td>";
    echo "</tr>";
    echo "</form>";
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
<div class="container">
    <div id="main" class="col-md-auto">
        <nav id="nav">

        </nav>
        <div>Welcome : <?php
            echo "$user";
            echo "<br>";

            echo "<br>";
            echo "Your privileges are: " .$userPrivilegeResult2;

            echo "<br>";
            echo "Legend: A = admin, C = customer";
        ?></div>
        <br>
        <p>Great to see you again</p>
        <br>


        <form action="logout.php" method="post">
            <br>
            <label>Would you like to log out? Just hit button.</label>
            <button type="submit" name="submit" value="submit" class="btn btn-primary" >Logout</button>
        </form>

        <?php
        if ($userPrivilegeResult2 == "A") {

            echo "<h2>Add movie</h2>";
            $statusMsg = '';
            $targetDir = "uploads/";
            $fileName = basename($_FILES["file"]["name"]);
            $targetFilePath = $targetDir . $fileName;
            $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

            if(isset($_POST["update"]) ){
                // Allow certain file formats
                $allowTypes = array('jpg','png','jpeg','gif','JPG','PNG','JPEG','GIF');
                if(in_array($fileType, $allowTypes)){
                    // Upload file to server
                    if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
                        // Insert image file name into database
                        $update = $conn->query("UPDATE movies SET Title = '$_POST[Title]',Description = '$_POST[Description]', Category = '$_POST[Category]', Type = '$_POST[Type]', `Age restricted` = '$_POST[Agerestricted]' ,`Display time 1` = '$_POST[Display1]',`Display time 2` = '$_POST[Display2]',`Display time 3` = '$_POST[Display3]', file_name = '".$fileName."' WHERE MovieID = ".$_POST['hidden']);
                        if($update){
                            $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
                        }else{
                            $statusMsg = "File upload failed, please try again.";
                        }
                    }else{
                        $statusMsg = "Sorry, there was an error uploading your file.";
                    }
                }else{
                    $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
                }
            }else{
                $statusMsg = 'Please select a file to upload.';
            }


            if (isset($_POST['delete'])) {
                $deleteQuerry = "DELETE FROM movies WHERE MovieID = '$_POST[hidden]'";
                mysqli_query($conn, $deleteQuerry) or die ("couldn't run query");
            echo 'Movie deleted';
            }




            if(isset($_POST["insert"]) && !empty($_FILES["file"]["name"])){
                // Allow certain file formats
                $allowTypes = array('jpg','png','jpeg','gif','JPG','PNG','JPEG','GIF');
                if(in_array($fileType, $allowTypes)){
                    // Upload file to server
                    if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
                        // Insert image file name into database
                        $insert = $conn->query("INSERT into  movies (Title, Description, Category, Type, `Age restricted`, `Display time 1`, `Display time 2`, `Display time 3`,file_name, uploaded_on) VALUES ('$_POST[Title]','$_POST[Description]', '$_POST[Category]', '$_POST[Type]', '$_POST[Agerestricted]', '$_POST[Display1]', '$_POST[Display2]', '$_POST[Display3]','".$fileName."', NOW())");
                        if($insert){
                            $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
                        }else{
                            $statusMsg = "File upload failed, please try again.";
                        }
                    }else{
                        $statusMsg = "Sorry, there was an error uploading your file.";
                    }
                }else{
                    $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
                }
            }else{
                $statusMsg = 'Please select a file to upload.';
            }

// Display status message
            echo $statusMsg;


            $result = mysqli_query($conn, "SELECT * FROM movies");

            echo "<table border='1'>
            <tr>
                <th>MovieID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Category</th>
                <th>Type</th>
                <th>Age restricted</th>
                <th>Display time 1</th>
                <th>Display time 2</th>
                <th>Display time 3</th>
                <th>File name</th>  
                <th>Uploaded on</th>
                <th>Status</th>     
                <td>IMG</td>
            </tr>";

            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                echo "<tr>";
                echo "<form action='members.php' method='post' enctype='multipart/form-data'>";
                echo "<td><input type='text' class='form-control' name='hidden' value='" . $row['MovieID'] . "'></td>";
                echo "<td><input type='text' class='form-control' name='Title' value='" . $row['Title'] . "'></td>";
                echo "<td><input type='text' class='form-control' name='Description' value='" . $row['Description'] . "'></td>";
                echo "<td><input type='text' class='form-control' name='Category' value='" . $row['Category'] . "'></td>";
                echo "<td><input type='text' class='form-control' name='Type' value='" . $row['Type'] . "'></td>";
                echo "<td><input type='text' class='form-control' name='Agerestricted' value='" . $row['Age restricted'] . "'></td>";
                echo "<td><input type='time' class='form-control' name='Display1' value='" . $row['Display time 1'] . "'></td>";
                echo "<td><input type='time' class='form-control' name='Display2' value='" . $row['Display time 2'] . "'></td>";
                echo "<td><input type='time' class='form-control' name='Display3' value='" . $row['Display time 3'] . "'></td>";
                echo "<td><input type='text' class='form-control' name='file_name' value='" . $row['file_name'] . "'></td>";
                echo "<td><input type='text' class='form-control' name='uploaded_on' value='" . $row['uploaded_on'] . "'></td>";
                echo "<td><input type='text' class='form-control' name='status' value='" . $row['status'] . "'></td>";
                $imageURL = 'uploads/'.$row["file_name"];
                echo "<td><img src='$imageURL' alt='' class='card-img-top' '></td>";
                echo "<td><input type='file' name='file'></td>";
                echo "<td><input type='submit' name='update' class='btn btn-success' onclick='updateMovie()' value='update'></td>";
                echo "<td><input type='submit' name='delete' class='btn btn-danger'  onclick='deleted()' value='delete'></td>";
                echo "</tr>";
                echo "</form> 
                </div>";
            }
            addMovie(); // calling function to insert new user
            echo "</table>";
        }


        else {
            echo "You are not an admin";
        }
        ?>



        <h2>Would you like to do some changes in Your database?</h2>

        <?php

        if (isset($_POST['update']))
        {
            $updateQuerry = "UPDATE users SET FirstName = '$_POST[FirstName]', Surname = '$_POST[Surname]', Username = '$_POST[Username]', Password = '$_POST[Password]' ,DOB = '$_POST[dob]',Privileges = '$_POST[Privileges]' WHERE UserID = '$_POST[hidden]'";
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
            $insertQuerry = "INSERT INTO users (FirstName, Surname, Username, Password, DOB) VALUES ('$_POST[FirstName]', '$_POST[Surname]', '$_POST[Username]', '$_POST[Password]', '$_POST[dob]')";
            mysqli_query($conn, $insertQuerry)
            or die ("couldn't run query");
//            echo "New User record inserted";
        }
        $result = mysqli_query($conn, "SELECT * FROM users WHERE Username = '$user'");
        $resultAdmin = mysqli_query($conn, "SELECT * FROM users");

        //        display all data depends on User Privileges
        if ($userPrivilegeResult2 == "A") {


                echo "<table border='1'>
            <tr>
                <th>UserID</th>
                <th>Username</th>
                <th>Password</th>
                <th>First Name</th>
                <th>Surname</th>
                <th>Date of birth</th>
                <th>Privileges</th>
            </tr>";

                while ($row = mysqli_fetch_array($resultAdmin, MYSQLI_ASSOC)) {
                    echo "<form action='members.php' method='post'>";
                    echo "<tr>";
                    echo "<td><input type='text' class='form-control' name='hidden' value='" . $row['UserID'] . "'></td>";
                    echo "<td><input type='text' class='form-control' name='Username' value='" . $row['Username'] . "'></td>";
                    echo "<td><input type='text' class='form-control' name='Password' value='" . $row['Password'] . "'></td>";
                    echo "<td><input type='text' class='form-control' name='FirstName' value='" . $row['FirstName'] . "'></td>";
                    echo "<td><input type='text' class='form-control' name='Surname' value='" . $row['Surname'] . "'></td>";
                    echo "<td><input type='text' class='form-control' name='dob' value='" . $row['DOB'] . "'></td>";
                    echo "<td><input type='text' class='form-control' name='Privileges' value='" . $row['Privileges'] . "'></td>";
                    echo "<td><input type='submit' name='update' class='btn btn-success' onclick='update2()' value='update'></td>";
                    echo "<td><input type='submit' name='delete' class='btn btn-danger'  onclick='deleted()' value='delete'></td>";
                    echo "</tr>";
                    echo "</form>";
                }
                registerUser(); // calling function to insert new user
                echo "</table>";


        }
        else {

                echo "<table border='1'>
            <tr>
                <th>UserID</th>
                <th>Username</th>
                <th>Password</th>
                <th>First Name</th>
                <th>Surname</th>
                <th>Date of birth</th>
            </tr>";

                while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                    echo "<form action='members.php' method='post'>";
                    echo "<tr>";
                    echo "<td><input type='text' class='form-control' name='hidden' value='" . $row['UserID'] . "'></td>";
                    echo "<td><input type='text' class='form-control' name='Username' value='" . $row['Username'] . "'></td>";
                    echo "<td><input type='text' class='form-control' name='Password' value='" . $row['Password'] . "'></td>";
                    echo "<td><input type='text' class='form-control' name='FirstName' value='" . $row['FirstName'] . "'></td>";
                    echo "<td><input type='text' class='form-control' name='Surname' value='" . $row['Surname'] . "'></td>";
                    echo "<td><input type='text' class='form-control' name='dob' value='" . $row['DOB'] . "'></td>";
                    echo "<td><input type='submit' name='update' class='btn btn-success' onclick='update2()' value='update'></td>";
                    echo "<td><input type='submit' name='delete' class='btn btn-danger'  onclick='deleted()' value='delete'></td>";
                    echo "</tr>";
                    echo "</form>";
                }
                echo "</table>";

        }
        //        display all data depends on User Privileges


        echo "<br>";
        echo "<br>";
        $dobQuerry = "SELECT DOB FROM users WHERE Username = '$user'";
        $dobResult = mysqli_query($conn, $dobQuerry) or die ("couldn't run query");
        $dobResult2 = $dobResult->fetch_assoc()['DOB'];
        echo "Your date of birth is:" .$dobResult2;
//$dobResult2 = "1990-01-03";
        list($year, $month, $day) = explode('-' , $dobResult2);
        $birthDate = mktime(0, 0, 0, $month, $day, $year);
        echo "<br>";
//        echo "Your age is: " .(date('Y') - date('Y', $birthDate));
        echo "total ammount of seconds that have passed between UNIX epoch and DOB: " .$birthDate;
        echo "<br>";
        echo "total ammount of seconds that have passed between UNIX epoch and today: " .time();
        echo "<br>";
        $timeDifference = time() - $birthDate;
        echo "total ammount of seconds that have passed between DOB and today: " .$timeDifference;
        echo "<br>";
        $age = floor($timeDifference / 31556926); // 31556926 is the number of seconds in a year
        echo "Your age is: " .$age;
        if ($age >= 18)
        {
            echo "<br>";
            echo "<b>You are an adult member</b>";

        }
        else
        {
            echo "<br>";
            echo "<b>You are an junior member</b>";

        }

        mysqli_close($conn);

        ?>
    </div>
</div>
<!--Bootstrap-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script>
    function insertUser() {
        alert("New user added");
    }

    function insertMovie() {
        alert("New movie added");
    }
    function update2() {
        alert("User details updated!");
    }

    function deleted() {
        alert("User deleted!");
    }

    function updateMovie() {
        alert("Movie details updated!");
    }



</script>

<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
</body>
</html>