<?php
if(isset($_POST['submit'])){
$Name = "Name:".$_POST['employeeName']."";
$Email_ID_Original = "EmailAddress:".$_POST['emailAddr']."";
$file=fopen("saved.txt", "a");
fwrite($file, $Name);
fwrite($file, $Email_ID_Original);
fwrite($file, "\n");
fclose($file);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>OakNorth</title>
	
	  
	 <link rel="icon" href="images/Oaknorth_favicon.ico" type="image/x-icon"" sizes="16x16" />

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=0.41, maximum-scale=1" />
<!--===============================================================================================-->	
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
			
			<div class="login100-pic">
			<img src="images/Christmas_image_2.png" alt="IMG">
					<img src="images/oak_north_logo_3.png" alt="IMG">
				</div>
				

				<form class="login100-form validate-form" name="myForm"  method="POST">
					<span class="login100-form-title">
						Employee Registration
					</span>

					<div class="wrap-input100">
						<input class="input100" type="text" name="employeeName" placeholder="Name">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user-circle-o" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100">
						<input class="input100" type="text" name="emailAddr" placeholder="Email Address">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-id-card" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" id="bt" value="SAVE" type="submit" name="submit" onClick="myFunction()">
							Register
						</button>
					</div>

					
				</form>
			</div>
		</div>
	</div>

</body>
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	
	 <script>
  function myFunction() {
	  var checkIfEmpty = emptyValidation();
	  
	  if(checkIfEmpty==true){
  alert('Thanks for the submission');

	  }
  }
  
  function emptyValidation(){
	  
	var x = document.forms["myForm"]["employeeName"].value;
	var y = document.forms["myForm"]["emailAddr"].value;

	if (x === "" || y === "") {
		alert("Name and email address must be filled out");
		return false;
	}
	else
		return true;
	
  }
 </script>
</html>