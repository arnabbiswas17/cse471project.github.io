<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Doctor Chart</title>
    <style>
        body {
  font-family: Arial;
}

* {
  box-sizing: border-box;
}

form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
}

form.example button {
  float: left;
  width: 20%;
  padding: 10px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
}

form.example button:hover {
  background: #0b7dda;
}

form.example::after {
  content: "";
  clear: both;
  display: table;
}
.button_a{
            background-color: green;
            border: none;
            color: white;
            padding: 5px 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            transition-duration: 0.4s;
            cursor: pointer;
        }
        .button_b{
            background-color: red;
            border: none;
            color: white;
            padding: 5px 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            transition-duration: 0.4s;
            cursor: pointer;
        }
        .button {
        background-color: #0a80e1; /* Green */
        border: none;
        color: white;
        padding: 5px 10px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        transition-duration: 0.4s;
        cursor: pointer;
        }

        .button1 {
        background-color: white; 
        color: black; 
        border: 2px solid #0a80e1;
        }

        .button1:hover {
        background-color: #0a80e1;
        color: white;
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
        a{
            text-decoration: none;
            color: black;
            font-weight: bold;
        }
        a:hover{
            color: white;
        }
    </style>
</head>
<body>

<center><h1 style="color: #553185">Hospital Doctor Chart</h1></center>

<p>Search a Doctor:</p>
<form class="example" action="#" method = 'POST'>
  <input type="text" placeholder="Search.." name="search">
  <button type="submit"><i class="fa fa-search"></i></button>
</form>



<div class="cabin">
<?php
        $connection = mysqli_connect("localhost","root","","hms");
    ?>
    <h1>Available Doctor Details </h1>
    <table>
    <tr>
        <th>Docotr Name</th>
        <th>Specialty</th>
        <th>Age</th>
        <th>Phone Number</th>
        <th>Room No.</th>
        <th>Action</th>
    </tr>

    <?php
        if (isset($_POST['search'])){
          $doctor = $_POST['search'];
          echo $doctor;
          $sql = "SELECT id_no,name,specialty,age,phone_no,room_no FROM doctor WHERE specialty = '$doctor' ";
          $result = mysqli_query($connection, $sql);
        }else{
          $sql = "SELECT id_no,name,specialty,age,phone_no,room_no FROM doctor";
          $result = mysqli_query($connection, $sql);
        }
        
        
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row["name"]."</td>";
                echo "<td>".$row["specialty"]."</td>";
                echo "<td>".$row["age"]."</td>";
                echo "<td>".$row["phone_no"]."</td>";
                echo "<td>".$row["room_no"]."</td>";
                echo "<td><a href='appointment.php?s_id={$row['id_no']}'><button class='button button1'>Make Appointment</button></a></td></tr>";
            }
        }
        else {
            echo "0 results";
            header ('Location: doctor_list.php');
        }
        $connection->close();
    ?>
    </table>



    
    
    <div class="back"><a href="../register/patient_dashboard.php">Back</a></div>


</div>









</form>
    
</body>
</html>