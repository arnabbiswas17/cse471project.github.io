<!DOCTYPE html>
<html>
<body>
<script>
  let text = "Press a button!\nEither OK or Cancel.";
  if (confirm(text) == true) {
    <?php
        include "db.php";
        $sql = "DELETE FROM patient_info where ssn_number = '$_GET[s_id]' ";
        $result = mysqli_query($connection, $sql);
        header('Location: check_patient.php');
    ?>
  } else {
    <?php
    echo 	"<script>	alert('Username or password Wrong. Try Again...');
                    window.location.href='check_patient.php';
          </script>";
    ?>
  }
</script>

</body>
</html>
