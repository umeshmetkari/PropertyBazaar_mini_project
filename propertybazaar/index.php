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

<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 7px 10px;
  
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
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
								<li class="active"><a href="index.php">Home</a></li>
								<li><a href="about.php">About us</a></li>
								<li><a href="properties.php">Properties</a></li>
								<li><a href="contact.php">Contact</a></li>
								<li><a href="registration.php">Registration</a></li>
							</ul>
						</nav>
						
								<button onclick="document.getElementById('id01').style.display='block'" class="contact_button button"></button>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="test.php" method="post">
    

    <div class="container">
      <label for="username"><b>username</b></label>
      <input type="text" placeholder="Enter Username" name="username" required>

      <label for="password"><b>password</b></label>
      <input type="password" placeholder="Enter Password" name="password1" required>
        <div class="col-md-4 mt_margin_top_15">
<!--<label for="role"><b>Role</b></label>
<p><select name="role" ><option value="">---</option><option value="Buyer">User</option><option value="Seller">Admin</option></select></span>
</p>-->

      <button type="submit" class="contact_button button">login</button> 
     
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      
    </div>
  </form>
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

				<!-- Slide -->
				

				<!-- Slide -->
				

			</div>
		</div>
	</div>


	<!-- Cities -->

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

			<!-- City -->
			<!--<div class="city">
				<img src="images/city_3.jpg" alt="https://unsplash.com/@hellolightbulb">
				<div class="city_overlay">
					<a href="#" class="d-flex flex-column align-items-center justify-content-center">
						<div class="city_title">Kolkata</div>
						<div class="city_subtitle">Rentals from ₹8500/month</div>
					</a>	
				</div>
			</div>

			
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
						<div class="city_title">Hyderabad</div>
						<div class="city_subtitle">Rentals from ₹8500/month</div>
					</a>	
				</div>
			</div>

			
			<div class="city">
				<img src="images/city_7.jpg" alt="https://unsplash.com/@sawyerbengtson">
				<div class="city_overlay">
					<a href="#" class="d-flex flex-column align-items-center justify-content-center">
						<div class="city_title">Jaipur</div>
						<div class="city_subtitle">Rentals from ₹8500/month</div>
					</a>	
				</div>
			</div>

			
			<div class="city">
				<img src="images/city_8.jpg" alt="https://unsplash.com/@mathewwaters">
				<div class="city_overlay">
					<a href="#" class="d-flex flex-column align-items-center justify-content-center">
						<div class="city_title">Ahmedabad</div>
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
						<div class="rating_r rating_r_4 testimonial_rating"><i></i><i></i><i></i><i></i><i></i></div>
					</div>
				</div>

				<!-- Testimonial Item -->
				<div class="col-lg-4 testimonial_col">
					<div class="testimonial">
						<div class="testimonial_title">Friendly Realtors</div>
						<div class="testimonial_text">PropertyBazaar.com helped us in reaching distant customers. Partnering with PropertyBazaar.com enhances our brand Image in the are where dazzle have lesser presence. Leads provided by PropertyBazaar.com team are focused and this led to lower conversion costs.</div>
						<div class="testimonial_author_image"><img src="images/sy.jpg" alt=""></div>
						<div class="testimonial_author"><a href="#">Shubham Yadav</a><span>, Client</span></div>
						<div class="rating_r rating_r_4 testimonial_rating"><i></i><i></i><i></i><i></i><i></i></div>
					</div>
				</div>

				<!-- Testimonial Item -->
				<div class="col-lg-4 testimonial_col">
					<div class="testimonial">
						<div class="testimonial_title">Very good communication</div>
						<div class="testimonial_text">As a CF user for more than half a decade now, it has been an exciting and eventful journey for us. It indeed has been a game changer of sorts in the real estate industry. Thank you and keep up the good work!</div>
						<div class="testimonial_author_image"><img src="images/yw.jpg" alt=""></div>
						<div class="testimonial_author"><a href="#">Yash Wavhal</a><span>, Client</span></div>
						<div class="rating_r rating_r_3 testimonial_rating"><i></i><i></i><i></i><i></i><i></i></div>
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
						
							<div class="footer_phone ml-auto"><span>call us: </span>951 195 8260 </div>
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