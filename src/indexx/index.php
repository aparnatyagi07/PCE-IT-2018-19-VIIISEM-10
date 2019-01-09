<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
session_start();

?>


<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<title>Welcome to Travel Planner</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Travel Agency Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>	
		
<!-- For Testimonials slider -->
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all" />
<!-- //For Testimonials slider -->
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
		
<!-- banner -->


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
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                        <nav class="cl-effect-15" id="cl-effect-15">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="index.php">Home</a></li>
                                            <li><a href="about.php">About</a></li>
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
		<!-- //Top-Bar -->
		<!-- w3-banner -->
	<div class="banner">
		<div class="banner-dott1">
			<div class="w3-banner">
			
				<div  class="callbacks_container">
				<ul class="rslides" id="slider3">
					<li>
						<div class="banner-text">
					
							<h3>Enjoy Your Dream Vacation with us</h3>
							<p>Choose your travel destination or just float away into your travel dreams Or maybe you look for the best value times to travel to a specific place?</p>
						</div>
					</li>
					<li>
						<div class="banner-text">
					
							<h3>Find Best Travel Destinations</h3>
							<p>These feelings can be a huge help when choosing your travel destination.</p>
						</div>
					</li>
					<li>
						<div class="banner-text">
					
							<h3>Safe Places To Travel</h3>
							<p>Are you looking for a little clarity and inspiration to get your trip planning started?   </p>
						</div>
					</li>
				</ul>
			</div>	
			
			</div>
					
		<!-- //w3-banner -->
		</div>
	</div>
<!-- //banner -->
<!---728x90--->

	<!-- advantages -->
	<div class="two-grids">
		<div class="container">
<div class="wthree_head_section">
				<h3 class="w3l_header">Welcome to <span>Travel Planner</span></h3>
				<p>A travel Planner is a public service that provides Choose your travel destination or just float away into your travel dreams Or maybe you look for the best value times to travel to a specific place...</p>
			</div>
			<div class="col-md-6 w3_two_grid_right">
				<div class="w3_two_grid_right1">
					<div class="col-xs-3 w3_two_grid_right_grid">
						<div class="w3_two_grid_right_grid1">
							<i class="fa fa-building" aria-hidden="true"></i>
						</div>
					</div>
					<div class="col-xs-9 w3_two_grid_right_gridr">
						<h4>Accommodation</h4>
						<p>Suspendisse bibendum ex sit amet tellus finibus ultrices.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="w3_two_grid_right1">
					<div class="col-xs-3 w3_two_grid_right_grid">
						<div class="w3_two_grid_right_grid1">
							<i class="fa fa-plane" aria-hidden="true"></i>
						</div>
					</div>
					<div class="col-xs-9 w3_two_grid_right_gridr">
						<h4>Transportation</h4>
						<p>Suspendisse bibendum ex sit amet tellus finibus ultrices.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="w3_two_grid_right1">
					<div class="col-xs-3 w3_two_grid_right_grid">
						<div class="w3_two_grid_right_grid1">
							<i class="fa fa-user" aria-hidden="true"></i>
						</div>
					</div>
					<div class="col-xs-9 w3_two_grid_right_gridr">
						<h4>Seasoned Agents</h4>
						<p>Suspendisse bibendum ex sit amet tellus finibus ultrices.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-6 w3_two_grid_right">
				<div class="w3_two_grid_right1">
					<div class="col-xs-3 w3_two_grid_right_grid">
						<div class="w3_two_grid_right_grid1">
							<i class="fa fa-star" aria-hidden="true"></i>
						</div>
					</div>
					<div class="col-xs-9 w3_two_grid_right_gridr">
						<h4>Easy Trip Planning</h4>
						<p>Suspendisse bibendum ex sit amet tellus finibus ultrices.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="w3_two_grid_right1">
					<div class="col-xs-3 w3_two_grid_right_grid">
						<div class="w3_two_grid_right_grid1">
							<i class="fa fa-building" aria-hidden="true"></i>
						</div>
					</div>
					<div class="col-xs-9 w3_two_grid_right_gridr">
						<h4>Accommodation</h4>
						<p>Suspendisse bibendum ex sit amet tellus finibus ultrices.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="w3_two_grid_right1">
					<div class="col-xs-3 w3_two_grid_right_grid">
						<div class="w3_two_grid_right_grid1">
							<i class="fa fa-bus" aria-hidden="true"></i>
						</div>
					</div>
					<div class="col-xs-9 w3_two_grid_right_gridr">
						<h4>Transportation</h4>
						<p>Suspendisse bibendum ex sit amet tellus finibus ultrices.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //advantages -->
