<!DOCTYPE html>
<html>
<body>

<?php
        include "db.php";
        $serial =  $_GET['s_id'];
        echo "<script type='text/javascript'> alert('Are you sure to Delete The appointment of Patient ?') ;</script>";
        $sql = "DELETE FROM appointment WHERE serial = '$_GET[s_id]' ";
        $result = mysqli_query($connection, $sql);
        header('Location: app.php');
  ?>


</body>
</html>