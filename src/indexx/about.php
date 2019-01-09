<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
session_start();
include('class/mysql_crud.php');

$db = new Database();
$db->connect();

?>

<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<title>Travel Planner | About Us</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Travel Agency Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>	
<!-- //custom-theme files-->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //custom-theme files-->

<!-- font-awesome-icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->

<!-- googlefonts -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext,vietnamese" rel="stylesheet">
<!-- //googlefonts -->

</head>

<body>

<!-- Top-Bar -->
    <div class="top">
        <div class="container">
                
            <div class="col-md-6 top-middle">
                <ul>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
            <div class="col-md-6 top-left">
<?php
					if(isset($_SESSION['is_user_login']))
					{	?>	                
                    <ul>
                        <li><i class="fa fa-mobile" aria-hidden="true"></i> Welcome <?= $_SESSION['user_login_name']; ?></li>
                        <li><a href="logout.php" style="color:#FFF;"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
                    </ul>
<?php 				}
					else
					{	?>                    
                    <ul>
                        <li><i class="fa fa-mobile" aria-hidden="true"></i> +91 98280 11111</li>
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i> B1/22 Gandhi Path, Jaipur </li>
                    </ul>
<?php 				}	?>

            </div>
            <div class="clearfix"></div>
            
        </div>
    </div>
    
    <div class="top-bar">
		<div class="container">
            <div class="header">
                <nav class="navbar navbar-default">
                    <div class="navbar-header navbar-left">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <h1><a class="navbar-brand" href="index.php">Travel Planner</span></a></h1>
                    </div>

                    <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                        <nav class="cl-effect-15" id="cl-effect-15">
                            <ul class="nav navbar-nav">
                                <li><a href="index.php">Home</a></li>
                                <li class="active"><a href="about.php">About</a></li>
                                <li><a href="place.php">Find Place</a></li>
<?php
											if(!isset($_SESSION['is_user_login']))
											{	?>	                
												<li><a href="register.php">Registration</a></li>
                                            	<li><a href="login.php">Login</a></li>
<?php 										}	?>                    
                                            
                                <li><a href="gallery.php">Gallery</a></li>
                                <li><a href="contact.php">Contact</a></li>
                            </ul>                            
                        </nav>
                    </div>
                </nav>
            </div>
        </div>
    </div>

	<div class="banner-1"></div>

	<!-- main-textgrids -->
	<div class="main-textgrids">
		<div class="container">
			<div class="wthree_head_section">
				<h3 class="w3l_header">About <span>Us</span></h3>
			</div>
			<div class="ab-agile">
				<div class="col-md-5 ab-pic">
					 <img src="images/g1.jpg" alt="" />
				</div>
				<div class="col-md-7 ab-text">
					<p>We are the best travel advisor elevates every trip. They know how to get the best value for your time and money.</p>
					<ul class="ab">
						<li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> Poviding best pricing places</a></li>
						<li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> Providing desired location</a></li>
						<li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> Providing unique places</a></li>
						<li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> Providing safe location</a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //main-textgrids -->


	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="col-md-4 agile_footer_grid">
				<h3>Contact Info</h3>
				<ul class="w3_address">
					<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>  B1/22 Gandhi Path, <span>Vaishali Nagar, Jaipur</span></li>
					<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:support@travelplanner.com">support@travelplanner.com</a></li>
					<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+91 98280 11111</li>
				</ul>
			</div>
			<div class="col-md-4 agile_footer_grid">
				<h3>About Us</h3>
				<p>We are the best travel advisor elevates every trip. They know how to get the best value for your time and money...</p>
				<ul class="agileits_social_list">
					<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
				</ul>
			</div>
			<div class="col-md-4 agile_footer_grid">
				<h3>Why only Us</h3>
				<ul class="agileits_w3layouts_footer_grid_list">
					<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						<a href="#" data-toggle="modal" data-target="#myModal">Best Travel Solution</a>
					</li>
					<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						<a href="#" data-toggle="modal" data-target="#myModal">Best Travel Advisior</a>
					</li>
					<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						<a href="#" data-toggle="modal" data-target="#myModal">Best Destination</a>
					</li>
					<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						<a href="#" data-toggle="modal" data-target="#myModal">Best Pricing</a>
					</li>
				</ul>
			</div>
			
		</div>
	</div>
	<div class="agileinfo_copyright">
		<p>© 2018 Travel Planner. All rights reserved </p>
	</div>
<!-- //footer -->

    <!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
	<!-- //for bootstrap working -->
    <!-- //js -->

<!-- //here starts scrolling icon -->
<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<!-- here stars scrolling script -->
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
	<!-- //here ends scrolling script -->
<!-- //here ends scrolling icon -->

<!-- scrolling script -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 
<!-- //scrolling script -->
</body>

<!-- Mirrored from p.w3layouts.com/demos_new/template_demo/22-01-2018/travel_agency-demo_Free/811543560/web/about.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Oct 2018 01:06:36 GMT -->
</html>