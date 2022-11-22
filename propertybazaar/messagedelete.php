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
$Username = $_REQUEST['sid'];
$sql = "DELETE FROM `message` WHERE Username='$Username';";
		    $run=mysqli_query($conn, $sql);
			if($run == true)
			{
				?>
			<script>
			alert('Successfully Deleted the property');
			window.open('message.php','_self');
			</script>
			<?php
			}



?>