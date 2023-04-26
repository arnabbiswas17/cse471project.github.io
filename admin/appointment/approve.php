<!DOCTYPE html>
<html>
<body>

<?php
        include "db.php";
        $serial =  $_GET['s_id'];
        echo 	"<script>	alert('Username or password Wrong. Try Again...');
              </script>";
        $sql = "UPDATE appointment SET status = 'Approved' WHERE serial = '$_GET[s_id]' ";
        $result = mysqli_query($connection, $sql);
        header('Location: app.php');
  ?>


</body>
</html>