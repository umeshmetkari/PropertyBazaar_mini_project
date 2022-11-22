<?php
$con=mysqli_connect("localhost","root","") or die(mysql_error());
$db=mysqli_select_db($con,"my_db") or die(mysql_error());
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Properties</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/properties.css">
<link rel="stylesheet" type="text/css" href="styles/properties_responsive.css">
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
								<li class="active"><a href="properties.php">Properties</a></li>								
								<li><a href="contact.php">Contact</a></li>
								<li><a href="registration.php">Registration</a></li>
							</ul>
						</nav>
						
								<button onclick="document.getElementById('id01').style.display='block'" class="contact_button button">LOGIN</button>

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
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/properties.jpg" data-speed="0.8"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content d-flex flex-row align-items-end justify-content-start">
							<div class="home_title">Properties</div>
							<div class="breadcrumbs ml-auto">
								<ul>
									
									<li>Properties</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Properties -->
				
				<?php
			//$query ="CALL getdata()";
			$query="select image,Title,Price,Area,p_id,categorySelect from property ;";
			$result = mysqli_query($con,$query);
			while($row=mysqli_fetch_array($result))
			{
				?>
	<div class="properties">
		<div class="container">
			<div class="row">
				<div class="col">
					
				</div>
			</div>
			<div class="row properties_row">
				
				<!-- Property -->
				<div class="col-xl-4 col-lg-6 property_col">
					<div class="property">
						<div class="property_image">
							<img src="img/<?php echo $row["image"];?>">
							<div class="tag_featured property_tag"><a href="#">Sale</a></div>
						</div>
						<div class="property_body text-center">
							<div class="property_location"><?php echo $row["Title"];?></div>
							<div class="property_title"><a href="#" onclick="myFunction()"><?php echo $row["categorySelect"];?></a>
							<script>
							function myFunction(){
							 alert("You Must Login First");
							}
							</script>
							</div>
							
							<div class="property_price">₹<?php echo $row["Price"];?></div>
						</div>
						<div class="property_footer d-flex flex-row align-items-center justify-content-start">
							<div><div class="property_icon"><img src="images/icon_1.png" alt=""></div><span><?php echo $row["Area"];?>Sqft</span></div>
							
						</div>
					</div>
				</div>												
			</div>
			
		</div>
	</div>
	
	<?php
				
			}
			?>
		


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
						<div class="footer_logo"><a href="#"><img src="" alt=""></a></div>
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
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/properties.js"></script>
</body>
</html>