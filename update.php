<?php 
$con = mysqli_connect("localhost", "root", "", "vali");
    $get = $_GET["id"];
	$sel = "SELECT * FROM data_table WHERE id = '".$get."' ";
	$que = mysqli_query($con, $sel);
	while ($z = mysqli_fetch_array($que)) {
					$pr_name = $z["property_name"];
    				$pr_price = $z["pro_price"];
    				$loc = $z["property_loc"];
    				$img = $z["file_name"];
    				$iden = $z["id"];
	}

?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<title></title>
</head>
<body>
		<div class="container">
		<form method="post" action="#" enctype="multipart/form-data">
			<label>Property Name</label><br>
			<input type="text" name="p_name" id="p_name" value="<?php echo $pr_name; ?>"><br>
			<label>Property Price</label><br>
			<input type="text" name="p_price" id="p_price" value="<?php echo $pr_price; ?>"><br>
			<label>Location</label><br>
			<input type="text" name="location" id="location" value="<?php echo $loc; ?>"><br>
			<label>Product Image</label><br>
			<input type="file" name="image" id="image" value=""><br>
			<input type="hidden" name="uplimage" id="uplimage" value="<?php echo $img; ?>">
			<input type="hidden" name="id" id="id" value="<?php echo $iden; ?>"><br>
			<input type="submit" name="submit" id="submit" value="Update">
        </form>
    </div><br>
    <?php 
    if(isset($_POST['submit'])){
    	$pro_name = $_POST['p_name'];
        $pro_price = $_POST['p_price'];
        $locat = $_POST['location'];
        $p_image = $_FILES['image']['name'];
        $ide = $_POST["id"];
        $dir = "propert_images/";
        if ( $p_image== "") 
        {

     		$fi = $_POST["uplimage"];
    	}
    	else
    	{
      		$fil = $_POST["uplimage"];
      		unlink($dir.'/'.$fil);
    	}
    	$p_image_tmp = $dir . basename($_FILES["image"]["name"]);
    	if (move_uploaded_file($_FILES["image"]["tmp_name"], $p_image_tmp))
    	{
        	$up = "UPDATE data_table SET property_name = '".$pro_name."', pro_price = '".$pro_price."', property_loc = '".$locat."', file_name = '".$p_image."' WHERE id = '".$ide."' ";
        	$qu = mysqli_query($con, $up); 
        	if ($qu) {
            	header("Location:dashboard.php");
        	}else{
            	echo "fail";
        	}
    	}
    }

    ?>
	
</body>
</html>