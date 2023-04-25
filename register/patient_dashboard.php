<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--css code is here-->
    <style>
        body{
            margin: 15px;
        }
        .head h3{
            float:right;
            margin-right: 25px;
        }
        .head span{
            color: #008CBA;
        }
        table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
        }

        td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
        }

        tr:nth-child(even) {
        background-color: #dddddd;
        }
        .button {
        background-color: #af4c4c; /* Green */
        border: none;
        color: white;
        padding: 16px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 20px;
        font-weight: bold;
        margin: 4px 2px;
        transition-duration: 0.4s;
        cursor: pointer;
        float:right;
        margin-right: 30px;
        margin-top: 30px;
        }
        .buttondoc {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.buttondoc1 {
  background-color: white; 
  color: black; 
  border: 2px solid #4CAF50;
}

.buttondoc1:hover {
  background-color: #4CAF50;
  color: white;
}


        .button0 {
        background-color: white; 
        color: black; 
        border: 2px solid #008CBA;
        }

        .button0:hover {
        background-color: #008CBA;
        color: white;
        }
        .a {
          margin: 0px;
        }
        .head {
          float: left;
        }
    </style>
</head>
<body>    
<?php 

session_start(); // this NEEDS TO BE AT THE TOP of the page before any output etc


?>
    <div class="head" ><h2>Welcome to your Dashboard, <strong><span><?php echo $_SESSION['username'];?></span></strong></h2></div>
    <br><br>

    <div class="logout"><a href='logout.php'><button class="button button0">Logout</button></a></div>
    <br><br>

    <h1 style="margin-left: 5px;">Patient Details</h1>

    <!--CSS using table-->
    <table>
  <tr>
    <th>Info Name</th>
    <th>Detail</th>
  </tr>
  <tr>
    <td>Patient Serial No.</td>
    <td> <?php echo $_SESSION['ssn_number'];?></td>
  </tr>
  <tr>
    <td>Patient Name</td>
    <td> <?php echo $_SESSION['username'];?></td>
  </tr>
  <tr>
    <td>Gender</td>
    <td> <?php echo $_SESSION['gender'];?></td>
  </tr>

  <tr>
    <td>Age</td>
    <td><?php 
  $dateOfBirth = $_SESSION['birthday'];
  $today = date("Y-m-d");
  $diff = date_diff(date_create($dateOfBirth), date_create($today));
  echo $diff->format('%y');
  ?></td>
  </tr>
  <tr>
  

  <tr>
    <td>Personal Phone Number</td>
    <td> <?php echo $_SESSION['phone_number'];?></td>
  </tr>
  <tr>
    <td>Address</td>
    <td> <?php echo $_SESSION['address'];?></td>
  </tr>
  <tr>
    <td>Email</td>
    <td> <?php echo $_SESSION['email'];?></td>
  </tr>
  <tr>
    <td>Date of Birth </td>
    <td> <?php echo $_SESSION['birthday'];;?></td>
  </tr>
  <tr>
    <td>Blood Group</td>
    <td> <?php echo $_SESSION['blood_group'];?></td>
  </tr>
</table>
<br><br><br>

<a href='../doctor/doctor_list.php'><button class="buttondoc buttondoc1">Find a Doctor</button></a>
<br><br><br>

<!-- Doctor booking system  -->
<div class="cabin">
  <h1>Doctor Appointment List</h1>
  <?php
    include "doctorapp.php";
  ?>
</div>

<br><br><br>




<br><br><br>









<br>
<br>
<br>



</body>
</html>



