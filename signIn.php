
<html lang="en">
<head>
	<title>Login HU-SC</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="register/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="register/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="register/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="register/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="register/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="register/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="register/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="register/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="register/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="register/css/util.css">
	<link rel="stylesheet" type="text/css" href="register/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	<?php
	
 $con = mysqli_connect("localhost","root","Attar1234","huu");
	 // When form submitted, insert values into the database.
    if (isset($_POST['email'])) {
		 // removes backslashes
        $email = stripslashes($_POST['email']);
		  //escapes special characters in a string
        $email = mysqli_real_escape_string($con, $email);
	   
		$password = stripslashes($_POST['password']);
        $password = mysqli_real_escape_string($con, $password);
		 $query    = "SELECT * FROM users WHERE email='$email' and password='$password'";
		 $result   = mysqli_query($con, $query);
	
	 if ($result -> num_rows > 0) {
		 
           header("Location:IT/index.php");
           die();
		   
        } else {
            echo "<script>alert('email or password is not correct');</script>";
        }
	
	
	}
?>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form  autocomplete="false" class="login100-form validate-form" method="POST" action="signIn.php" >
					<span class="login100-form-title p-b-34">
						Account Login
					</span>
					
					<div class="wrap-input100 rs1-wrap-input100 validate-input m-b-30" data-validate="Type email"  >
						<input id="email" class="input100" type="email" name="email" placeholder="Email"  Required autocomplete="false"
						readonly onfocus="this.removeAttribute('readonly');">
						<span class="focus-input100"></span>	
					</div>
					<div class="wrap-input100 rs2-wrap-input100 validate-input m-b-30" data-validate="Type password" >
						<input class="input100" type="password" name="password" placeholder="Password" Required autocomplete="false" 
						readonly onfocus="this.removeAttribute('readonly');">
						<span class="focus-input100"></span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
						
							Sign in
						</button>
					</div>

					<div class="w-full text-center p-t-27 p-b-239">
						<span class="txt1">
							
						</span>

						<a href="#" class="txt2">
						
						</a>
						<div class="w-full text-center">
					<p style="font-size:20; margin:50px">New User<br> &darr;</p> </div>
					<div class="w-full text-center">
					</div>
						<a href="register/signUp.php" class="txt3">
							Sign Up
						</a>
					</div>
				</form>

				<div class="login100-more" style="background-image: url('register/images/hu4.jpg'); "></div>
			</div>
		</div>
	</div>
	
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="register/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="register/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="register/vendor/bootstrap/js/popper.js"></script>
	<script src="register/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="register/vendor/select2/select2.min.js"></script>
	<!-- <script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script> -->
<!--===============================================================================================-->
	<script src="register/vendor/daterangepicker/moment.min.js"></script>
	<script src="register/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="register/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="register/js/main.js"></script>

</body>
</html>