<!DOCTYPE html>  
<html>  
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<style>  
body{  
  font-family: Calibri, Helvetica, sans-serif;   
  background-position: center; /* Center the image */
  background-repeat: no-repeat; /* Do not repeat the image */
  background-size: cover;
}  
.container {  
    margin: 0  auto;
    width: 960px;
    padding: 50px;  
    background-color: #8fd0ec;
    border-radius: 30px;  
}  
  
input[type=text], input[type=password], textarea {  
  width: 100%;  
  padding: 15px;  
  margin: 5px 0 22px 0;  
  display: inline-block;  
  border: none;  
  background: #f1f1f1;  
}  
input[type=text]:focus, input[type=password]:focus {  
  background-color: orange;  
  outline: none;  
}  
 div {  
            padding: 10px 0;  
         }  
hr {  
  border: 1px solid #f1f1f1;  
  margin-bottom: 25px;  
}  
.registerbtn {  
  background-color: #0992BF;  
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
  font-weight: bold;
}  
.divfoot{
  font-size: 20px;
  font-weight: bold;
}
.divfoot a{
  text-decoration: none;
  color:#3471EB;
}
.divfoot a:hover{
  text-decoration: underline;
  color: #4CAF50;
}
.buttonback {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  font-weight: bold;
  
}
</style>  
</head>  
<body>  
<form action="reg.php" method="post">
  <div class="container">  
  <center>  <h1> Doctor Registeration Form</h1> </center>  
  <hr>  
  <label> Doctor Name : </label>   
<input type="text" name="pname" placeholder= "Give your Doctor Name ... " size="15" required />    
 

<div>  
    <label>   
    Speciality:  
    </label>   
      
    <select name="special">  
    <option value="" >Speciality of ... </option>  
    <option value="Schizophrenia">Schizophrenia</option>  
    <option value="PTSD">PTSD</option>  
    <option value="Anxiety Disorder">Anxiety Disorder</option>  
    <option value="Counsellor">Counsellor</option>  
    <option value="Brain & Drug Addiction Specialist">Brain & Drug Addiction Specialist</option>  
    </select>  
    </div> 


<label>   
Phone :  
</label>  
<input type="text" name="phone" placeholder="Phone No." size="11"/ required>   
  
 <label for="email"><b>Room NO.</b></label>  
 <input type="text" placeholder="Enter Room No" name="room" required>  

 <div>
    <label for="birthday">Birthday:</label>
    <input type="date" id="birthday" name="birthday">
</div>

 
  
    <label for="psw"><b>Password</b></label>  
    <input type="password" placeholder="Enter Password" name="psw" required>  
  
 
    <button type="submit" name ="submit" class="registerbtn">Register</button>    
</form>
<a href="check_doctor.php" class="buttonback">Back</a>
</body>  
</html>