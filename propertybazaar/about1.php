<?php 
	session_start(); 
$username=$_SESSION['username'];


?>
<?php
$servername = "localhost";
$username = "root";
$password ="";
$dbname="my_db";
$msg = "";
try{
	$conn = mysqli_connect($servername,$username,$password,$dbname);
}catch(MySQLi_sql_Exception $ex){
	echo ("error in connection");
}
$username=$_SESSION["username"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>About us</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Bluesky template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/about.css">
<link rel="stylesheet" type="text/css" href="styles/about_responsive.css">
</head>
<body>

<div class="super_container">

	<!-- Header -->

	<header class="header">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="header_content d-flex flex-row align-items-center justify-content-start">
						<div class="logo">
							<div class="home_title">Property Bazaar</div>
						</div>
						<nav class="main_nav">
							<ul>
								<li><a href="index1.php">Home</a></li>
								<li class="active"><a href="about1.php">About us</a></li>
								<li><a href="properties1.php">Properties</a></li>
								
								<li><a href="contact1.php">Contact</a></li>
								<li><a href="seller.php">Add Property</a></li>
								<li><a href="update.php">My Profile</a></li>
							</ul>
						</nav>
						<div class="phone_num ml-auto">
							<div class="phone_num_inner">
								<?php echo $username;?>
	<p> <a href="index.php?logout='1'" style="color: white;">logout</a> </p>
							</div>
						</div>
						<div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
					</div>
				</div>
			</div>
		</div>
	</header>

	
	
	<!-- Home -->

	<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/about.jpg" data-speed="0.8"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content d-flex flex-row align-items-end justify-content-start">
							<div class="home_title">About</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	

	<!-- About -->

	<div class="about">
		<div class="container">
			<div class="row">

				<!-- About Content -->
				<div class="col-lg-6">
					<div class="about_content">
						<div class="section_title">A few words about us</div>
						<div class="section_subtitle">Search your dream home</div>
						<div class="about_text">
							<p>Passionate about simplifying property decisions, propertybazaar.com offers home seekers, sellers and real estate professionals an extensive online real estate ecosystem. This ecosystem innovatively combines at a single stop:

Exhaustive search options for both renting and buying property
Easy to use analytics
A comprehensive and verified data base of apartments across India
Apartment community management tools
                                As a user you have all conceivable property details for over all active property listings in our website.</p>

						</div>
					</div>
				</div>

				<!-- About Image -->
				<div class="col-lg-6">
					<div class="about_image"><img src="images/about_image.jpg" alt=""></div>
				</div>
			</div>
			<div class="row milestones_row">

				<!-- Milestone -->
				<div class="col-lg-3 milestone_col">
					<div class="milestone d-flex flex-row align-items-center justify-content-start">
						<div class="milestone_icon d-flex flex-column align-items-center justify-content-center"><img src="images/milestones_1.png" alt=""></div>
						<div class="milestone_content">
							<div class="milestone_counter" data-end-value="50">0</div>
							<div class="milestone_text">Properties Sold</div>
						</div>
					</div>
				</div>

				<!-- Milestone -->
				<div class="col-lg-3 milestone_col">
					<div class="milestone d-flex flex-row align-items-center justify-content-start">
						<div class="milestone_icon d-flex flex-column align-items-center justify-content-center"><img src="images/milestones_2.png" alt=""></div>
						<div class="milestone_content">
							<div class="milestone_counter" data-end-value="125">0</div>
							<div class="milestone_text">Happy Clients</div>
						</div>
					</div>
				</div>

				<!-- Milestone -->
				<div class="col-lg-3 milestone_col">
					<div class="milestone d-flex flex-row align-items-center justify-content-start">
						<div class="milestone_icon d-flex flex-column align-items-center justify-content-center"><img src="images/milestones_3.png" alt=""></div>
						<div class="milestone_content">
							<div class="milestone_counter" data-end-value="50">0</div>
							<div class="milestone_text">Buildings Sold</div>
						</div>
						
					</div>
				</div>

				

			</div>
		</div>
	</div>

	
	<!-- Newsletter -->

	<div class="newsletter">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/newsletter.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->

	<footer class="footer">
		<div class="footer_main">
			<div class="container">
				<div class="row">
					<div class="col-lg-3">
						<div class="footer_logo"><a href="#"></a></div>
					</div>
					<div class="col-lg-9 d-flex flex-column align-items-start justify-content-end">
						
					</div>
				</div>
				<div class="row">
					<div class="col-lg-3 footer_col">
						<div class="footer_about">
						<div class="footer_about_text"><h3>Property Bazaar</h3></div>
						
							<div class="footer_about_text">Projects in Bangalore  Projects in Mumbai  Projects in Delhi  Projects in Pune  Projects in Zirakpur  Projects in Gurgaon  Projects in Noida  Projects in Hyderabad  Projects in Chennai  Projects in Kolkata</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		<div class="footer_bar">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="footer_bar_content d-flex flex-row align-items-center justify-content-start">
						
						
							<div class="footer_phone ml-auto"><span>call us: </span>951 195 8260</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/about.js"></script>
</body>
</html>