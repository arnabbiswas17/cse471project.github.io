<!DOCTYPE html>
<html>
<body>

<?php
        

        session_start();
        $connection = mysqli_connect("localhost","root","","hms");

        

        if(isset($_POST["submit"])){
            $pname = $_POST["username"];
            $age = $_POST["age"];
            $phone = $_POST["phone_number"];
            $room = $_POST["room"];


        }
        
        echo "<script type='text/javascript'> alert('Are you sure to Update the Doctor Data ?') ;</script>";
        $sql = "UPDATE doctor SET name = '$pname', age= '$age', phone_no = '$phone', room_no = '$room' WHERE id_no = $_SESSION[dtid]";
        $result = mysqli_query($connection, $sql);
        header('Location: check_doctor.php');
        
  ?>


</body>
</html>