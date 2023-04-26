<?php

include 'db.php';

if(isset($_POST["submit"])){
    if (!empty($_POST["pname"]) && !empty($_POST["gender"]) && !empty($_POST["phone"]) && !empty($_POST["address"]) && !empty($_POST["email"]) && !empty($_POST["birthday"]) && !empty($_POST["blood"]) && !empty($_POST["psw"])){
        $pname = $_POST["pname"];
        $gender = $_POST["gender"];
        $phone = $_POST["phone"];
        $address = $_POST["address"];
        $email = $_POST["email"];
        $birthday = date("Y-m-d", strtotime($_POST['birthday']));
        $blood = $_POST["blood"];
        $psw = $_POST["psw"];
        
        $query = "INSERT INTO patient_info(username,gender,phone_number,address,email,birthday,blood_group,password) VALUES ('$pname','$gender','$phone','$address','$email','$birthday','$blood','$psw')";

        $run = mysqli_query($connection,$query);

        if ($run){
            echo 	"<script>	alert('Form Submitted Sccessfully...');
						  		window.location.href='register.php';
					</script>";

        }else{
                echo 	"<script>	
                        window.location.href='register.php';
                        </script>";
        }
    }
}
?>