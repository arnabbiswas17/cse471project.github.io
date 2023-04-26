<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Dashboard</title>
    <style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.top-container {
  background-color: #f1f1f1;
  padding: 30px;
  text-align: center;
}

.header {
  padding: 10px 16px;
  background: #555;
  color: #f1f1f1;
  height: 80px;
}
.header h2{
    float: left;
}

.content {
  padding: 16px;
}

.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

.sticky + .content {
  padding-top: 102px;
}
.backbtn{
  background-color: #0295d5;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 150px;
  opacity: 0.9;
  float: right;
}
.appbtn{
  background-color: #0295d5;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 250px;
  opacity: 0.9;
  margin: 50px;
  font-weight: bold;
}
.appbtn:hover{
    opacity: 1;
}
.backbtn:hover {
  opacity: 10;
}
SPAN{
    color: #1bff00;
}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>
    
    <?php
        session_start();
    ?>

    

<div class="header" id="myHeader">
  <h2>Welcome to your Dashboard , <SPAN><?php echo $_SESSION['username'];?></SPAN></h2>
  <a href="logout.php"><button class="backbtn"> LOGOUT </button></a>
</div>

<div class="content">
<table>
  <tr>
    <th>Dotor Info</th>
    <th>Detail</th>
  </tr>
  <tr>
    <td>Doctor Id No. </td>
    <td><?php echo $_SESSION['userid'];?></td>
  </tr>

  <tr>
    <td>Name </td>
    <td><?php echo $_SESSION['username'];?></td>
  </tr>

  <tr>
    <td>Speciality </td>
    <td><?php echo $_SESSION['specialty'];?></td>
  </tr>

  <tr>
    <td>AGE </td>
    <td><?php echo $_SESSION['age'];?></td>
  </tr>

  <tr>
    <td>Phone Number</td>
    <td><?php echo $_SESSION['phone'];?></td>
  </tr>

  <tr>
    <td>Visiting Room NO. </td>
    <td><?php echo $_SESSION['room_no'];?></td>
  </tr>

</table>
</div>
<?php
echo "<a href='app_pat_list.php?s_id=$_SESSION[userid]'><button class='appbtn'> Appointed Patient List </button></a>";
?>



<script>
window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>

</body>
</html>