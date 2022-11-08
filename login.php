<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "vali");
if (isset($_POST["submit"])) {
	
	$em = $_POST["email"];
	$pa = $_POST["pass"];
	$sel = 'SELECT * FROM tracker';
	$qu = mysqli_query($conn, $sel);
	while ($z = mysqli_fetch_assoc($qu)) {
		if ($z["emp_email"] == $em && $z["emp_password"] == $pa) {
		
        header("Location:dashboard.php");
	}
	
}
	
	
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<title></title>
	<style type="text/css">
		h4 {
			color: red;
		}
		h6 {
			color: red;
		}
	</style>
</head>
<body>
<form method="post" action="#">
	
	<label>Employee Email</label><br>
	<input type="text" name="email" id="email" value=""><br><h6 id="nameerror"></h6>
	<label>Employee Password</label><br>
	<input type="password" name="pass" id="pass" value=""><br><h6 id="passerror"></h6>
	<br><input type="submit" name="submit" id="submit" value="login" onclick="return validateform()">
</form>

<p>Not Register? <a href="register.php">Register Here</a> </p>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"> </script>


<script type="text/javascript">
		function validateform()
		{
			$("#nameerror").html("");
			$("#passerror").html("");
			var email = $('#email').val();
			var pass = $('#pass').val();
			var valid = true;
			if (email == '') {
				 $("#nameerror").html("Field can not be empty");
				 valid = false;
			}
			if (pass == '') {
				 $("#passerror").html("Field can not be empty");
				 valid = false;
			}
			return valid;
		}
	</script>
</body>
</html>