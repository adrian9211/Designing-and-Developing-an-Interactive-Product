<?php
?>

<!--
author: Limelightlayouts
author URL: http://Limelightlayouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>One Movies an Entertainment Category Flat Bootstrap Responsive Website Template | Home :: Limelightlayouts</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="One Movies Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //for-mobile-apps -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="css/contactstyle.css" type="text/css" media="all" />
    <link rel="stylesheet" href="css/faqstyle.css" type="text/css" media="all" />
    <link href="css/single.css" rel='stylesheet' type='text/css' />
    <link href="css/medile.css" rel='stylesheet' type='text/css' />
    <!-- banner-slider -->
    <link href="css/jquery.slidey.min.css" rel="stylesheet">
    <!-- //banner-slider -->
    <!-- pop-up -->
    <link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
    <!-- //pop-up -->
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <!-- //font-awesome icons -->
    <!-- js -->
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <!-- //js -->
    <!-- banner-bottom-plugin -->
    <link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="all">
    <script src="js/owl.carousel.js"></script>
    <script>
        $(document).ready(function() {
            $("#owl-demo").owlCarousel({

                autoPlay: 3000, //Set AutoPlay to 3 seconds

                items : 5,
                itemsDesktop : [640,4],
                itemsDesktopSmall : [414,3]

            });

        });
    </script>
    <!-- //banner-bottom-plugin -->
    <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>
    <!-- start-smoth-scrolling -->
</head>

<body>
<!-- header -->
<div class="header">
    <div class="container">
        <div class="Limelightlayouts_logo">
            <a href="index.html"><h1>One<span>Movies</span></h1></a>
        </div>

        <div class="Limelightl_sign_in_register">
            <ul>
                <li><i class="fa fa-phone" aria-hidden="true"></i> (+000) 123 345 653</li>
                <li><a href="#" data-toggle="modal" data-target="#myModal">Login</a></li>
            </ul>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<!-- //header -->
<!-- bootstrap-pop-up -->
<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                Sign In & Sign Up
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <section>
                <div class="modal-body">
                    <div class="Limelight_login_module">
                        <div class="module form-module">
                            <div class="toggle"><i class="fa fa-times fa-pencil"></i>
                                <div class="tooltip">Click Me</div>
                            </div>
                            <div class="form">
                                <h3>Login to your account</h3>
                                <form action="#" method="post">
                                    <input type="text" name="Username" placeholder="Username" required="">
                                    <input type="password" name="Password" placeholder="Password" required="">
                                    <input type="submit" value="Login">
                                </form>
                            </div>
                            <div class="form">
                                <h3>Create an account</h3>
                                <form action="#" method="post">
                                    <input type="text" name="Username" placeholder="Username" required="">
                                    <input type="password" name="Password" placeholder="Password" required="">
                                    <input type="email" name="Email" placeholder="Email Address" required="">
                                    <input type="text" name="Phone" placeholder="Phone Number" required="">
                                    <input type="submit" value="Register">
                                </form>
                            </div>
                            <div class="cta"><a href="#">Forgot your password?</a></div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<script>
    $('.toggle').click(function(){
        // Switches the Icon
        $(this).children('i').toggleClass('fa-pencil');
        // Switches the forms
        $('.form').animate({
            height: "toggle",
            'padding-top': 'toggle',
            'padding-bottom': 'toggle',
            opacity: "toggle"
        }, "slow");
    });
</script>
<!-- //bootstrap-pop-up -->

<!-- banner -->
<div id="slidey" style="display:none;">

<?php
require_once ("db.php");

        $result = mysqli_query($conn, "SELECT Title, Description, file_name FROM movies");

echo "<ul>";
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){

            echo "<li>";
            echo "<img src='uploads/".$row['file_name']."' >";
            echo "<div class='slidey-overlay'></div>";
            echo "<div class='banner-text'>";
            echo "<h3 class='title'>" . $row['Title'] . "</h3>";
            echo "<p class='description'>" . $row['Description'] . "</p>";
            echo "</div>";
            echo "</li>";
        }
