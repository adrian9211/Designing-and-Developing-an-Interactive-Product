<?php

$name = "Adrian Nykiel";
$birthPlace = " Poland";
$interest1 = "Photography";
$interest2 = "Programming";
$interest3 = "Cycling";
$image = "images/cycling.jpg";
?>
<!DOCTYPE HTML>
<html>
<head>
  <title>My Profile</title>
    <link rel="stylesheet" href="style/style.css" title="style" />
</head>
<body>
  <div id="main">
      <nav id="nav">
          <ul class="ul">
              <li class="nav_link">
                  <a class="" aria-current="page" href="jordan.php">Jordan</a>
              </li>
              <li class="nav_link">
                  <a class=" " aria-current="page" href="adrian.php">Adrian</a>
              </li>
              <li class="nav_link">
                  <a class=" " aria-current="page" href="evan.php">Evan</a>
              </li>

          </ul>
      </nav>
      <div id="site_content">
      		<div class="sidebar">
        	<!-- insert your sidebar items here -->
        	<h1>I am from <?php echo( "$birthPlace"); ?></h1><!-- use a PHP variable to display the location of where you stay or where you are from -->
        	</div>  
      <div id="content">
      <!-- insert the page content here -->
      <h1><?php echo($name); ?></h1><!-- use a PHP variable to display the name -->
      <img  alt="my image" width="590" height="400" src="<?php echo($image); ?>"><!-- replace the file name here with a php variable that stores the file name -->
      <h1>I like this image because.........</h1>
        <h1>My Interests Include;</h1>
        <ul>
          <li><?php echo(" $interest1"); ?></li><!-- show at least three of your interests - each stored in a different php variable -->
          <li><?php echo(" $interest2"); ?></li><!-- php embedded in to html -->
          <?php echo("<li> $interest3</li>");?><!-- html embedded in to php -->
          
        </ul>
      </div>
      </div>
  </div>
</body>
</html>
