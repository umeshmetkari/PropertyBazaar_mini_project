<?php
$servername = "localhost";
$username = "root";
$password ="";
$dbname="my_db";
$errors = array();
try{
	$conn = mysqli_connect($servername,$username,$password,$dbname);
}catch(MySQLi_sql_Exception $ex){
	echo ("error in connection");
}
  $name="";
	$address="";
	$phoneno="";
	$email="";
	$username="";
	$password1="";
	$password2="";
	
	
if(isset($_POST['submit'])){
	session_start();
	$name=$_POST['name'];
	$address=$_POST['address'];
	$phoneno=$_POST['phoneno'];
	$email=$_POST['email'];
	$username=$_POST['username'];
	$password1=$_POST['password1'];
	$password2=$_POST['password2'];
	
		
			if (count($errors)==0){
            	$sql="select * from user where username='$username'";
				
$result=mysqli_query($conn,$sql) or die(mysqli_error($conn));


if (mysqli_num_rows($result)>0)
{
	$name_error="Username is already taken";
	
}
else{
	
		$password = md5($password1);
			
			$sql = "insert into user (name, address, phoneno, email, username, password1) values('$name','$address','$phoneno','$email','$username','$password1')";
		    $run=mysqli_query($conn, $sql);
			
			
			//$_SESSION['message'] = "login successfully";
			//$_SESSION['username'] = $username;
			//echo "<script>alert('Successfully registered')</script>";
			//header("location: index.php");
			
			if($run == true)
			{
				?>
			<script>
			alert('Successfully Registered');
			window.open('index.php','_self');
			</script>
			<?php
			}
	
	       
		}
			}
}

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
<style>
.form_error span{
width: 80%;
height: 35%;
margin: 3px 10px;
font-size=1.1em;
color: #D83D5A;

}

.form_error input{
border: 1px solid #D83D5A;

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
								
								<li><a href="contact.php">Contact</a></li>
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
<p><select name="role" ><option value="">---</option><option value="User">User</option><option value="Admin">Admin</option></select></span>
</p>-->
      <button type="submit" class="contact_button button">login</button> 
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
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
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/about.jpg" data-speed="0.8"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content d-flex flex-row align-items-end justify-content-start">
							<div class="home_title">Registration</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	
<form action="" method="post">
		<div class="container">
			
			<div class="col-md-4">
<!--<h4 class="mt_submit_title"><b>Registration</b></h4>-->
<p></p></div>
<div
<?php if(isset($name_error)):?>
class="form_error"
<?php endif ?>
>

<div class="col-md-8 mt_margin_top_15">
<h6><p class="mt_submit_title_label">Name:</p></h6>
<p><span><input type="text" placeholder="Name" value="<?php echo $name;?>" name="name" size="40" REQUIRED></span></p>

<h6><p class="mt_submit_title_label">Address:</p></h6>
<p style="margin-bottom: 14px !important;"><span class="wpcf7-form-control-wrap descriptiontext"><textarea name="address" value="<?php echo $address;?>" cols="40" rows="2" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" aria-required="true" aria-invalid="false" REQUIRED></textarea></span></p>

<h6><p class="mt_submit_title_label">Phone No:</p></h6>
<p><span class="wpcf7-form-control-wrap titleMandatory"><input type="number" value="<?php echo $phoneno;?>" name="phoneno"placeholder="Phone No" value="" size="20"  aria-required="true" aria-invalid="false" REQUIRED></span></p>

<h6><p class="mt_submit_title_label">Email:</p></h6>
<p><span><input type="email" placeholder="Email" value="<?php echo $email;?>" name="email"size="40" REQUIRED></span></p>
<p></p></div>
			 
<div class="col-md-4 mt_margin_top_15">
<!--<h6><p class="mt_submit_title_label">Role</p></h6>
<p><span class="wpcf7-form-control-wrap categorySelect"><select name="role" class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required" aria-required="true" aria-invalid="false"><option value="">---</option><option value="Buyer">User</option></select></span>
</p>-->
<h6><p class="mt_submit_title_label">Username:</p></h6>
<p><span><input type="text"  placeholder="Username" value="<?php echo $username;?>" name="username"size="40" REQUIRED></span></p>
<?php if (isset($name_error)):?>
<span><?php echo $name_error;?></span>
<?php endif ?>
<h6><p class="mt_submit_title_label">Password:</p></h6>
<p><span><input type="Password" value="" size="40"id="myInput" name="password1"pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" REQUIRED></span></p>
<input type="checkbox" onclick="myFunction()">Show Password<br>

<script>
function myFunction() {
    var x = document.getElementById("myInput");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
</script>
<p>
</p>
<h6><p class="mt_submit_title_label">Re-Enter Password</p></h6>
<p><span><input type="Password" value="" name="password2"size="40" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" REQUIRED></span></p>


<p></p></div>
		
		<div class="row" style="">

		</div>
		
		<div class="clearfix"></div>
		<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4 mt_button_add_property"><input type="submit" class="contact_button button" name="submit" value="Sign Up" class="wpcf7-form-control wpcf7-submit"><span class="ajax-loader"></span></div>
<div class="col-md-4"></div></div>


		</div>
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
<script src="js/about.js"></script>
</body>
</html>