echo "</ul>";

?>

</div>
<script src="js/jquery.slidey.js"></script>
<script src="js/jquery.dotdotdot.min.js"></script>
<script type="text/javascript">
    $("#slidey").slidey({
        interval: 8000,
        listCount: 5,
        autoplay: false,
        showList: true
    });
    $(".slidey-list-description").dotdotdot();
</script>
<!-- //banner -->

<div class="general_social_icons">
    <nav class="social">
        <ul>
            <li class="Limelight_twitter"><a href="#">Twitter <i class="fa fa-twitter"></i></a></li>
            <li class="Limelight_facebook"><a href="#">Facebook <i class="fa fa-facebook"></i></a></li>
            <li class="Limelight_dribbble"><a href="#">Dribbble <i class="fa fa-dribbble"></i></a></li>
            <li class="Limelight_g_plus"><a href="#">Google+ <i class="fa fa-google-plus"></i></a></li>
        </ul>
    </nav>
</div>
<!-- general -->
<div class="general">
    <h4 class="latest-text Limelight_latest_text">All Movies</h4>
    <div class="container">
        <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
            <div id="myTabContent" class="tab-content">
                <div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
                    <div class="Limelight_agile_featured_movies">
                            <?php

                            $result = mysqli_query($conn, "SELECT Type, Rating, file_name, Title FROM movies");

                            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                                echo "<div class='col-md-2 Limelightl-movie-gride-agile'>";
                                echo "<a href='single.html' class='hvr-shutter-out-horizontal'><img src='uploads/" . $row['file_name'] . "' title='album-name' class='img-responsive' alt=' ' />
                                <div class='Limelightl-action-icon'><i class='fa fa-play-circle' aria-hidden='true'></i></div>
                                ";
                                echo "</a>";
                                echo "<div class='mid-1 agileits_Limelightlayouts_mid_1_home'>";
                                echo "<div class='Limelightl-movie-text'>";
                                echo "<h6 class='mb-2 fw-bold'><a href='single.html' >" . $row['Title'] . " </a></h6>";
                                echo "<h6><a href='single.html'>" . $row['Type'] . "</a></h6>";
                                echo "</div>";
                                echo "<div class='mid-2 agile_mid_2_home'>";
                                echo "<div class='block-stars'>";
                                echo "<ul class='Limelightl-ratings'>";
                                echo "<p>" . $row['Rating'] . "</p>";
                                while ($row['Rating'] > 0) {
                                    echo "<li><a href='#'><i class='fa fa-star' aria-hidden='true'></i></a></li>";
                                    $row['Rating']--;
                                }
                                echo "</ul>";
                                echo "</div>";
                                echo "<div class='clearfix'></div>";
                                echo "</div>";
                                echo "<div class='ribben'>";
                                echo "<p>NEW</p>";
                                echo "</div>";
//                                echo "</div>";
                                echo "</div>";
                                echo "</div>";

                            };

                            ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Latest-tv-series -->
