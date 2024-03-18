<?php
    session_start();
    if(!isset($_SESSION["username"])){
        header("Location: ./login.php");
        exit(); 
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>DSC Roadmaps</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/dsc_icon.png" rel="icon">
    <link href="assets/img/dsc_icon.png" rel="dsc-touch-icon">

    <!-- Google Fonts -->
    <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
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
    <link href="assets/css/style.css" rel="stylesheet">

</head>
<body>
    <?php require './_navbar.php' ?>
    <!-- ======= Hero Section ======= -->
    <section id="hero1" class="d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <!-- ======= Breadcrumbs ======= -->
                    <section id="breadcrumbs" class="breadcrumbs" data-aos="fade-up">
                        <div class="container">
                            <div class="d-flex justify-content-between align-items-center">
                                <ol>
                                    <li><a href="./index.html">Home</a></li>
                                    <li>Career List</li>
                                </ol>
                            </div>
                        </div>
                    </section><!-- End Breadcrumbs -->
                    <h1 data-aos="fade-up">Welcome to DSC Roadmaps</h1>
                    <h2 data-aos="fade-up" data-aos-delay="400">Optimizing Your Career Using Roadmaps.</h2>
                    <div data-aos="fade-up" data-aos-delay="800">
                        <!-- <a href="#careers" class="btn-get-started scrollto">Get Started</a> -->
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
                    <img src="assets/img/roadmapbanner.png" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero -->

    <main id="main">
        <!--Career List Section-->
        <section id="careers" class="careers-list">
            <div id="web-dev" class="container">
                <div class="section-title" data-aos="fade-up">
                    <h2 id="careerheading">Web Development</h2>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-2 text-center" data-aos="fade-right" data-aos-delay="100">
                            <img src="./assets/img/icons/web_development.png" alt="Web Development">
                        </div>
                        <div class="col-md-10 text-lg-left" data-aos="fade-left" data-aos-delay="100">
                            <p>Web development refers to the creating, building, and maintaining of websites. It includes aspects such as web design, web publishing, web programming, and database management. It is the creation of an application that works over the internet i.e. websites.</p>
                        </div>
                    </div>
                    <div class="row" data-aos="fade-up" data-aos-delay="100">
                        <center>
                            <a href="./web-development.php" class="btn-start-learning">Start Learning</a>
                        </center>
                    </div>
                </div>
            </div><br><br><br><br>
            <div id="web-dev" class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2 id="careerheading">Android Development</h2>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-2 text-center" data-aos="fade-right" data-aos-delay="100">
                            <img src="./assets/img/icons/android.png" alt="Android Development">
                        </div>
                        <div class="col-md-10 text-lg-left" data-aos="fade-left" data-aos-delay="100">
                            <p>An Android Developer is a software developer who specializes in designing applications for android operating systems. Developing applications for android is on the boom, so the demand for an android developer is very high.</p>
                        </div>
                    </div>
                    <div class="row" data-aos="fade-up" data-aos-delay="100">
                        <center>
                            <a href="./android-development.php" class="btn-start-learning">Start Learning</a>
                        </center>
                    </div>
                </div>
            </div><br><br><br><br>
            <div id="web-dev" class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2 id="careerheading">Data Science</h2>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-2 text-center" data-aos="fade-right" data-aos-delay="100">
                            <img src="./assets/img/icons/data-science.png" alt="Data Science">
                        </div>
                        <div class="col-md-10 text-lg-left" data-aos="fade-left" data-aos-delay="100">
                            <p>Data science is an interdisciplinary field that uses scientific methods, processes, algorithms and systems to extract or extrapolate knowledge and insights from noisy, structured and unstructured data, and apply knowledge from data across a broad range of application domains.</p>
                        </div>
                    </div>
                    <div class="row" data-aos="fade-up" data-aos-delay="100">
                        <center>
                            <a href="./data-science.php" class="btn-start-learning">Start Learning</a>
                        </center>
                    </div>
                </div>
            </div><br><br><br><br>
            <div class="section-title" data-aos="fade-up">
                <h2 id="careerheading">More Coming Soon</h2>
            </div>
        </section>
    </main>

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