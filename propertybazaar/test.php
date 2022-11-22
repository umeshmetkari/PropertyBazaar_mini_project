<?php
session_start();
$con=mysqli_connect("localhost","root","") or die(mysql_error());
$db=mysqli_select_db($con,"my_db") or die(mysql_error());


$username=$_POST["username"];
$password1=$_POST["password1"];	


	
	
	
$sql="select role from user where username='$username'and password1='$password1';";
$result=mysqli_query($con,$sql)or die( mysqli_error($db));

$count=0;
$status='';
$response=array(); 
while($row=mysqli_fetch_array($result))
{
	$count=1;
	$type=$row['role'];
}
if($count==1)
{

				if ( $type=="Admin") {
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in";
				echo "<script>alert('Successfully Logged In')</script>";
				header('location: admin.php');
				
			}
			else  {
			
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in";
				echo "<script>alert('Successfully Logged In')</script>";
				header('location: index1.php');
				
				}
			
}
else
{
?>
<script>
alert('Please Enter Correct Username And Password');
	window.open('index.php','_self');
	</script>
	<?php

//echo "<script>alert('not logged')</script>";
}

?> 