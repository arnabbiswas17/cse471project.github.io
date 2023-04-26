<?php

include 'db.php';

if(isset($_POST["submit"])){
        $pname = $_POST["pname"];
        $special = $_POST["special"];
        $phone = $_POST["phone"];
        $room = $_POST["room"];
        $date = date("Y-m-d", strtotime($_POST['birthday']));
        $today = date("Y-m-d");
        $diff = date_diff(date_create($date), date_create($today));
        $age = $diff->format('%y');
        $psw = $_POST["psw"];
        
        $query = "INSERT INTO doctor(name,specialty,age,phone_no,room_no,password) VALUES ('$pname','$special','$age','$phone','$room','$psw')";

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

?>