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
								<li><a href="index.php">Home</a></li>
								<li><a href="about.php">About us</a></li>
								<li><a href="properties.php">Properties</a></li>
								
								<li class="active"><a href="contact.php">Contact</a></li>
								<li><a href="registration.php">Registration</a></li>
							</ul>
						</nav>
						
								<button onclick="document.getElementById('id01').style.display='block'" class="contact_button button">Login</button>

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

				<!-- Contact Form 
				<div class="col-lg-8">
					<div class="contact_form_container">
						<form action="#" class="contact_form" id="contact_form" method="post">
							<div class="row">
							
								<div class="col-lg-6 contact_name_col">
									<input type="text" class="contact_input" placeholder="Username" name="Username" required="required">
								</div>
							
								<div class="col-lg-6">
									<input type="email" class="contact_input" placeholder="E-mail" name="email" required="required">
								</div>
							</div>
							<div><input type="text" class="contact_input" placeholder="Subject" name="subject" required></div>
							<div><textarea class="contact_textarea contact_input" placeholder="Message" name="message" required="required"></textarea></div>
							<button class="contact_button button" name="submit">send</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>-->

	

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

	 
	
	

	
			
			
			$sql = "insert into message values (null,'$Username','$email','$subject','$message')";
		    mysqli_query($conn, $sql);
			echo "<script>alert('Message send')</script>";
			
}

?>