<div class="Latest-tv-series">
    <h4 class="latest-text Limelight_latest_text Limelight_home_popular">Most Popular Movies</h4>
    <div class="container">
        <section class="slider">
            <div class="flexslider">
                <ul class="slides">
                    <li>
                        <div class="agile_tv_series_grid">
                            <div class="col-md-6 agile_tv_series_grid_left">
                                <div class="Limelightls_market_video_grid1">
                                    <img src="images/h1-1.jpg" alt=" " class="img-responsive" />
                                    <a class="Limelight_play_icon" href="#small-dialog">
                                        <span class="glyphicon glyphicon-play-circle" aria-hidden="true"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6 agile_tv_series_grid_right">
                                <p class="fexi_header">the conjuring 2</p>
                                <p class="fexi_header_para"><span class="conjuring_Limelight">Story Line<label>:</label></span> 720p,Bluray HD Free Movie Downloads, Watch Free Movies Online with high speed Free Movie Streaming | MyDownloadTube Lorraine and Ed Warren go to north London to help a single...</p>
                                <p class="fexi_header_para"><span>Date of Release<label>:</label></span> Jun 10, 2016 </p>
                                <p class="fexi_header_para">
                                    <span>Genres<label>:</label> </span>
                                    <a href="genres.html">Drama</a> |
                                    <a href="genres.html">Adventure</a> |
                                    <a href="genres.html">Family</a>
                                </p>
                                <p class="fexi_header_para fexi_header_para1"><span>Star Rating<label>:</label></span>
                                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                </p>
                            </div>
                            <div class="clearfix"> </div>
                            <div class="agileinfo_flexislider_grids">
                                <div class="col-md-2 Limelightl-movie-gride-agile">
                                    <a href="single.html" class="hvr-shutter-out-horizontal"><img src="images/m22.jpg" title="album-name" class="img-responsive" alt=" " />
                                        <div class="Limelightl-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                                    </a>
                                    <div class="mid-1 agileits_Limelightlayouts_mid_1_home">
                                        <div class="Limelightl-movie-text">
                                            <h6><a href="single.html">Assassin's Creed 3</a></h6>
                                        </div>
                                        <div class="mid-2 agile_mid_2_home">
                                            <p>2016</p>
                                            <div class="block-stars">
                                                <ul class="Limelightl-ratings">
                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="ribben">
                                        <p>NEW</p>
                                    </div>
                                </div>
                                <div class="col-md-2 Limelightl-movie-gride-agile">
                                    <a href="single.html" class="hvr-shutter-out-horizontal"><img src="images/m2.jpg" title="album-name" class="img-responsive" alt=" " />
                                        <div class="Limelightl-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                                    </a>
                                    <div class="mid-1 agileits_Limelightlayouts_mid_1_home">
                                        <div class="Limelightl-movie-text">
                                            <h6><a href="single.html">Bad Moms</a></h6>
                                        </div>
                                        <div class="mid-2 agile_mid_2_home">
                                            <p>2016</p>
                                            <div class="block-stars">
                                                <ul class="Limelightl-ratings">
                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="ribben">
                                        <p>NEW</p>
                                    </div>
                                </div>
                                <div class="col-md-2 Limelightl-movie-gride-agile">
                                    <a href="single.html" class="hvr-shutter-out-horizontal"><img src="images/m9.jpg" title="album-name" class="img-responsive" alt=" " />
                                        <div class="Limelightl-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                                    </a>
                                    <div class="mid-1 agileits_Limelightlayouts_mid_1_home">
                                        <div class="Limelightl-movie-text">
                                            <h6><a href="single.html">Central Intelligence</a></h6>
                                        </div>
                                        <div class="mid-2 agile_mid_2_home">
                                            <p>2016</p>
                                            <div class="block-stars">
                                                <ul class="Limelightl-ratings">
                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="ribben">
                                        <p>NEW</p>
                                    </div>
                                </div>
                                <div class="col-md-2 Limelightl-movie-gride-agile">
                                    <a href="single.html" class="hvr-shutter-out-horizontal"><img src="images/m7.jpg" title="album-name" class="img-responsive" alt=" " />
                                        <div class="Limelightl-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                                    </a>
                                    <div class="mid-1 agileits_Limelightlayouts_mid_1_home">
                                        <div class="Limelightl-movie-text">
                                            <h6><a href="single.html">Light B/t Oceans</a></h6>
                                        </div>
                                        <div class="mid-2 agile_mid_2_home">
                                            <p>2016</p>
                                            <div class="block-stars">
                                                <ul class="Limelightl-ratings">
                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="ribben">
                                        <p>NEW</p>
                                    </div>
                                </div>
                                <div class="col-md-2 Limelightl-movie-gride-agile">
                                    <a href="single.html" class="hvr-shutter-out-horizontal"><img src="images/m11.jpg" title="album-name" class="img-responsive" alt=" " />
                                        <div class="Limelightl-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                                    </a>
                                    <div class="mid-1 agileits_Limelightlayouts_mid_1_home">
                                        <div class="Limelightl-movie-text">
                                            <h6><a href="single.html">X-Men</a></h6>
                                        </div>
                                        <div class="mid-2 agile_mid_2_home">
                                            <p>2016</p>
                                            <div class="block-stars">
                                                <ul class="Limelightl-ratings">
                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="ribben">
                                        <p>NEW</p>
                                    </div>
                                </div>
                                <div class="col-md-2 Limelightl-movie-gride-agile">
                                    <a href="single.html" class="hvr-shutter-out-horizontal"><img src="images/m17.jpg" title="album-name" class="img-responsive" alt=" " />
                                        <div class="Limelightl-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                                    </a>
                                    <div class="mid-1 agileits_Limelightlayouts_mid_1_home">
                                        <div class="Limelightl-movie-text">
                                            <h6><a href="single.html">Peter</a></h6>
                                        </div>
                                        <div class="mid-2 agile_mid_2_home">
                                            <p>2016</p>
                                            <div class="block-stars">
                                                <ul class="Limelightl-ratings">
                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="ribben">
                                        <p>NEW</p>
                                    </div>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="agile_tv_series_grid">
                            <div class="col-md-6 agile_tv_series_grid_left">
                                <div class="Limelightls_market_video_grid1">
                                    <img src="images/h2-1.jpg" alt=" " class="img-responsive" />
                                    <a class="Limelight_play_icon1" href="#small-dialog1">
                                        <span class="glyphicon glyphicon-play-circle" aria-hidden="true"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6 agile_tv_series_grid_right">
                                <p class="fexi_header">a haunting in cawdor</p>
                                <p class="fexi_header_para"><span class="conjuring_Limelight">Story Line<label>:</label></span> Vivian Miller, sent to a rehabilitation programme for young offenders, where a theatre camp is used as an alternative to jail time. After she views tape ...</p>
                                <p class="fexi_header_para"><span>Date of Release<label>:</label></span> Oct 09, 2015 </p>
                                <p class="fexi_header_para">
                                    <span>Genres<label>:</label> </span>
                                    <a href="genres.html">Thriller</a> |
                                    <a href="genres.html">Horror</a>
                                </p>
                                <p class="fexi_header_para fexi_header_para1"><span>Star Rating<label>:</label></span>
                                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                </p>
                            </div>
                            <div class="clearfix"> </div>
                            <div class="agileinfo_flexislider_grids">
                                <div class="col-md-2 Limelightl-movie-gride-agile">
                                    <a href="single.html" class="hvr-shutter-out-horizontal"><img src="images/m2.jpg" title="album-name" class="img-responsive" alt=" " />
                                        <div class="Limelightl-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                                    </a>
                                    <div class="mid-1 agileits_Limelightlayouts_mid_1_home">
                                        <div class="Limelightl-movie-text">
                                            <h6><a href="single.html">Bad Moms</a></h6>
                                        </div>
                                        <div class="mid-2 agile_mid_2_home">
                                            <p>2016</p>
                                            <div class="block-stars">
                                                <ul class="Limelightl-ratings">
                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="ribben">
                                        <p>NEW</p>
                                    </div>
                                </div>
                                <div class="col-md-2 Limelightl-movie-gride-agile">
                                    <a href="single.html" class="hvr-shutter-out-horizontal"><img src="images/m9.jpg" title="album-name" class="img-responsive" alt=" " />
                                        <div class="Limelightl-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                                    </a>
                                    <div class="mid-1 agileits_Limelightlayouts_mid_1_home">
                                        <div class="Limelightl-movie-text">
                                            <h6><a href="single.html">Central Intelligence</a></h6>
                                        </div>
                                        <div class="mid-2 agile_mid_2_home">
                                            <p>2016</p>
                                            <div class="block-stars">
                                                <ul class="Limelightl-ratings">
                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="ribben">
                                        <p>NEW</p>
                                    </div>
                                </div>
                                <div class="col-md-2 Limelightl-movie-gride-agile">
                                    <a href="single.html" class="hvr-shutter-out-horizontal"><img src="images/m7.jpg" title="album-name" class="img-responsive" alt=" " />
                                        <div class="Limelightl-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                                    </a>
                                    <div class="mid-1 agileits_Limelightlayouts_mid_1_home">
                                        <div class="Limelightl-movie-text">
                                            <h6><a href="single.html">Light B/t Oceans</a></h6>
                                        </div>
                                        <div class="mid-2 agile_mid_2_home">
                                            <p>2016</p>
                                            <div class="block-stars">
                                                <ul class="Limelightl-ratings">
                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="ribben">
                                        <p>NEW</p>
                                    </div>
                                </div>
                                <div class="col-md-2 Limelightl-movie-gride-agile">
                                    <a href="single.html" class="hvr-shutter-out-horizontal"><img src="images/m11.jpg" title="album-name" class="img-responsive" alt=" " />
                                        <div class="Limelightl-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                                    </a>
                                    <div class="mid-1 agileits_Limelightlayouts_mid_1_home">
                                        <div class="Limelightl-movie-text">
                                            <h6><a href="single.html">X-Men</a></h6>
                                        </div>
                                        <div class="mid-2 agile_mid_2_home">
                                            <p>2016</p>
                                            <div class="block-stars">
                                                <ul class="Limelightl-ratings">
                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="ribben">
                                        <p>NEW</p>
                                    </div>
                                </div>
                                <div class="col-md-2 Limelightl-movie-gride-agile">
                                    <a href="single.html" class="hvr-shutter-out-horizontal"><img src="images/m17.jpg" title="album-name" class="img-responsive" alt=" " />
                                        <div class="Limelightl-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                                    </a>
                                    <div class="mid-1 agileits_Limelightlayouts_mid_1_home">
                                        <div class="Limelightl-movie-text">
                                            <h6><a href="single.html">Peter</a></h6>
                                        </div>
                                        <div class="mid-2 agile_mid_2_home">
                                            <p>2016</p>
                                            <div class="block-stars">
                                                <ul class="Limelightl-ratings">
                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="ribben">
                                        <p>NEW</p>
                                    </div>
                                </div>
                                <div class="col-md-2 Limelightl-movie-gride-agile">
                                    <a href="single.html" class="hvr-shutter-out-horizontal"><img src="images/m21.jpg" title="album-name" class="img-responsive" alt=" " />
                                        <div class="Limelightl-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                                    </a>
                                    <div class="mid-1 agileits_Limelightlayouts_mid_1_home">
                                        <div class="Limelightl-movie-text">
                                            <h6><a href="single.html">The Jungle Book</a></h6>
                                        </div>
                                        <div class="mid-2 agile_mid_2_home">
                                            <p>2016</p>
                                            <div class="block-stars">
                                                <ul class="Limelightl-ratings">
                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="ribben">
                                        <p>NEW</p>
                                    </div>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="agile_tv_series_grid">
                            <div class="col-md-6 agile_tv_series_grid_left">
                                <div class="Limelightls_market_video_grid1">
                                    <img src="images/h3-1.jpg" alt=" " class="img-responsive" />
                                    <a class="Limelight_play_icon2" href="#small-dialog2">
                                        <span class="glyphicon glyphicon-play-circle" aria-hidden="true"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6 agile_tv_series_grid_right">
                                <p class="fexi_header">civil war captain America</p>
                                <p class="fexi_header_para"><span class="conjuring_Limelight">Story Line<label>:</label></span> After the Avengers leaves some&nbsp;collateral damage, political pressure mounts to install a system of accountability.&nbsp;The new status quo deeply divides ...</p>
                                <p class="fexi_header_para"><span>Date of Release<label>:</label></span> May 06, 2016 </p>
                                <p class="fexi_header_para">
                                    <span>Genres<label>:</label> </span>
                                    <a href="genres.html">Action</a> |
                                    <a href="genres.html">Adventure</a>
                                </p>
                                <p class="fexi_header_para fexi_header_para1"><span>Star Rating<label>:</label></span>
                                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                </p>
                            </div>
                            <div class="clearfix"> </div>
                            <div class="agileinfo_flexislider_grids">
                                <div class="col-md-2 Limelightl-movie-gride-agile">
                                    <a href="single.html" class="hvr-shutter-out-horizontal"><img src="images/m2.jpg" title="album-name" class="img-responsive" alt=" " />
                                        <div class="Limelightl-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                                    </a>
                                    <div class="mid-1 agileits_Limelightlayouts_mid_1_home">
                                        <div class="Limelightl-movie-text">
                                            <h6><a href="single.html">Bad Moms</a></h6>
                                        </div>
                                        <div class="mid-2 agile_mid_2_home">
                                            <p>2016</p>
                                            <div class="block-stars">
                                                <ul class="Limelightl-ratings">
                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="ribben">
                                        <p>NEW</p>
                                    </div>
                                </div>
                                <div class="col-md-2 Limelightl-movie-gride-agile">
                                    <a href="single.html" class="hvr-shutter-out-horizontal"><img src="images/m9.jpg" title="album-name" class="img-responsive" alt=" " />
                                        <div class="Limelightl-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                                    </a>
                                    <div class="mid-1 agileits_Limelightlayouts_mid_1_home">
                                        <div class="Limelightl-movie-text">
                                            <h6><a href="single.html">Central Intelligence</a></h6>
                                        </div>
                                        <div class="mid-2 agile_mid_2_home">
                                            <p>2016</p>
                                            <div class="block-stars">
                                                <ul class="Limelightl-ratings">
                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="ribben">
                                        <p>NEW</p>
                                    </div>
                                </div>
                                <div class="col-md-2 Limelightl-movie-gride-agile">
                                    <a href="single.html" class="hvr-shutter-out-horizontal"><img src="images/m7.jpg" title="album-name" class="img-responsive" alt=" " />
                                        <div class="Limelightl-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                                    </a>
                                    <div class="mid-1 agileits_Limelightlayouts_mid_1_home">
                                        <div class="Limelightl-movie-text">
                                            <h6><a href="single.html">Light B/t Oceans</a></h6>
                                        </div>
                                        <div class="mid-2 agile_mid_2_home">
                                            <p>2016</p>
                                            <div class="block-stars">
                                                <ul class="Limelightl-ratings">
                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="ribben">
                                        <p>NEW</p>
                                    </div>
                                </div>
                                <div class="col-md-2 Limelightl-movie-gride-agile">
                                    <a href="single.html" class="hvr-shutter-out-horizontal"><img src="images/m11.jpg" title="album-name" class="img-responsive" alt=" " />
                                        <div class="Limelightl-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                                    </a>
                                    <div class="mid-1 agileits_Limelightlayouts_mid_1_home">
                                        <div class="Limelightl-movie-text">
                                            <h6><a href="single.html">X-Men</a></h6>
                                        </div>
                                        <div class="mid-2 agile_mid_2_home">
                                            <p>2016</p>
                                            <div class="block-stars">
                                                <ul class="Limelightl-ratings">
                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="ribben">
                                        <p>NEW</p>
                                    </div>
                                </div>
                                <div class="col-md-2 Limelightl-movie-gride-agile">
                                    <a href="single.html" class="hvr-shutter-out-horizontal"><img src="images/m17.jpg" title="album-name" class="img-responsive" alt=" " />
                                        <div class="Limelightl-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                                    </a>
                                    <div class="mid-1 agileits_Limelightlayouts_mid_1_home">
                                        <div class="Limelightl-movie-text">
                                            <h6><a href="single.html">Peter</a></h6>
                                        </div>
                                        <div class="mid-2 agile_mid_2_home">
                                            <p>2016</p>
                                            <div class="block-stars">
                                                <ul class="Limelightl-ratings">
                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="ribben">
                                        <p>NEW</p>
                                    </div>
                                </div>
                                <div class="col-md-2 Limelightl-movie-gride-agile">
                                    <a href="single.html" class="hvr-shutter-out-horizontal"><img src="images/m20.jpg" title="album-name" class="img-responsive" alt=" " />
                                        <div class="Limelightl-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                                    </a>
                                    <div class="mid-1 agileits_Limelightlayouts_mid_1_home">
                                        <div class="Limelightl-movie-text">
                                            <h6><a href="single.html">The Secret Life of Pets</a></h6>
                                        </div>
                                        <div class="mid-2 agile_mid_2_home">
                                            <p>2016</p>
                                            <div class="block-stars">
                                                <ul class="Limelightl-ratings">
                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="ribben">
                                        <p>NEW</p>
                                    </div>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- flexSlider -->
        <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
        <script defer src="js/jquery.flexslider.js"></script>
        <script type="text/javascript">
            $(window).load(function(){
                $('.flexslider').flexslider({
                    animation: "slide",
                    start: function(slider){
                        $('body').removeClass('loading');
                    }
                });
            });
        </script>
        <!-- //flexSlider -->
    </div>
