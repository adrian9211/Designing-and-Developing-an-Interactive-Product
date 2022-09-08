<?php 
//stay on same page after submit button is clicked.
if(isset($_POST['SubmitButton']))
{
	$input = $_POST['inputText'];
	$message = "Success! You entered: ".$input;
}    
?>

<html>
<body>    
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
  <input type="text" name="inputText"/>
  <input type="submit" name="SubmitButton"/>
</form>
<?php echo $message; ?>    
</body>
</html>