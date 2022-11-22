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


$Rate=$_POST['Rate'];
$Area=$_POST['Area'];
$price=$Rate * $Area;

$p_id=$_POST['sid'];

	 $img=$_FILES['image']['name'];
    $tmp=$_FILES['image']['tmp_name'];
move_uploaded_file($tmp, "img/$img");
	
	

	
			
			
			$sql = "UPDATE `property` SET `Price` = '$price', `Area` = '$Area', `Rate` = '$Rate', `image`='$img' WHERE `p_id` = '$p_id';";
		    $run=mysqli_query($conn, $sql);
			if($run == true)
			{
				?>
			<script>
			alert('Successfully Updated the property');
			window.open('update.php?sid=<?php echo $p_id;?>','_self');
			</script>
			<?php
			}
?>