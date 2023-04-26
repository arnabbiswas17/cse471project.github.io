<?php
	session_start();
	if(isset($_POST['submit'])){
		$userid = $_POST['user_id'];
		$password = $_POST['password'];
		$mysqli = new mysqli("localhost","root","","hms");
		$result = $mysqli->query("SELECT * FROM admin_panel WHERE Id_no = '$userid' AND Password ='$password' ");
		$row = $result->fetch_assoc();

		if($row['Id_no'] == $userid && $row['Password'] == $password){
            $_SESSION['userid'] = $row['Id_no'];
			$_SESSION['username'] = $row['Username'];
            $_SESSION['designation'] = $row['Designation'];
			echo 	"<script>	alert('Login successful.!');
						  		window.location.href='admin_dash.php';
					</script>";
			
        }else{
			echo 	"<script>	alert('Login Unsuccessful.!');
						  		window.location.href='admin_login.php';
					</script>";
		}
	}
?>