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
$p_id = $_REQUEST['sid'];
$sql = "DELETE FROM `property` WHERE p_id='$p_id';";
		    $run=mysqli_query($conn, $sql);
			if($run == true)
			{
				?>
			<script>
			alert('Successfully Deleted the property');
			window.open('update.php','_self');
			</script>
			<?php
			}



?>