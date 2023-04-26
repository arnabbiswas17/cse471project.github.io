<!DOCTYPE html>
<html>
<style>
input[type=text],input[type=date], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>
<?php 
    session_start();
    $patient_id = $_SESSION['ssn_number'];
    $doctor_id = $_GET['s_id'];
    $connection = mysqli_connect("localhost","root","","hms");
    $sql = "SELECT id_no,name,specialty FROM doctor  WHERE id_no = $_GET[s_id]";
    $result = mysqli_query($connection, $sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $_SESSION['id_no'] = $row['id_no'];
           $docname = $row['name'];
           $docspec = $row['specialty'];
        }
    }
?>

<h2>Make An Appointment</h2>

<div>
  <form action="appointment_submit.php" method='POST'>
  	<h4><label for="fname">Patient Serial No. : <?php echo $patient_id;?> </label></h4>
    </br><br>
    <label for="pname">First Name</label>
    <input type="text" name="pname" placeholder="<?php echo  $_SESSION['username']?>">

    <label for="lname">Appointment Date</label>
    <input type="date" name = "date" required>

    <label for="shift">Appointment Shift</label>
    <select name ="shift">
        
    <option value="" >Select Your Shift</option>
      <option value="Day">Day</option>
      <option value="Night">Night</option>
    </select>

    <h4><label for="fname">Appointed By : <?php echo $docname;?> (<?php echo $docspec;?>)</label></h4>
    </br><br>


  
    <input type="submit" value="Submit" name = "submit">
  </form>
</div>

</body>
</html>