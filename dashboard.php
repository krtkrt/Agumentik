<?php 
$con = mysqli_connect("localhost", "root", "", "vali");
    if(isset($_POST['submit'])){
    	$pro_name = $_POST['p_name'];
        $pro_price = $_POST['p_price'];
        $loca = $_POST['location'];
        $p_image = $_FILES['image']['name'];
        $p_image_tmp = $_FILES['image']['tmp_name'];
        

        move_uploaded_file($p_image_tmp,"propert_images/$p_image");

        $ins = "INSERT INTO data_table (property_name,pro_price,property_loc,file_name) values ('".$pro_name."','".$pro_price."','".$loca."','".$p_image."')";
        $quer = mysqli_query($con, $ins); 
        if ($quer) {
            header("Location:dashboard.php");
        }else{
            echo "fail";
        }
    }

?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" rel="stylesheet">
	<title></title>
	<style type="text/css">
		p {
			color: red;
		}
	</style>
</head>
<body>
		<div class="container">
		<form method="post" action="#"  enctype="multipart/form-data">
			<label>Property Name</label><br>
			<input type="text" name="p_name" id="p_name" value=""><br>
			<label>Property Price</label><br>
			<input type="text" name="p_price" id="p_price" value=""><br>
			<label>Location</label><br>
			<input type="text" name="location" id="location" value=""><br>			
			<label>Product Image</label><br>
			<input type="file" name="image" id="image" value=""><br>
			<br><input type="submit" name="submit" id="submit" value="Add Property">
        </form>
    </div><br>

    
    <div class="container">
    	<?php
    	$sel = "SELECT * FROM data_table";
    	$qu = mysqli_query($con,$sel);


    	?>
    	<table id="myTable" class="table table-bordered text-center">
    		<thead>
    			
    			<tr>
    				<th>S.No</th>
    				<th>Property Name</th>
    				<th>Property Price</th>
    				<th>Location</th>
    				<th>Image</th>
    				<th>Action</th>
    			</tr>
    		</thead>
    		<tbody>
    			<?php 
    			$x = 1;
    			while ($z=mysqli_fetch_array($qu)) {
    				
    			?>
    			<tr>
    				<td><?php echo $x++; ?></td>
    				<td><?php echo $z["property_name"]; ?></td>
    				<td><?php echo $z["pro_price"]; ?></td>
    				<td><?php echo $z["property_loc"]; ?></td>
    				<td><?php echo $z["file_name"]; ?></td>
    				<td><a href="update.php?id=<?php echo $z["id"]; ?>">Edit</a>&nbsp;|&nbsp;<a href="delete.php?id=<?php echo $z["id"]; ?>">Delete</a> </td>
    			</tr>
    			<?php } ?>
    		</tbody>
    	</table>
    </div>
    <div class="container">
    	<a href="logout.php" class="btn btn-primary">Logout</a>
    </div>
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> -->
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"> </script>
<script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

	
	<script type="text/javascript">
		$(document).ready( function () {
    $('#myTable').DataTable();
} );
	</script>
</body>
</html>