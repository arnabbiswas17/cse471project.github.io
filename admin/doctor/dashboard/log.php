<?php
	session_start();
	if(isset($_POST['submit'])){
		$userid = $_POST['user_id'];
		$password = $_POST['password'];
		$mysqli = new mysqli("localhost","root","","hms");
		$result = $mysqli->query("SELECT * FROM doctor WHERE id_no = '$userid' AND password ='$password' ");
		$row = $result->fetch_assoc();

		if($row['id_no'] == $userid && $row['password'] == $password){
            $_SESSION['userid'] = $row['id_no'];
			$_SESSION['username']  = $row['name'];
            $_SESSION['specialty']  = $row['specialty'];
			$_SESSION['age']  = $row['age'];
			$_SESSION['phone'] = $row['phone_no'];
			$_SESSION['room_no']  = $row['room_no'];
			echo 	"<script>	alert('Login successful.!');
						  		window.location.href='doctor_dash.php';
					</script>";
			
        }else{
			echo 	"<script>	alert('Username or password Wrong. Try Again...');
						  		window.location.href='doctor_login.php';
					</script>";
		}
	}
?>