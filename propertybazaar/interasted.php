<?php 
	session_start(); 
$username=$_SESSION['username'];


?>


<html>
 <head>
  
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
   body
   {
    margin:0;
    padding:0;
    background-color:#f1f1f1;
   }
   .box
   {
    width:1270px;
    padding:20px;
    background-color:#fff;
    border:1px solid #ccc;
    border-radius:5px;
    margin-top:25px;
   }
  </style>
  

 </head>
 <body>
 <br>
 <br>
 
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
								<li><a href="update.php">My profile</a></li>
								
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
	
	

 
  <div class="container box">
  <br>
  <br>
	
   <div class="table-responsive">
    <table id="order_data" class="table table-bordered table-striped">
     <thead>
      <tr>
       <th>Name</th>
		<th>Email</th>
		<th>Phone no</th>
		
		
      </tr>
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
$username=$_SESSION['username'];	
$sid = $_GET['sid'];
$sql = "SELECT u.name,u.email,u.phoneno from user u,interested i,property p WHERE i.id=p.p_id and i.id='$sid' and i.username=u.username;";
$run=mysqli_query($conn,$sql);

if (!$run || mysqli_num_rows($run) == 0)
{
	echo "<tr><td colspan='6'>no record found</td></tr>";
	
}
else
{
	while($data=mysqli_fetch_assoc($run))
	{
		?>
		<tr>
		<td><?php echo $data['name'];?></td>
		<td><?php echo $data['email'];?></td>
		<td><?php echo $data['phoneno'];?></td>
		
		
	</tr>
		
		<?php
			
	}
}
	

?>
     </thead>
    </table>
    
   </div>
  </div>
  
  	</div>
 
 </body>
</html>

