<!DOCTYPE html>
<html lang="en">
<head>
    <title>Patient Appointment List</title>

    <!--Css code is going on -->
    <style>
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




<!-- Cabin booking system-->

<div class="cabin">
<?php
        $connection = mysqli_connect("localhost","root","","hms");
    ?>
    <h1>Appointed Patient List </h1>
    <table>
    <tr>
        <th>Patient Name</th>
        <th>Phone Number</th>
        <th>Email</th>
        <th>Blood Group</th>
        <th>Appointed By</th>
        <th>Appointment Status</th>
    </tr>

    <?php
        $id = $_GET['s_id'];
        $sql = "SELECT p.username,p.gender,p.phone_number,p.email,p.blood_group,d.name, a.status FROM doctor d, appointment a, patient_info p WHERE a.ssn_number = p.ssn_number and a.id_no = $id and d.id_no = $id ";
        $result = mysqli_query($connection, $sql);
        
        
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row["username"]."</td>";
                echo "<td>".$row["gender"]."</td>";
                echo "<td>".$row["email"]."</td>";
                echo "<td>".$row["blood_group"]."</td>";
                echo "<td>".$row["name"]."</td>";
                echo "<td>".$row['status']."</td></tr>";
            }
        }
        else {
            echo "No Appointment Today";
        }
        $connection->close();
    ?>
    </table>
    <div class="back"><a href="doctor_dash.php">Back</a></div>


</div>




</body>
</html>