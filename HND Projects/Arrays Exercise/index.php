<?php

//Upload Image

if(isset($_POST['cover_up']))
{

    $imgFile = $_FILES['coverimg']['name'];
    $tmp_dir = $_FILES['coverimg']['tmp_name'];
    $imgSize = $_FILES['coverimg']['size'];

    if(!empty($imgFile))
    {

        $upload_dir = 'image/'; // upload directory

        $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension

// valid image extensions
        $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions

// rename uploading image
        $coverpic = rand(1000,1000000).".".$imgExt;

// allow valid image file formats
        if(in_array($imgExt, $valid_extensions))
        {
// Check file size '5MB'
            if($imgSize < 5000000)
            {
                move_uploaded_file($tmp_dir,$upload_dir.$coverpic);
                echo "uploading Done";
            }
            else{
                $errMSG = "Sorry, your file is too large.";
            }
        }
        else{
            $errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        }
    }
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Arrays</title>
</head>
<body>



<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Task 9 Arrays</th>

    </tr>
    </thead>
    <tbody>
    <tr>
        <th scope="row">1</th>
        <td>
            <p>Step 1: Initialise a numeric array and assign values (the information about the car). Note: some values are strings and some are numeric.
                <br>
                Therefore, strings will require to be placed inside ‘ ’ whereas numeric values are not. In this instance the image is simply the file name and extension.
                <br>
                Save your work as carArray.php
                <br>
                Step 2:  Create a directory (folder) on the server to store images (in example below, folder is called images). Upload an image file to this folder.
                <br>
                The image file must have the same name as it is called in your array. Note: your carArray.php file should be relative to this folder and not inside the images folder.
                <br>
                Step 3: add the HTML and PHP code in the image below to your carArray.php file.
                <br>
                Make appropriate changes to the code so that it uses the indexed array positions to populate the carArray.php file content when run on the server.
                <br>

            </p>

            <form action="carArray.php" method="post">
                <br>
                <button type="submit" name="submit" value="submit" >Generate random number</button>
            </form>


            <br>
            <hr>
            <h2>Upload your own vehicle</h2>
            <form action="upload.php" method="post">
                <label>
                    Car Make:
                    <input type="text" name="carMake">
                </label>
                <br>
                <label>
                    Car Model:
                    <input type="text" name="carModel">
                </label>
                <br>
                <label>
                    Production Year:
                    <input type="number" name="year">
                </label>
                <br>
                <label>
                    Engine Size:
                    <input type="number" name="engine">
                </label>

                <br>
                <p><input type="file" name="coverimg" required="required" /></p>
                <p><input type="submit" name="cover_up" style="background-color: rgb(255, 102, 0);" class="btn btn-warning" value="Upload"/></p>
            </form>


<!--            <form method="post" enctype="multipart/form-data">-->
<!--                -->
<!--            </form>-->

            <br>

        </td>



    </tr>

    </tbody>
</table>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>