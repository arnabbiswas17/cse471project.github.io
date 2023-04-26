<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
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
        .back img {
        width: 100px;
        height: 100px;
        float: right;
        margin: 40px;
        }
        .back img:hover{
            opacity: 50%;
        }
    </style>
</head>
<body>
    <?php
        include "db.php";
        $sql = "SELECT * FROM patient_info where ssn_number = '$_GET[s_id]'";
        $result = mysqli_query($connection, $sql);
        $row = mysqli_fetch_array($result);
    ?>
    <h2 style="margin-left: 5px;">Patient Details</h2>
       <!--CSS using table-->
        <table>
        <tr>
            <th>Info Name</th>
            <th>Detail</th>
        </tr>
        <tr>
            <td>Patient Serial No.</td>
            <td> <?php echo "$row[ssn_number]";?></td>
        </tr>
        <tr>
            <td>Patient Name</td>
            <td> <?php echo "$row[username]";?></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td> <?php echo "$row[gender]";?></td>
        </tr>
        <tr>
            <td>Personal Phone Number</td>
            <td> <?php echo "$row[phone_number]";?></td>
        </tr>
        <tr>
            <td>Address</td>
            <td> <?php echo "$row[address]";?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td> <?php echo "$row[email]";?></td>
        </tr>
        <tr>
            <td>Date of Birth.</td>
            <td> <?php echo "$row[birthday]";?></td>
        </tr>
        <tr>
            <td>Blood Group</td>
            <td> <?php echo "$row[blood_group]";?></td>
        </tr>
        </table>
        <div class="back"><a href="check_patient.php"><img src="back.png" alt="back"></a></div>
</body>
</html>








    
