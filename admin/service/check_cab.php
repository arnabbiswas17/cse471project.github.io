<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cabin</title>

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
        .button_add{
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
        .button5 {
        background-color: white;
        color: black;
        border: 2px solid #555555;
        }

        .button5:hover {
        background-color: #555555;
        color: white;
        }
        .float{
            float: right;
        }
    </style>




</head>
<body>




<!-- Cabin booking system-->
<br>
<center><h1 style="color: #2443b3;"> HOSIPTAL Cabin Service</h1></center>

<a href="a_register.php"><button class="button_add button5 float">++ Add New Cabin</button></a>
<br><br>
<div class="cabin">
<?php
        $connection = mysqli_connect("localhost","root","","hms");
?>
    <h1>Booked Cabin List </h1>
    <table>
    <tr>
        <th>Cabin No.</th>
        <th>Cabin Type</th>
        <th>Cabin Bill</th>
        <th> Booked By </th>
    </tr>

    <?php
        $sql = "SELECT c.cabin_no,c.type,c.bill,p.username FROM cabin c,patient_info p WHERE c.status = 'Booked' AND c.patient_id = p.ssn_number";
        $result = mysqli_query($connection, $sql);
        
        
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row["cabin_no"]."</td>";
                echo "<td>".$row["type"]."</td>";
                echo "<td>".$row["bill"]."</td>";
                echo "<td>".$row["username"]."</td></tr>";
            }
        }
        else {
            echo "0 results";
        }
    ?>
    </table>
        <br><br><br>
    <h1>Available Cabin Service </h1>
    <table>
    <tr>
        <th>Cabin No.</th>
        <th>Cabin Type</th>
        <th>Cabin Bill</th>
    </tr>

    <?php

        $sql = "SELECT cabin_no,type,bill FROM cabin WHERE status IS NULL";
        $result = mysqli_query($connection, $sql);
        
        
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row["cabin_no"]."</td>";
                echo "<td>".$row["type"]."</td>";
                echo "<td>".$row["bill"]."</td></tr>";
            }
        }
        else {
            echo "0 results";
        }
        $connection->close();
    ?>
    </table>

    <br><br><br>
    <div class="back"><a href="../admin_dash.php">Back</a></div>


</div>




</body>
</html>