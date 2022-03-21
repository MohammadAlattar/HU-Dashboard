<?php
$servername="localhost";
$username="root";
$pass="Attar1234";
$Database_name ="huu";
$connected= new mysqli($servername,$username,$pass,$Database_name);
if($connected -> connect_error) 

		die("No connect plase check in information".$connected -> connect_error);

else{
	if(isset($_POST["btn"])){
		$user = $_POST["user"];
		$email = $_POST["email"];
		$pass = $_POST["pass"];
		$cofirmPass = $_POST["conf"];
		$stmt = "INSERT INTO users(id,username,email,password,confirm-password) VALUES('1','$user','$email','$pass','$cofirmPass')";
	
		echo"done";

}
}


?>	