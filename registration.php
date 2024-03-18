<?php
    session_start();
    if(isset($_SESSION["username"])){
        header("Location: ./career-list.php");
        exit(); 
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>DSC | Registration</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/dsc_icon.png" rel="icon">
    <link href="assets/img/dsc_icon.png" rel="dsc-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="./assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/register.css">

</head>
 
<body>
    <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <img src="./assets/img/dsc_logo.png">
        <!-- <h1><a href="index.html">Developer Student Club</a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About Us</a></li>
          <li><a class="nav-link scrollto" href="#projects">Projects</a></li>
          <li><a class="nav-link scrollto" href="#club_features">Club Features</a></li>
          <li><a class="nav-link scrollto" href="#roadmaps">Roadmaps</a></li>
          <li><a class="nav-link scrollto" href="#core-team">Core Team</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact Us</a></li>
          <li class="dropdown"><a href="#"><span>More</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="./club-docs.html">Club Docs</a></li>
              <li><a href="./privacy-policy.html">Privacy Policy</a></li>
              <li><a href="./terms-conditions.html">Terms & Conditions</a></li>
            </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

    <!--Start Hero-->
    <section id="register-container" class="d-flex align-items-center inputform" style="margin-bottom: 100px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h1 >Register</h1>
                    <h2>You need to register a account in order to continue further.</h2>
                </div>
                <div class="col-lg-6 order-2 order-lg-1">
                    <?php
                        require('db.php');
                        if (isset($_POST['username']))
                        {
                            $var = 0;
                            if(isset($_POST['Email']))
                            {
                                $username = ($_POST['username']);
                                $Email = ($_POST['Email']);
                                $password = ($_POST['password']);
                                $query1 = "SELECT * FROM `users` WHERE `username`='$username' and `Email`='' + '$Email'";
	                            $result = mysqli_query($conn,$query1) or die(mysqli_error($conn));
	                            $rows = mysqli_num_rows($result);
                                if((!filter_var($Email, FILTER_VALIDATE_EMAIL)) or ($rows > 0))
                                {
                                    $msg = 'The Email you have entered is invalid, please try again.';
                                    echo "<div class='form-control' style='padding-top: 60px;'>
                                    <h3>The Email you have entered is invalid, please try again.</h3><br/>Click here to try again <a href='./registration.php'>Register</a></div>";
                                }                                       
                                else {
                                    $query = "INSERT INTO `users` (`username`, `password`, `Email`) VALUES ('$username', '$password', '$Email');"; 
                                    $result1 = mysqli_query($conn,$query);
                                    if($result1)
                                    {
                                        header("location: ./login.php");
                                    }
                                }  
                                $conn->close();
                            }
                        }
                        else {
                    ?>
                    <section>
                        <div class="container">
                            <div class="col-lg-12 col-md-12">
                                <div id="register-form">
                                    <form name="registration" action="" method="post">
                                        <input type="text" class="inputbox form-control" name="username" placeholder="Username" required/><br>
                                        <input type="Email" class="inputbox form-control" name="Email" placeholder="Email" required /><br>
                                        <input type="password" class="inputbox form-control" name="password" placeholder="Password" required /><br>
                                        <center>
                                            <input type="submit" class="inputbutton form-control" name="submit" value="Register" /><br>
                                            <p>Already have a account?<a href="./login.php">Login</a></p>
                                        </center>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </section>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
    
    
    
    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-6 text-lg-left text-center">
                    <div class="copyright">
                    &copy; Copyright <strong>Sanjivani DSC</strong>. All Rights Reserved
                    </div>
                    <div class="credits">
                        Designed by <a href="http://dsc.sanjivanikbpcm.com/" target="_blank">Sanjivani DSC</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
                        <a href="#intro" class="scrollto">Home</a>
                        <a href="#about" class="scrollto">About</a>
                        <a href="#">Privacy Policy</a>
                        <a href="#">Terms of Use</a>
                    </nav>
                </div>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
    class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
</body> 
</html>