</div>
<!-- pop-up-box -->
<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
<!--//pop-up-box -->
<div id="small-dialog" class="mfp-hide">
    <iframe src="https://player.vimeo.com/video/164819130?title=0&byline=0"></iframe>
</div>
<div id="small-dialog1" class="mfp-hide">
    <iframe src="https://player.vimeo.com/video/148284736"></iframe>
</div>
<div id="small-dialog2" class="mfp-hide">
    <iframe src="https://player.vimeo.com/video/165197924?color=ffffff&title=0&byline=0&portrait=0"></iframe>
</div>
<script>
    $(document).ready(function() {
        $('.Limelight_play_icon,.Limelight_play_icon1,.Limelight_play_icon2').magnificPopup({
            type: 'inline',
            fixedContentPos: false,
            fixedBgPos: true,
            overflowY: 'auto',
            closeBtnInside: true,
            preloader: false,
            midClick: true,
            removalDelay: 300,
            mainClass: 'my-mfp-zoom-in'
        });

    });
</script>
<!-- //Latest-tv-series -->
<!-- footer -->
<div class="footer">
    <div class="container">
        <div class="Limelightls_footer_grid">
            <div class="col-md-6 Limelightls_footer_grid_left">
                <div class="Limelightls_footer_grid_left1">
                    <h2>Subscribe to us</h2>
                    <div class="Limelightls_footer_grid_left1_pos">
                        <form action="#" method="post">
                            <input type="email" name="email" placeholder="Your email..." required="">
                            <input type="submit" value="Send">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6 Limelightls_footer_grid_right">
                <a href="index.html"><h2>One<span>Movies</span></h2></a>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="col-md-5 Limelightls_footer_grid1_left">
            <p>&copy; 2016 One Movies. All rights reserved | Design by <a href="http://Limelightlayouts.com/">Limelightlayouts</a></p>
        </div>
        <div class="col-md-7 Limelightls_footer_grid1_right">
            <ul>
                <li>
                    <a href="genres.html">Movies</a>
                </li>
                <li>
                    <a href="faq.html">FAQ</a>
                </li>
                <li>
                    <a href="horror.html">Action</a>
                </li>
                <li>
                    <a href="genres.html">Adventure</a>
                </li>
                <li>
                    <a href="comedy.html">Comedy</a>
                </li>
                <li>
                    <a href="icons.html">Icons</a>
                </li>
                <li>
                    <a href="contact.html">Contact Us</a>
                </li>
            </ul>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<!-- //footer -->
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script>
    $(document).ready(function(){
        $(".dropdown").hover(
            function() {
                $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
                $(this).toggleClass('open');
            },
            function() {
                $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
                $(this).toggleClass('open');
            }
        );
    });
</script>
<!-- //Bootstrap Core JavaScript -->
<!-- here stars scrolling icon -->
<script type="text/javascript">
    $(document).ready(function() {
        /*
            var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
            };
        */

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<!-- //here ends scrolling icon -->
</body>
</html>
