

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Form</title>
</head>
<body>

<?php

$num1 = $_POST['number1'];
$num2 = $_POST['number2'];
$operator = $_POST['operator'];
$result = '';

switch ($operator) {
    case "None":
        $result = "You need to select a method!";
        break;
    case "Add":
        $result = $num1 + $num2;
        break;
    case "Subtract":
        $result = $num1 - $num2;
        break;
    case "Multiply":
        $result = $num1 * $num2;
        break;
    case "Divide":
        $result = $num1 / $num2;
        break;
}

echo "The answer is: " . $result;
?>



</form>
</body>
</html>

