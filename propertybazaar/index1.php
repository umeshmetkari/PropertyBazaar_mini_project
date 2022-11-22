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
<title>Property Bazaar</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Property bazaar project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">


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
							<div class="footer_about_text"><h2><b>Property Bazaar</b></h2></div>
						</div>
						<nav class="main_nav">
							<ul>
								<li class="active"><a href="index1.php">Home</a></li>
								<li><a href="about1.php">About us</a></li>
								<li><a href="properties1.php">Properties</a></li>
								<li><a href="seller.php">Add Property</a></li>
								<li><a href="contact1.php">Contact</a></li>
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

		<!-- Home Slider -->
		<div class="home_slider_container">
			<div class="owl-carousel owl-theme home_slider">
				
				<!-- Slide -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(images/home_slider_1.jpg)"></div>
					<div class="slide_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="slide_content">
										<div class="home_title">Property Bazaar</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				

				

			</div>
		</div>
	</div>


	

	<!--<div class="cities">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title">Find properties in these cities</div>
					<div class="section_subtitle">Search your dream home</div>
				</div>
			</div>
		</div>
		
		<div class="cities_container d-flex flex-row flex-wrap align-items-start justify-content-between">


			<div class="city">
				<img src="images/city_1.jpg" alt="https://unsplash.com/@dnevozhai">
				<div class="city_overlay">
					<a href="#" class="d-flex flex-column align-items-center justify-content-center">
						<div class="city_title">Pune</div>
						<div class="city_subtitle">Rentals from ₹8500/month</div>
					</a>	
				</div>
			</div>


			<div class="city">
				<img src="images/city_2.jpg" alt="https://unsplash.com/@lachlanjdempsey">
				<div class="city_overlay">
					<a href="#" class="d-flex flex-column align-items-center justify-content-center">
						<div class="city_title">Mumbai</div>
						<div class="city_subtitle">Rentals from ₹8500/month</div>
					</a>	
				</div>
			</div>


			<div class="city">
				<img src="images/city_3.jpg" alt="https://unsplash.com/@hellolightbulb">
				<div class="city_overlay">
					<a href="#" class="d-flex flex-column align-items-center justify-content-center">
						<div class="city_title">Kolkata</div>
						<div class="city_subtitle">Rentals from ₹8500/month</div>
					</a>	
				</div>
			</div>

			<div class="city">
			<div class="city">
				<img src="images/city_4.jpg" alt="https://unsplash.com/@justinbissonbeck">
				<div class="city_overlay">
					<a href="#" class="d-flex flex-column align-items-center justify-content-center">
						<div class="city_title">Bengaluru</div>
						<div class="city_subtitle">Rentals from ₹8500/month</div>
					</a>	
				</div>
			</div>


			<div class="city">
				<img src="images/city_5.jpg" alt="https://unsplash.com/@claudiotrigueros">
				<div class="city_overlay">
					<a href="#" class="d-flex flex-column align-items-center justify-content-center">
						<div class="city_title">Chennai</div>
						<div class="city_subtitle">Rentals from ₹8500/month</div>
					</a>	
				</div>
			</div>

			<div class="city">
				<img src="images/city_6.jpg" alt="https://unsplash.com/@andersjilden">
				<div class="city_overlay">
					<a href="#" class="d-flex flex-column align-items-center justify-content-center">
						<div class="city_title">Jaipur</div>
						<div class="city_subtitle">Rentals from ₹8500/month</div>
					</a>	
				</div>
			</div>

			
			<div class="city">
				<img src="images/city_7.jpg" alt="https://unsplash.com/@sawyerbengtson">
				<div class="city_overlay">
					<a href="#" class="d-flex flex-column align-items-center justify-content-center">
						<div class="city_title">Ahmedabad</div>
						<div class="city_subtitle">Rentals from ₹8500/month</div>
					</a>	
				</div>
			</div>

			
			<div class="city">
				<img src="images/city_8.jpg" alt="https://unsplash.com/@mathewwaters">
				<div class="city_overlay">
					<a href="#" class="d-flex flex-column align-items-center justify-content-center">
						<div class="city_title">Hyderabad</div>
						<div class="city_subtitle">Rentals from ₹8500/month</div>
					</a>	
				</div>
			</div>
		</div>
	</div>-->

	<!-- Testimonials -->

	<div class="testimonials">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title">What our clients say</div>
					<div class="section_subtitle">Search your dream home</div>
				</div>
			</div>
			<div class="row testimonials_row">
				
				<!-- Testimonial Item -->
				<div class="col-lg-4 testimonial_col">
					<div class="testimonial">
						<div class="testimonial_title">Amazing home for me</div>
						<div class="testimonial_text">The association with commonfloor.com has been very fruitful, these people know every bit of real estate market, and their quality work has been provided us with a new boost in our business, they are the new sunshine in online real estate portal.</div>
						<div class="testimonial_author_image"><img src="images/um.jpg" alt=""></div>
						<div class="testimonial_author"><a href="#">Umesh Metkari</a><span>, Client</span></div>
						<div class="rating_r rating_r_5 testimonial_rating"><i></i><i></i><i></i><i></i><i></i></div>
					</div>
				</div>

				<!-- Testimonial Item -->
				<div class="col-lg-4 testimonial_col">
					<div class="testimonial">
						<div class="testimonial_title">Friendly Realtors</div>
						<div class="testimonial_text">PropertyBazaar.com helped us in reaching distant customers. Partnering with PropertyBazaar.com enhances our brand Image in the are where dazzle have lesser presence. Leads provided by PropertyBazaar.com team are focused and this led to lower conversion costs.</div>
						<div class="testimonial_author_image"><img src="images/sy.jpg" alt=""></div>
						<div class="testimonial_author"><a href="#">Shubham Yadav</a><span>, Client</span></div>
						<div class="rating_r rating_r_5 testimonial_rating"><i></i><i></i><i></i><i></i><i></i></div>
					</div>
				</div>

				<!-- Testimonial Item -->
				<div class="col-lg-4 testimonial_col">
					<div class="testimonial">
						<div class="testimonial_title">Very good communication</div>
						<div class="testimonial_text">As a CF user for more than half a decade now, it has been an exciting and eventful journey for us. It indeed has been a game changer of sorts in the real estate industry. Thank you and keep up the good work!</div>
						<div class="testimonial_author_image"><img src="images/yw.jpg" alt=""></div>
						<div class="testimonial_author"><a href="#">Yash Wavhal</a><span>, Client</span></div>
						<div class="rating_r rating_r_5 testimonial_rating"><i></i><i></i><i></i><i></i><i></i></div>
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
					<div class="newsletter_content d-flex flex-lg-row flex-column align-items-start justify-content-start">
					</div>
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
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>