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
        $sql = "SELECT * FROM doctor where id_no = '$_GET[s_id]'";
        $result = mysqli_query($connection, $sql);
        $row = mysqli_fetch_array($result);
    ?>
    <h2 style="margin-left: 5px;">Doctor Details</h2>
       <!--CSS using table-->
        <table>
        <tr>
            <th>Info Name</th>
            <th>Detail</th>
        </tr>
        <tr>
            <td>Patient Serial No.</td>
            <td> <?php echo "$row[id_no]";?></td>
        </tr>
        <tr>
            <td>Patient Name</td>
            <td> <?php echo "$row[name]";?></td>
        </tr>
        <tr>
            <td>Specialty</td>
            <td> <?php echo "$row[specialty]";?></td>
        </tr>
        <tr>
            <td>AGE</td>
            <td> <?php echo "$row[age]";?></td>
        </tr>
        <tr>
            <td>Contact No.</td>
            <td> <?php echo "$row[phone_no]";?></td>
        </tr>
        <tr>
            <td>Visiting Room No.</td>
            <td> <?php echo "$row[room_no]";?></td>
        </tr>
        </table>
        <div class="back"><a href="check_doctor.php"><img src="back.png" alt="back"></a></div>
</body>
</html>








    
