
<html>
	<head>
		<meta charset="utf-8">
		<title>Registration Form HU-SC</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
		<style> 
		


		.submitt {
  border: none;
  width: 152px;
  height: 40px;
  margin: auto;
  margin-top: 29px;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 0;
  background: #ae3c33;
  font-size: 13px;
  color: #fff;
  text-transform: uppercase;
  font-family: "Muli-SemiBold";
  border-radius: 20px;
  overflow: hidden;
  -webkit-transform: perspective(1px) translateZ(0);
  transform: perspective(1px) translateZ(0);
  box-shadow: 0 0 1px rgba(0, 0, 0, 0);
  position: relative;
  -webkit-transition-property: color;
  transition-property: color;
  -webkit-transition-duration: 0.5s;
  transition-duration: 0.5s; }
		</style>
	</head>

<body>
<?php
   $con = mysqli_connect("localhost","root","Attar1234","huu");
	 // When form submitted, insert values into the database.
    if (isset($_POST['username'])) {
		 // removes backslashes
        $username = stripslashes($_POST['username']);
		  //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
	   
		$password = stripslashes($_POST['password']);
        $password = mysqli_real_escape_string($con, $password);
	    $email = stripslashes($_POST['email']);
        $email = mysqli_real_escape_string($con, $email);
		  $check="SELECT * FROM users WHERE  email='$email'";
		  $checkrows= mysqli_query($con,$check);
          
		  if($checkrows -> num_rows > 0) {
            echo "<script> alert('Email already exists. Please enter another email'); </script>";
   } else {  
    //insert results from the form input
		 $query = "INSERT into users (username,password,email)
                     VALUES ('$username','$password','$email')"; 
	 
   $result   = mysqli_query($con, $query);
   
   
           header('Location:../signIn.php');
   die();
           
   }
		/* if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='../signIn.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='signUp.php'>registration</a> again.</p>
                  </div>";
        }
	
    }*/
	}
		?>
		
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
    $(function () {
        $("#btnSubmit").click(function () {
            var password = $("#password").val();
            var confirmPassword = $("#confirm-password").val();
            if (password != confirmPassword) {
                alert("Passwords do not match.");
                return false;
            }else
            return true;
        });
    });
</script>
   
		<div class="wrapper" style="background-image: url('images/bg-registration-form-2.jpg');">
			<div class="inner">
				<form   action="" method="POST" class="form"  autocomplete="off">
					<h3>Registration Form</h3>
					<div class="form-group">
						<div class="form-wrapper">
							<label style="font-size:18px"  for="">Username</label>
							<input type="text" class="form-control" name="username" required>
						</div>
						
					</div>
					<div class="form-wrapper">
						<label style="font-size:18px"  for="">Email</label>
						<input type="text" class="form-control" name="email" required>
					</div>
					<div class="form-wrapper">
						<label style="font-size:18px" for="">Password</label>
						<input type="password" class="form-control" name="password"
                         id="password" onchange='check_pass();' required
                        pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
                        title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                         required >
					</div>
					<div class="form-wrapper">
						<label  style="font-size:18px"  for="" >Confirm Password</label>
						<input type="password" class="form-control" name="confirm-password" id="confirm-password" onchange='check_pass();' required>
					
					</div>
					
					<div>
					<input type="submit" name="btn" value="Sign Up"class="submitt"  id="btnSubmit" onclick="return Validate()">
					
					</div>
				<!--	<button><a href="signIn.php" style="text-decoration:none">Register Now</a></button> -->
					<div>
					<br>
				<a href="../signIn.php" style="text-decoration:none">	<label style="font-size:16px" > do you have account ? click her </label></a>

					</div>
				</form>
			</div>
		</div>
	
		</body>
		</html>