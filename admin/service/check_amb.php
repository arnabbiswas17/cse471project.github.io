<!DOCTYPE html>
<html lang="en">
<head>
    <title>Recent Blog</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
   
    <!--Css code is going on -->
    <style>
        .button_a{
            background-color: green;
            border: none;
            color: white;
            padding: 5px 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            transition-duration: 0.4s;
            cursor: pointer;
        }
        .button_b{
            background-color: red;
            border: none;
            color: white;
            padding: 5px 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            transition-duration: 0.4s;
            cursor: pointer;
        }
        .button {
        background-color: #0a80e1; /* Green */
        border: none;
        color: white;
        padding: 5px 10px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        transition-duration: 0.4s;
        cursor: pointer;
        }

        .button1 {
        background-color: white; 
        color: black; 
        border: 2px solid #0a80e1;
        }

        .button1:hover {
        background-color: #0a80e1;
        color: white;
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
        a{
            text-decoration: none;
            color: black;
            font-weight: bold;
        }
        a:hover{
            color: red;
        }
        .button_add{
        background-color: #4CAF50; /* Green */
        border: none;
        color: white;
        padding: 16px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        transition-duration: 0.4s;
        cursor: pointer;
        }
        .button5 {
        background-color: white;
        color: black;
        border: 2px solid #555555;
        }

        .button5:hover {
        background-color: #555555;
        color: white;
        }
        .float{
            float: right;
        }
        p{
            text-align: justify;
        }
        img{
            width: 200px;
            height: 200px;
        }
    </style>




</head>
<body>




<!-- Cabin booking system-->
<br>
<center><h1 style="color: #2443b3;"> Recent Blog Posts </h1></center>

<a href="a_register.php"><button class="button_add button5 float">++ Add New Blog</button></a>
<br><br>
<div class="cabin">
<?php
        $connection = mysqli_connect("localhost","root","","hms");
?>
    <h1> Blog & Articles </h1>
    <table>
    

    
    

    <?php

        $sql = "SELECT date,title,detail,link FROM blog";
        $result = mysqli_query($connection, $sql);
        
        
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<h2>"
                .$row["title"].
                "</h2>";
                echo "<h5> Date:".$row["date"]."</h5>";
                echo "<br>";
                echo "<p>".$row["detail"]."</p>";
                echo "<a href=".$row['link']."> Read More </a>";

            }
            
        }
        else {
            echo "0 results";
        }
        $connection->close();
    ?>
    

    <br><br><br>
    <div class="back"><a href="../admin_dash.php">Back</a></div>


</div>



        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <img src="img/e8e80fe7-0a4a-40f2-9163-b773c86e52e4.jpg" alt="">
                    <h3>Psycologist</h3>
                    <h4>Name of the doctor</h4>
                    <h6><a href="">link</a></h6>
                </div>
                <div class="col-md-3">
                    <img src="img/e8e80fe7-0a4a-40f2-9163-b773c86e52e4.jpg" alt="">
                    <h3>Psycologist</h3>
                    <h4>Name of the doctor</h4>
                    <h6><a href="">link</a></h6>
                </div>
                <div class="col-md-3">
                    <img src="img/e8e80fe7-0a4a-40f2-9163-b773c86e52e4.jpg" alt="">
                    <h3>Psycologist</h3>
                    <h4>Name of the doctor</h4>
                    <h6><a href="">link</a></h6>
                </div>
                <div class="col-md-3">
                    <img src="img/e8e80fe7-0a4a-40f2-9163-b773c86e52e4.jpg" alt="">
                    <h3>Psycologist</h3>
                    <h4>Name of the doctor</h4>
                    <h6><a href="">link</a></h6>
                </div>
            </div>
        </div>




</body>
</html>