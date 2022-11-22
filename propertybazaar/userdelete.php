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
$username = $_REQUEST['sid'];
$sql = "DELETE FROM `user` WHERE username='$username';";
		    $run=mysqli_query($conn, $sql);
			if($run == true)
			{
				?>
			<script>
			alert('Successfully Deleted the property');
			window.open('users.php','_self');
			</script>
			<?php
			}



?>