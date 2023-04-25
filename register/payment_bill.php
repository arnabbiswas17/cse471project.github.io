
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .paid{
            color: green;
        }
        .unpaid {
            color: red;
        }
    </style>
</head>
<body>
<?php
        $patientid = $_SESSION['ssn_number'];
        $connection = mysqli_connect("localhost","root","","hms");
        $sql = "SELECT SUM(bill)  AS totalsum FROM cabin where patient_id = '$patientid' ";
        $result = mysqli_query($connection, $sql);
        
        $row = mysqli_fetch_assoc($result); 
        $sum = $row['totalsum'];

        //echo ($sum);
        $sql1 = "SELECT SUM(bill)  AS totalsum FROM ambulance where patient_id = '$patientid' ";
        $result1 = mysqli_query($connection, $sql1);
        $row1 = mysqli_fetch_assoc($result1);
        $sum1 = $row1['totalsum'];
        $totalsum = $sum + $sum1;
        $paid = "Unpaid";

        $connection->close();
?>
<table>
    <tr>
        <th>Total Bill</th>
        <th>Payment Status</th>
    </tr>

   

    <tr>
        
        <td><?php echo $totalsum;?></td>
        <td>
        <?php echo $paid;?>
        </td>
        
    </tr>

    
    </table>
</body>
</html>