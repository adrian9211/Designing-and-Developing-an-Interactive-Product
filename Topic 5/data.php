

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Form</title>
</head>
<body>
<h1>Thank You for your game!</h1>

<?php
$luckyDay = $_POST['day'];
$winningNumber = $_POST['number'];
$winningColour = $_POST['colour'];

if ($luckyDay == 'Wednesday' || $luckyDay == 'Saturday') {
    echo "<p>Today is your lucky day!</p>";
    if ($winningNumber == 72) {
        echo "<p>Your lucky number is 72!</p>";
        if ($winningColour == 'green') {
            echo "<p>Your lucky colour is green!</p>";
            echo "<p><b>You have won the jackpot!</b></p>";
        } else {
            echo "<p>Your lucky colour is wrong!</p>";
            echo "<p>You fail.</p>";
        }
    } else {
        echo "<p>Your number didn't won!</p>";
        echo "<p>You fail.</p>";
    }
} else {
    echo "<p>The lottery draw only takes place on either a Saturday or a Wednesday</p>";
}
?>



</form>
</body>
</html>

