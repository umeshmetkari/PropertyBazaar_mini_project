<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "my_db");
$columns = array('p_id', 'Title', 'categorySelect', 'Price', 'Area', 'Username', 'Date');

$query = "SELECT * FROM property WHERE";

if($_POST["is_date_search"] == "yes")
{
 $query .= 'date BETWEEN "'.$_POST["start_date"].'" AND "'.$_POST["end_date"].'" AND ';
}

if(isset($_POST["search"]["value"]))
{
 $query .= '
  (p_id LIKE "%'.$_POST["search"]["value"].'%" 
  OR Title LIKE "%'.$_POST["search"]["value"].'%" 
  OR categorySelect LIKE "%'.$_POST["search"]["value"].'%" 
  OR price LIKE "%'.$_POST["search"]["value"].'%"
  OR Area LIKE "%'.$_POST["search"]["value"].'%"
  OR Username LIKE "%'.$_POST["search"]["value"].'%")
 ';
}

if(isset($_POST["order"]))
{
 $query .= 'ORDER BY '.$columns[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' 
 ';
}
else
{
 $query .= 'ORDER BY p_id DESC ';
}

$query1 = '';

if($_POST["length"] != -1)
{
 $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$number_filter_row = mysqli_num_rows(mysqli_query($connect, $query));

$result = mysqli_query($connect, $query . $query1);

$data = array();

while($row = mysqli_fetch_array($result))
{
 $sub_array = array();
 $sub_array[] = $row["p_id"];
 $sub_array[] = $row["Title"];
 $sub_array[] = $row["categorySelect"];
 $sub_array[] = $row["Price"];
 $sub_array[] = $row["Area"];
 $sub_array[] = $row["Username"];
 $sub_array[] = $row["Date"];
 $data[] = $sub_array;
}

function get_all_data($connect)
{
 $query = "SELECT * FROM property";
 $result = mysqli_query($connect, $query);
 return mysqli_num_rows($result);
}

$output = array(
 "draw"    => intval($_POST["draw"]),
 "recordsTotal"  =>  get_all_data($connect),
 "recordsFiltered" => $number_filter_row,
 "data"    => $data
);

echo json_encode($output);

?>	