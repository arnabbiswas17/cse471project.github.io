<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor List</title>
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
    <h1>Hospital Doctor Information </h1>
    <a href="register.php"><button class="button_add button5 float">++ Add New Doctor</button></a>
    <table>
    <tr>
        <th>Serial No.</th>
        <th>Doctor Name</th>
        <th>Speciality</th>
        <th>Age</th>
        <th>Phone Number</th>
        <th>Room No.</th>
        <th>Action</th>
    </tr>

    <?php
        $sql = "SELECT id_no,name,specialty,age,phone_no,room_no FROM doctor";
        $result = mysqli_query($connection, $sql);
        
        
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row["id_no"]."</td>";
                echo "<td>".$row["name"]."</td>";
                echo "<td>".$row["specialty"]."</td>";
                echo "<td>".$row["age"]."</td>";
                echo "<td>".$row["phone_no"]."</td>";
                echo "<td>".$row["room_no"]."</td>";
                echo "<td><a href='check_doctor_detial.php?s_id={$row['id_no']}'><button class='button button1'>View</button></a>
                          <a href='update.php?s_id={$row['id_no']}'><button class='button_a button2'>Update</button></a>
                          </td></tr>";
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