<?php
	session_start();
	if(isset($_POST['submit'])){
		
		$username = $_POST["username"];
		$password = $_POST["password"];
		$mysqli = new mysqli("localhost","root","","hms");
		$result = $mysqli->query("SELECT * FROM patient_info WHERE username = '$username' AND password = '$password' ");
		$row = $result->fetch_assoc();

		if($row['username'] == $username && $row['password'] == $password){
			$_SESSION['ssn_number'] = $row['ssn_number'];
			$_SESSION['username'] = $row['username'];
			$_SESSION['gender'] = $row['gender'];
			$_SESSION['phone_number'] = $row['phone_number'];
			$_SESSION['address'] = $row['address'];
			$_SESSION['email'] = $row['email'];
			$_SESSION['birthday'] = $row['birthday'];
			$_SESSION['blood_group'] = $row['blood_group'];
			$_SESSION['password'] = $row['password'];
			echo 	"<script>	alert('Login successful.!');
						  		window.location.href='../register/patient_dashboard.php';
					</script>";
		}else{
			echo 	"<script>	alert('Username or password Wrong. Try Again...');
						  		window.location.href='../register/login.php';
					</script>";
		}
	}
?>


