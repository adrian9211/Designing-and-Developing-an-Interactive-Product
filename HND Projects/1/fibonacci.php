

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Form</title>
</head>
<body>

<?php
// fibonacci sequence

$firstTerm = 0;
$secondTerm = 1;

$userInput = $_POST['number1'];


print "The Fibonacci sequence is: ";
print $firstTerm;
print $secondTerm;

for($firstTerm = 0; $firstTerm < $userInput; $firstTerm++) {
    $nextTerm = $firstTerm + $secondTerm;
    $firstTerm = $secondTerm;
    $secondTerm = $nextTerm;
    print $nextTerm;
}

?>



</form>
</body>
</html>

