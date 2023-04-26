<!DOCTYPE html>
<html>
<body>

<?php
        

        session_start();
        $connection = mysqli_connect("localhost","root","","hms");

        

        if(isset($_POST["submit"])){
            $pname = $_POST["username"];
            $gender = $_POST["gender"];
            $phone = $_POST["phone_number"];
            $email = $_POST["email"];
            $address = $_POST["address"];
            $blood = $_POST["blood_group"];


        }
        
        echo "<script type='text/javascript'> alert('Are you sure to Update the Patient Data ?') ;</script>";
        $sql = "UPDATE patient_info SET username = '$pname', gender= '$gender', phone_number = '$phone', email = '$email', address = '$address', blood_group= '$blood' WHERE ssn_number = $_SESSION[ptid]";
        $result = mysqli_query($connection, $sql);
        header('Location: check_patient.php');
        
  ?>


</body>
</html>