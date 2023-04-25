<!DOCTYPE html>
<html>
<head>
<title>Login Page</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
		
	<div class="shovon">
		<img src="img/login_icon.png" class="image">	
		
		<h1> Login Here </h1>
		
		<form action="../database/log.php" method="post">
			<p> User Name </p> 
			<input type="text" name="username" required placeholder=" Enter Your Username">
			
			<p> Password </p> 
			<input type="password" name="password" required placeholder=" Enter Your Password">
			
			<input type="submit" name="submit" value="Login">
			<a href="register.php"> Create A New Account ???</a>
		</form>
	</div>
	<div class="skip">
		<a href="../index/index.php"><img src="img/unnamed.png"></a>
	</div>
</body>
</html>