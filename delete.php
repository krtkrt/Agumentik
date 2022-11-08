<?php
$conn = mysqli_connect("localhost", "root", "", "vali");
$get = $_GET["id"];
$sel = "SELECT * FROM data_table WHERE id = '".$get."' ";
$query = mysqli_query($conn, $sel);
if ($x = mysqli_fetch_array($query)) {
	$file_name = $x["file_name"];
}
$var = $query->num_rows;
 if ($var == '1') {
 	$del = "DELETE FROM data_table WHERE id = '".$get."' ";
 	$q = mysqli_query($conn, $del);
 	$dir = "propert_images";
	unlink($dir.'/'.$file_name);


 	if ($q) {
 		header("Location:dashboard.php");
 	}else {
 		echo "failed";
 	}
 }
 ?>
 

