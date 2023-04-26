<?php

include 'db.php';

if(isset($_POST["submit"])){
        $pname = $_POST["pname"];
        $type = $_POST["type"];
        $phone = $_POST["phone"];
        $car = $_POST["car"];
        $bill = $_POST["bill"];
        
        $query = "INSERT INTO ambulance(car_no,car_type,bill,driver_name,contact_no) VALUES ('$car','$type','$bill','$pname','$phone')";

        $run = mysqli_query($connection,$query);

        if ($run){
            echo 	"<script>	alert('Form Submitted Sccessfully...');
						  		window.location.href='a_register.php';
					</script>";

        }else{
                echo 	"<script>	
                        window.location.href='a_register.php';
                        </script>";
        }
}

?>