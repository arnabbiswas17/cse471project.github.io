<!DOCTYPE html>
<html lang="zxx">

<head>

    <title>Register page</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="../index/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../index/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="../index/css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="../index/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="../index/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="../index/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="../index/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="../css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="../index/css/style.css" type="text/css">
    <style>
        .primary-btn:hover{
            color: white;
            background: #13a2b7;

        }
        .hos {
    font-size: 20px;
    font-weight: bold;
}

  
input[type=text], input[type=password], textarea {  
  width: 100%;  
  padding: 15px;  
  margin: 5px 0 22px 0;  
  display: inline-block;  
  border: none;  
  background: #f1f1f1;  
}  
input[type=text]:focus, input[type=password]:focus {  
  background-color: orange;  
  outline: none;  
}  
 div {  
            padding: 10px 0;  
         }  

.registerbtn {  
  background-color: #0992BF;  
  color: white;  
  padding: 16px 20px;  
  margin: 8px 0;  
  border: none;  
  cursor: pointer;  
  width: 100%;  
  opacity: 0.9;  
}  
.registerbtn:hover {  
  opacity: 1;  
  font-weight: bold;
}  
.divfoot{
  font-size: 20px;
  font-weight: bold;
}
.divfoot a{
  text-decoration: none;
  color:#3471EB;
}
.divfoot a:hover{
  text-decoration: underline;
  color: #4CAF50;
}
.buttonback {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  font-weight: bold;
  
}
</style> 
</head>

<body>

    <!-- Page Preloder
    <div id="preloder">
        <div class="loader"></div>
    </div>
     -->
    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__logo">
            <a href="./index.html">Hosptial</a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__btn">
            <a href="#" class="primary-btn">Register</a>
        </div>
        <ul class="offcanvas__widget">
            <li><i class="fa fa-phone"></i> 1-677-124-44227</li>
            <li><i class="fa fa-map-marker"></i> Mohakhali, Dhaka</li>
            <li><i class="fa fa-clock-o"></i> Mon to Sat 9:00am to 18:00pm</li>
        </ul>
        <div class="offcanvas__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-dribbble"></i></a>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <ul class="header__top__left">
                            <li><i class="fa fa-phone"></i> 01721 - 535480</li>
                            <li><i class="fa fa-map-marker"></i> Mohakhali, Dhaka - 1212</li>
                            <li><i class="fa fa-clock-o"></i> Mon to Sat 9:00am to 18:00pm</li>
                        </ul>
                    </div>
                    <div class="col-lg-4">
                        <div class="header__top__right">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="header__logo">
                        <div class="hos">Mental Health Solution</div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="header__menu__option">
                        <nav class="header__menu">
                            <ul>
                                <li><a href="../index/index.php">Home</a></li>
                                <li><a href="../index/./about.html">About</a></li>
                                <li><a href="../index/./services.html">Services</a></li>
                                
                                
                                <li><a href=".././contact.html">Contact</a></li>
                                
                                <li><a href="#">Login</a>
                                    <ul class="dropdown">
                                        <li><a href="login.php">Patient</a></li>
                                        <li><a href=".././doctor.html">Doctor</a></li>
                                        <li><a href="../../admin/admin_login.php">Admin</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                        <div class="header__btn">
                            <a href="register.php" class="primary-btn">Register</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="canvas__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!--Form page Start-->

    <form action="../database/reg.php" method="post">
  <div class="container">  
  <center>  <h1> Patient Registeration Form</h1> </center>  
  <hr>  
  <label> Patient Name : </label>   
<input type="text" name="pname" placeholder= "Give your Patient Name ... " size="15" required />    
 
<div>  
<label>   
Gender :  
</label><br>  
<input type="radio" value="Male" name="gender" checked > Male   
<input type="radio" value="Female" name="gender"> Female   
</div>  



<label>   
Phone :  
</label>  
<input type="text" name="phone" placeholder="Phone No." size="11"/ required>   
Current Address :  
<textarea cols="80" rows="5" name="address" placeholder="Current Address" value="address" required>  
</textarea>  
 <label for="email"><b>Email</b></label>  
 <input type="text" placeholder="Enter Email" name="email" required>  

 <div>
    <label for="birthday">Birthday:</label>
      <input type="date" id="birthday" name="birthday">
    </div>

 <div>  
    <label>   
    Blood Group :  
    </label>   
      
    <select name="blood">  
    <option value="" >Group Name</option>  
    <option value="A+">A+</option>  
    <option value="A-">A-</option>  
    <option value="B+">B+</option>  
    <option value="B-">B-</option>  
    <option value="AB+">AB+</option>  
    <option value="AB-">AB-</option> 
    <option value="O+">O+</option> 
    <option value="O-">O-</option>
    </select>  
    </div> 
  
    <label for="psw"><b>Password</b></label>  
    <input type="password" placeholder="Enter Password" name="psw" required>  
  
 
    <button type="submit" name ="submit" class="registerbtn">Register</button>    
</form> 
<div class="divfoot">Do you have an account ? <a href="login.php">Login</a></div> 
<a href="../index/index.php" class="buttonback">Back</a>

    <!--Form page End-->
    <br><br><br>


    <!-- Footer Section Begin -->
    <footer class="footer">
        <div class="footer__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="footer__logo">
                            <p>Mental Health Solution</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-8">
                        <div class="footer__newslatter">

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="footer__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="footer__widget">
                        <h5>Company</h5>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Departments</a></li>
                            <li><a href="#">Find a Doctor</a></li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">News</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="footer__widget">
                        <h5>Quick links</h5>
                        <ul>
                            <li><a href="#">Mental Peace</a></li>
                            <li><a href="#">Healthy life Styles</a></li>
                            <li><a href="#">Short Storys</a></li>
                            <li><a href="#">Receent Blogs</a></li>
                            <li><a href="#">Statistics</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__address">
                        <h5>Contact Us</h5>
                        <ul>
                            <li><i class="fa fa-map-marker"></i> Mohakhali, Dhaka - 1212</li>
                            <li><i class="fa fa-phone"></i> 01721-5355480</li>
                            <li><i class="fa fa-envelope"></i> helpspport@gmail.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-6">
                    <div class="footer__map">
                        <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48158.305462977965!2d-74.13283844036356!3d41.02757295168286!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2e440473470d7%3A0xcaf503ca2ee57958!2sSaddle%20River%2C%20NJ%2007458%2C%20USA!5e0!3m2!1sen!2sbd!4v1575917275626!5m2!1sen!2sbd"
                        height="190" style="border:0" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <p class="text-center text-md-end text-xl-start"> 
                All Rights Reserved
              </p>
                    </div>
                    <div class="col-lg-5">
                        <ul>
                            <li>All Rights Reserved</li>
                            <li>Terms & Use</li>
                            <li>Privacy Policy</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

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