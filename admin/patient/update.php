<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}

.backbtn {
  background-color: blue;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 150px;
  opacity: 0.9;
  float: right;
}

.backrbtn:hover {
  opacity: 2;
}

</style>
</head>
<body>
    <?php
        session_start();
        include "db.php";
        $sql = "SELECT * FROM patient_info where ssn_number = '$_GET[s_id]'";
        $_SESSION['ptid'] = $_GET['s_id'];
        $result = mysqli_query($connection, $sql);
        $row = mysqli_fetch_array($result);
    ?>
<a href="check_patient.php"><button 
>BACK</button></a>


<form action="update_db.php" method ='POST'>
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="username"><b>Username</b></label>
    <input type="text" name="username" value="<?php echo "$row[username]";?>">

    <label for="gender"><b>Gender</b></label>
    <input type="text" value="<?php echo "$row[gender]";?>" name="gender" >

    <label for="phone"><b>Phone Number</b></label>
    <input type="text" value="<?php echo "$row[phone_number]";?>" name="phone_number" >

    <label for="email"><b>Email</b></label>
    <input type="text" value="<?php echo "$row[email]";?>" name="email" >

    <label for="address"><b>Address</b></label>
    <input type="text" value="<?php echo "$row[address]";?>" name="address" >

    <label for="blood"><b>Blood Group</b></label>
    <input type="text" value="<?php echo "$row[blood_group]";?>" name="blood_group" >

    
    <hr>
    <p>By updating an account you agree to chagne the information of <a href="#">Patient DATA</a>.</p>

    <button type="submit" name='submit' class="registerbtn">Update</button>
  </div>
  

</form>

</body>
</html>