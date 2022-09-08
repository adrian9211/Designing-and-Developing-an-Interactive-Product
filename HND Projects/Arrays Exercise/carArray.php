

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Contact Form</title>
</head>
<body>
<?php
$randomNumber = rand(0,5);
$userNumber = $_POST['number1'];
?>
<div class="p-5 m-5">
    <h2><b>Car Make:</b>
        <?php
        $carMake = array("Toyota", "Mercedes", "Ford", "Audi", "Volvo", "VW");
        echo $carMake[$randomNumber];
        ?>
    </h2>
    <img src="
            <?php
    $carMake = array(
        "images/toyota.jpg",
        "images/mercedes.jpg",
        "images/ford.jpg",
        "images/audi.jpg",
        "images/volvo.jpg",
        "images/vw.jpg");
    echo $carMake[$randomNumber];
    ?>"

         class="img-rounded img-fluid" style="width: 25%;"  alt="img">

    <h4><b>Model :</b>
        <?php
        $carModel = array("Corolla", "C-Class", "F150", "A6", "V90", "Käfer 1302");
        echo $carModel[$randomNumber];
        ?></h4>
    <ul>
        <li>Year
            <?php
            $carYear = array("2010", "2015", "2018", "2019", "2020", "1972");
            echo $carYear[$randomNumber];
            ?>

        </li>
        <li>Engine size
            <?php
            $carEngine = array("1.6", "2.0", "3.0", "2.5", "2.0", "1.3");
            echo $carEngine[$randomNumber];
            ?>
        </li>
    </ul>

    <form action="<?php
    $randomNumber = rand(0,5); ?>" method="post">
        <br>
        <button type="submit" name="submit" value="submit" >Generate random number</button>
    </form>


</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>

