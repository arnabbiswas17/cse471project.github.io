<?php
        $connection = mysqli_connect("localhost","root","","hms");
        $sql = "UPDATE cabin SET status = NULL, patient_id = NULL WHERE cabin_no = '$_GET[s_id]' ";
        $result = mysqli_query($connection, $sql);
        echo    "<script>	alert('Are you sure to Cancel your Cabin ?');
                window.location.href='patient_dashboard.php';
                </script>";
        $connection->close();
    ?>

