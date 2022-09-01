<?php
//assign php variables here

//File name variable
$_Photo_Path = "images\CuteDog.jpg";

//Where is the user from
$_Location = "Scotland";

//Ewan's Name
$_Users_Name = "Ewan";

//Ewan's interests variables
$_Interest_1 = "Reading";
$_Interest_2 = "Gaming";
$_Interest_3 = "Hiking";


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
        	<h1>I am from <?php echo($_Location); ?></h1><!-- use a PHP variable to display the location of where you stay or where you are from -->
        	</div>  
      <div id="content">


      <!-- insert the page content here -->
      <h1>Name of student <?php echo($_Users_Name); ?></h1> <!-- use a PHP variable to display the name -->

      <img src="<?php echo($_Photo_Path); ?>" alt="my image" width="590" height="400"><!-- replace the file name here with a php variable that stores the file name --> 
      <h1>I like this image because of his dreamy eyes</h1>
        <h1>My Interests Include;</h1>
        <ul>
          <li><?php echo($_Interest_1); ?></li><!-- php embedded in to html -->
          <li><?php echo($_Interest_2); ?></li><!-- php embedded in to html -->
          <li><?php echo($_Interest_3); ?></li><!-- php embedded in to html -->
        </ul>
      </div>
      </div>
  </div>
</body>
</html>
