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
$sid = $_GET['sid'];

$sql="SELECT * FROM property WHERE  p_id ='$sid'";
$run=mysqli_query($conn,$sql);

$data=mysqli_fetch_assoc($run);

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
								<li><a href="about1.php">About us</a></li>
								<li><a href="properties1.php">Properties</a></li>
								
								<li><a href="contact1.php">Contact</a></li>
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
							<div class="home_title">My Profile</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	
		<form method="post" action="updatedata.php" enctype="multipart/form-data">
			<div class="container">
			
				<div class="col-md-4">
					<h4 class="mt_submit_title">Property Description</h4>
					
				</div>

					<div class="col-md-8 mt_margin_top_15">
	
						<p class="mt_submit_title_label"><b>Rate</b></p>
						<p><span class="wpcf7-form-control-wrap titleMandatory"><input type="numbers" name="Rate" value=<?php echo $data['Rate'];?> size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" REQUIRED></span></p>

						<p class="mt_submit_title_label"><b>Area</b></p>
						<p><span class="wpcf7-form-control-wrap titleMandatory"><input type="tel" name="Area" value=<?php echo $data['Area'];?> size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" REQUIRED></span></p>
				
				
						<p></p>
					</div><br>
		
		
					<div class="row" style="margin-top: 27px;">
						<div class="col-md-4">
							<h4 class="mt_submit_title">Property Media</h4>
							<p class="mt_submit_subtitle">You can select multiple images to upload at one time.</p>
							<p></p>
						</div>
						<div class="col-md-8 mt_margin_top_15">
							<span class="wpcf7-form-control-wrap listingMedia"><input type="file" name="image" size="40" class="wpcf7-form-control wpcf7-file" ></span>
						</div>
					</div><br>
		
					<div class="clearfix"></div>
		
					<div class="row" style="">

		
						<div class="clearfix"></div>
		
		<div class="row" style="">


		</div>
		
		</div>
		<div class="clearfix"></div>
	
		<hr class="mt_submit_hr">
		
		<div class="row" style="">

		</div>
		
		<div class="clearfix"></div>
		<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4 mt_button_add_property">
<input type="hidden" name="sid" value="<?php echo $data['p_id'];?>"/>
<ul>
<input type="submit" value="UPDATE PROPERTY" name="submit" class="wpcf7-form-control wpcf7-submit">
</ul>
</div>

<div class="col-md-4"></div></div>


		
		</form>
	

	
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
						<div class="footer_logo"><a href="#"><img src="images/logo_large.png" alt=""></a></div>
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

