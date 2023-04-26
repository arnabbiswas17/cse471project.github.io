<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Approval List</title>
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
    <h1>Hospital Patient Approval Chart </h1>
    
    <table>
    <tr>
        <th>Patient Name</th>
        <th>Patient Contact Information</th>
        <th>Patient Address</th>
        <th>Doctor Name</th>
        <th>Specialist</th>
        <th>Time</th>
        <th>Appointment Date</th>
        <th>Action</th>
    </tr>

    <?php
        $sql = "SELECT a.serial,a.id_no,a.ssn_number,p.username,p.phone_number,p.address,d.name,d.specialty,a.time,a.date FROM appointment a,doctor d, patient_info p WHERE a.status = 'Requested' AND a.ssn_number = p.ssn_number AND a.id_no = d.id_no";
        $result = mysqli_query($connection, $sql);
        
        
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row["username"]."</td>";
                echo "<td>".$row["phone_number"]."</td>";
                echo "<td>".$row["address"]."</td>";
                echo "<td>".$row["name"]."</td>";
                echo "<td>".$row["specialty"]."</td>";
                echo "<td>".$row["time"]."</td>";
                echo "<td>".$row["date"]."</td>";
                echo "<td><a href='approve.php?s_id={$row['serial']}'><button class='button button1'>Approve</button></a>
                          <a href='remove.php?s_id={$row['serial']}'><button class='button_a button2'>Remove</button></a>
                          </td></tr>";
            }
        } 
        else {
            echo " There is no Approval Request for Today...";
        }
        $connection->close();
    ?>
    </table>
    <a href="../admin_dash.php?s_id={$row['ssn_number']}">Back</a>
</body>
</html>