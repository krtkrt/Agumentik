<?php
$conn = mysqli_connect("localhost", "root", "", "vali");
if (isset($_POST["submit"])) {
	$na = $_POST["name"];
	$em = $_POST["email"];
	$pas = $_POST["password"];
	$gen = $_POST["gender"];
	$ins = "INSERT INTO tracker(emp_name,emp_email,emp_password,emp_gender) VALUES('".$na."','".$em."','".$pas."','".$gen."')";
	$qu = mysqli_query($conn, $ins);
	if ($qu) {
		header("Location:login.php");
	}
}
 ?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<title></title>
	<style type="text/css">
		p {
			color: red;
		}
	</style>
</head>
<body>
	<div class="container">
		<form method="post" action="#">
		<label>Employee Name</label><br>
		<input type="text" name="name" id="name" value=""><br><p id="nameerror"></p>
		<label>Employee Email</label><br>
		<input type="text" name="email" id="email" value=""><br><p id="emailerror"></p>
		<label>Employee Password</label><br>
		<input type="password" name="password" id="password" value=""><br><p id="passerror"></p>
		<label>Employee Gender</label>&nbsp;&nbsp;
		<label>Male</label>
		<input type="radio" name="gender" id="gender" value="male">
		<label>Female</label>
		<input type="radio" name="gender" id="gender" value="female"><br><p id="gendererror"></p>
		<input type="hidden" name="id1" id="id1" value="">	
		<input type="submit" name="submit" id="submit" value="Register" onclick="return validateform()"><br>

	</form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"> </script>


<script type="text/javascript">
		function validateform()
		{
			$("#nameerror").html("");
			$("#emailerror").html("");
			$("#passerror").html("");
			$("#gendererror").html("");
			var name = $('#name').val();
			var email = $('#email').val();
			var pass = $('#password').val();
			var gend = $('input[type="radio"]:checked').val();
			var valid = true;
			if (name == '') {
				 $("#nameerror").html("Name can not be empty");
				 valid = false;
			}
			if (email == '') {
				 $("#emailerror").html("Email can not be empty");
				 valid = false;
			}
			if (pass == '') {
				 $("#passerror").html("Password can not be empty");
				 valid = false;
			}
			if (!gend) {
				 $("#gendererror").html("Gender can not be empty");
				 valid = false;
			}
			return valid;
		}
	</script>

</body>
</html>