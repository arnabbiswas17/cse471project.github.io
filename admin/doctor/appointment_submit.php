<!DOCTYPE html>
<html>
<body>

<?php
        

        session_start();
        $connection = mysqli_connect("localhost","root","","hms");
        $patient_id =  $_SESSION['ssn_number'];
        $doctor_id = $_SESSION['id_no'];

        if(isset($_POST["submit"])){
            $pname = $_POST["pname"];
            $date = date("Y-m-d", strtotime($_POST['date']));
            $time = $_POST["shift"];

            echo $pname;

        }
        
        echo "<script type='text/javascript'> alert('Are you sure to appoint the Doctor ?') ;</script>";
        $sql = "INSERT INTO appointment(id_no,time,date,ssn_number,status) VALUES ('$doctor_id','$time','$date','$patient_id','Requested') ";
        $result = mysqli_query($connection, $sql);
        header('Location: doctor_list.php');
  ?>


</body>
</html>