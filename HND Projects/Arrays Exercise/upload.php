<?php
$imgPath = $_POST['coverimg'];
echo $imgPath;
?>
<div class="p-5 m-5">

    <h2><b>Car Make:</b>
        <?php
        $carMake = $_POST['carMake'];
        echo $carMake;
        ?>
    </h2>
    <img src="<?php
    echo "images/$imgPath" ?>">
    <h4><b>Model :</b>
        <?php
        $carModel = $_POST['carModel'];
        echo $carModel;
        ?></h4>
    <ul>
        <li>Year
            <?php
            $carYear = $_POST['year'];
            echo $carYear;
            ?>

        </li>
        <li>Engine size
            <?php
            $carEngine = $_POST['engine'];
            echo $carEngine;
            ?>
        </li>
    </ul>


</div>