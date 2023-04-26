<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient List</title>
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
        .button2 {
        background-color: white; 
        color: black; 
        border: 2px solid green;
        }

        .button2:hover {
        background-color: green;
        color: white;
        }
        .button3 {
        background-color: white; 
        color: black; 
        border: 2px solid red;
        }

        .button3:hover {
        background-color: red;
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

    <?php
        $connection = mysqli_connect("localhost","root","","hms");
    ?>
    <h1>Hospital Patient Information </h1>

    <a href="register.php"><button class="button_add button5 float">++ Add Patient</button></a>
    <table>
    <tr>
        <th>Serial No.</th>
        <th>Patient Name</th>
        <th>Contact Information</th>
        <th>Address</th>
        <th>Email</th>
        <th>Action</th>
    </tr>

    <?php
        $sql = "SELECT ssn_number,username,phone_number,address,email FROM patient_info";
        $result = mysqli_query($connection, $sql);
        
        
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row["ssn_number"]."</td>";
                echo "<td>".$row["username"]."</td>";
                echo "<td>".$row["phone_number"]."</td>";
                echo "<td>".$row["address"]."</td>";
                echo "<td>".$row["email"]."</td>";
                echo "<td><a href='check_patient_detial.php?s_id={$row['ssn_number']}'><button class='button button1'>View</button></a>
                          <a href='update.php?s_id={$row['ssn_number']}'><button class='button_a button2'>Update</button></a>
                          <a href='patient_delete.php?s_id={$row['ssn_number']}'><button class='button_b button3'>Delete</button></a></td></tr>";
            }
        } 
        else {
            echo "0 results";
        }
        $connection->close();
    ?>
    </table>
    <a href="../admin_dash.php?s_id={$row['ssn_number']}">Back</a>
</body>
</html>