<!---728x90--->

<!-- banner-bottom -->
<div class="banner-bottom mid-section-agileits">
	<div class="col-md-7 bannerbottomleft">
			
	</div>
	<div class="col-md-5 bannerbottomright">
		<h3>Why We’re the Best </h3>
		<p>We are the best travel advisor elevates every trip. They know how to get the best value for your time and money...</p>
		<h4><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>Providing best pricing places</h4>
		<h4><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>Providing desired location</h4>
		<h4><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>Providing unique places</h4>
		<h4><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>Providing safe location</h4>
	</div>
	<div class="clearfix"></div>
</div>
<!-- //banner-bottom -->
<!---728x90--->

<!-- pricing -->
	<div class="w3ls-section wthree-pricing" id="pricing">	
		<div class="container">
			<div class="wthree_head_section">
				<h3 class="w3l_header">Top <span>Destination</span></h3>
				<p>A travel agency is a private retailer or public service that provides travel and tourism related services to the public on behalf of suppliers such as activities.</p>
			</div>
			<div class="pricing-grids-info">
								<div class="pricing-grid grid-one">
									<div class="w3ls-top">
										<img src="images/g8.jpg" class="img-responsive" alt="">
									</div>
									<div class="w3ls-bottom">
										<ul class="count">
											<h3>Thailand</h3>
										</ul>
									</div>
								</div>
								<div class="pricing-grid grid-two">
									<div class="w3ls-top">
										<img src="images/g4.jpg" class="img-responsive" alt="">
									</div>
									<div class="w3ls-bottom">
										<ul class="count">
											<h3>Newyork</h3>
										</ul>
									</div>
								</div>
								<div class="pricing-grid grid-three">
									<div class="w3ls-top">
										<img src="images/g5.jpg" class="img-responsive" alt="">
									</div>
									<div class="w3ls-bottom">
										<ul class="count">
											<h3>Australia</h3>
										</ul>
									</div>
								</div>
								<div class="zb pricing-grid grid-four">
									<div class="w3ls-top">
										<img src="images/g11.jpg" class="img-responsive" alt="">
									</div>
									<div class="w3ls-bottom">
										<ul class="count">
											<h3>Dubai</h3>
										</ul>
									</div>
								</div>
								<div class="clearfix"> </div> 
				<!--End-slider-script-->
			</div>
		</div>	
	</div>	
	<!--//pricing-->

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
<!-- responsiveslides -->
<script src="js/responsiveslides.min.js"></script>
			<script>
									// You can also use "$(window).load(function() {"
									$(function () {
									 // Slideshow 4
									$("#slider3").responsiveSlides({
										auto: true,
										pager: false,
										nav: true,
										speed: 500,
										namespace: "callbacks",
										before: function () {
									$('.events').append("<li>before event fired.</li>");
									},
									after: function () {
										$('.events').append("<li>after event fired.</li>");
										}
										});
										});
			</script>
<!-- //responsiveslides -->
<!-- stats -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.countup.js"></script>
		<script>
			$('.counter').countUp();
		</script>
<!-- //stats -->
<!-- FlexSlider-JavaScript -->
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
<!-- //FlexSlider-JavaScript -->
</body>


</html>