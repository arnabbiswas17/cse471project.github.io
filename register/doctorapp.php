<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<table>
    <tr>
        <th>Doctor Name</th>
        <th>Appointment Date</th>
        <th>Time</th>
        <th>Specialty</th>
        <th>Phone No.</th>
        <th>Room NO. </th>
        <th>Status</th>
    </tr>

    <?php
        $patientid = $_SESSION['ssn_number'];
        $connection = mysqli_connect("localhost","root","","hms");
        $sql = "SELECT d.name,d.specialty,d.phone_no,d.room_no,a.time,a.date,a.status FROM appointment a, doctor d WHERE a.ssn_number = $patientid AND a.id_no = d.id_no; ";
        $result = mysqli_query($connection, $sql);
        
        
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row["name"]."</td>";
                echo "<td>".$row["date"]."</td>";
                echo "<td>".$row["time"]."</td>";
                echo "<td>".$row["specialty"]."</td>";
                echo "<td>".$row["phone_no"]."</td>";
                echo "<td>".$row["room_no"]."</td>";
                echo "<td>".$row["status"]."</td></tr>";
            }
        }
        else {
            echo "No appointment";
        }
        $connection->close();
    ?>
    </table>
</body>
</html>