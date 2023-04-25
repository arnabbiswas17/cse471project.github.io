<!DOCTYPE html>


<head>
<meta charset="UTF-8">
    <meta name="description" content="Aesthetic Template">
    <meta name="keywords" content="Aesthetic, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aesthetic | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
<?php

$sql = "SELECT date,title,detail,link FROM blog";
$result = mysqli_query($connection, $sql);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        
    echo "<div class="container">";
        echo   '<div class="row">';
            echo   ' <div class="col-lg-4">';
                echo    '<img src="img/e8e80fe7-0a4a-40f2-9163-b773c86e52e4.jpg" alt="">';
            echo   '</div>';
            echo    '<div class="col-lg-4">';
                echo    '<h3>.$row['title'].</h3>';
                echo    '<h6>.$row['detail'].</h6>';
                echo    '<h6><a href=".$row[link].">Go to detail</a></h6>';
                echo '</div>';
           echo '</div>';
        echo "</div>";
}
    
}
    else {
        echo "0 results";
    }
    $connection->close();
    ?>



    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>