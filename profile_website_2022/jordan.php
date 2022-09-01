<!--          Variables-->
<?php
$country_of_origin = "United Kingdom";
$name = "Jordan Grieve";
$interests_1 = "Tenis";
$interests_2 = "Gaming";
$interests_3 = "Gym";
$reason = "of his beautiful eyes and hair";
$path = "images/testface.jpg";
?>
<!--          Variables-->
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
                <h1>I am from <b><?php
                        echo $country_of_origin; ?></b></h1>
        	</div>  
      <div id="content">
      <!-- insert the page content here -->
      <h1>Name of student <b><?php
              echo $name; ?></b></h1>
      <img src="<?php
      echo $path; ?>" alt="my image" width="590" height="400">
      <h1>I like this image because <?php
          echo $reason; ?></h1>
        <h1>My Interests Include:</h1>
        <ul>
          <li><?php echo $interests_1; ?></li><!-- php embedded in to html -->
          <li><?php echo $interests_2; ?></li><!-- php embedded in to html -->
          <li><?php echo $interests_3; ?></li><!-- php embedded in to html -->
        </ul>
      </div>
      </div>
  </div>
</body>
</html>


