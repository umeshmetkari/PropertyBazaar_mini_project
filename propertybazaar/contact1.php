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
<title>Contact</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Bluesky template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/rangeslider.js-2.3.0/rangeslider.css">
<link rel="stylesheet" type="text/css" href="styles/contact.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
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
								<li><a href="seller.php">Add Property</a></li>
								<li class="active"><a href="contact1.php">Contact</a></li>
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
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/contact.jpg" data-speed="0.8"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content d-flex flex-row align-items-end justify-content-start">
							<div class="home_title">Contact</div>
							<div class="breadcrumbs ml-auto">
								<ul>
									
									<li>Contact</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	

	<!-- Contact -->

	<div class="contact">
		<div class="container">
			<div class="row">

				<!-- Contact Info -->
				<div class="col-lg-4">
					<div class="contact_info">
						<div class="section_title">Get in touch with us</div>
						
							<div class="contact_info_content">
							<ul class="contact_info_list">
								<li>
									<div>Address:</div>
									<div>Kothroud Pune 411038</div>
								</li>
								<li>
									<div>Phone:</div>
									<div>+91 9511958260</div>
								</li>
								<li>
									<div>Email:</div>
									<div>propertybazaar@info.com</div>
								</li>
							</ul>
						</div>
					</div>
				</div>

				<!-- Contact Form -->
				<div class="col-lg-8">
					<div class="contact_form_container">
						<form action="#" class="contact_form" id="contact_form" method="post">
							<div class="row">
								<!-- Name -->
								<div class="col-lg-6 contact_name_col">
									<input type="text" class="contact_input" placeholder="Username" name="Username" value="<?php echo $username;?>" readonly="readonly" required="required">
								</div>
								<!-- Email -->
								<div class="col-lg-6">
									<input type="email" class="contact_input" placeholder="E-mail" name="email" required="required">
								</div>
							</div>
							<div><input type="text" class="contact_input" placeholder="Subject"name="subject" required></div>
							<div><textarea class="contact_textarea contact_input" placeholder="Message" name="message" required="required"></textarea></div>
							<button class="contact_button button" name="submit">send</button>
						</form>
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
						<div class="newsletter_title_container">
							
						</div>
						
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
<script src="plugins/easing/easing.js"></script>
<script src="plugins/rangeslider.js-2.3.0/rangeslider.min.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="js/contact.js"></script>
</body>
</html>
<?php
$servername = "localhost";
$username = "root";
$password ="";
$dbname="my_db";

try{
	$conn = mysqli_connect($servername,$username,$password,$dbname);
}catch(MySQLi_sql_Exception $ex){
	echo ("error in connection");
}
if(isset($_POST['submit'])) {
$Username=$_POST['Username'];
$email=$_POST['email'];	
$subject=$_POST['subject'];	
$message=$_POST['message'];	

	 
	
	

	
			
			
			$sql = "insert into message(Username,email,subject,message) values ('$Username','$email','$subject','$message')";
		    mysqli_query($conn, $sql);
			echo "<script>alert('Message send')</script>";
			
}

?>