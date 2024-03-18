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

    <title>DSC | Web Development</title>
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

    <!--Content Section-->
    <section id="content-career" class="align-items-center">
        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs" data-aos="fade-up">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <ol>
                        <li><a href="./index.html">Home</a></li>
                        <li><a href="./career-list.php">Career List</a></li>
                        <li>Web Development</li>
                    </ol>
                </div>
            </div>
        </section><!-- End Breadcrumbs -->
        <div class="content-section-title" data-aos="fade-up">
            <h2 id="careerheading">Web Development</h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6" data-aos="fade-right">
                    <img src="./assets/img/web dev.png" class="img-fluid animated" alt="Web Development">
                </div>
                <div class="col-lg-6">
                    <p data-aos="fade-up">Web Developer/ Full Stack Web Developer <br>
                        How do you feel when you tag yourself with such titles?
                    </p>
                    <p data-aos="fade-up">A long journey takes place to be called by such names. In the beginning, you
                        might feel bored or terrified, but, trust me, this is the most popular and interesting field one
                        should work on. <br>
                        Web development is a constantly growing field. If one desires a career in web development, one
                        must keep oneself updated about the latest tendencies and technologies.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <p data-aos="fade-up">One should always remember that a website is the beginning of business and if
                        you are a part of the project, make sure you are giving your best. If you feel you have the
                        skills mentioned in this article, then you should be relieved that you are driving towards
                        ensuring a more satisfactory job with higher pay as a web developer. Average annual salary of a
                        web developer is 3 LPA in India. Estimated take home salary is between 21,000 to 23,000.</p>
                </div>
            </div>
        </div>
    </section><!--End Content Section-->

    <!--Basicss Section-->
    <!-- <section id="career-skills">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2 id="careerheading">Basics</h2>
            </div>
            <div class="row row-cols-lg-3 basics-card-container" data-aos="fade-up" data-aos-delay="300">
                <div class="col-lg-4 col-md-2 basics-card">
                    <img src="./assets/img/icons/html.png" alt="HTML" width="100px">
                    <h2>HTML</h2>
                    <p>The first thing you have to learn is HTML, which is a standard markup language for creating web pages.</p>
                    <a href="#" class="btn-start-learning">Start Learning</a>
                </div>
                <div class="col-lg-4 col-md-2 basics-card">
                   <img src="./assets/img/icons/css.png" alt="CSS" width="100px">
                    <h2>CSS</h2>
                    <p>The next step is to learn CSS, to set the layout of your web page and learn to style it.</p>
                    <a href="#" class="btn-start-learning">Start Learning</a>
                </div>
                <div class="col-lg-4 col-md-2 basics-card">
                    <img src="./assets/img/icons/javascript.png" alt="Javascript" width="100px">
                    <h2>Javascript</h2>
                    <p>After studying HTML and CSS, you should learn Javascript to create dynamic web pages.</p>
                    <a href="#" class="btn-start-learning">Start Learning</a>
                </div>
            </div>
        </div>
    </section>End Basics -->

    <!--Skills Section-->
    <section id="skill-section">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2 id="careerheading">Skills</h2>
            </div>
            <div class="row" data-aos="fade-up" data-aos-delay="300">
                <div class="col-md-4">
                    <div class="icon-box">
                        <img src="./assets/img/icons/domain knowledge.png" alt="Domain Knowledge" width="45" height="45"
                            style="margin-right: 20px;">
                        <h3><a>Domain Knowledge</a></h3>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="icon-box">
                        <img src="./assets/img/icons/problem solving.png" alt="Problem Solving" width="45" height="45"
                            style="margin-right: 20px;">
                        <h3><a>Problem Solving</a></h3>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="icon-box">
                        <img src="./assets/img/icons/user expperience.png" alt="User Experience" width="45" height="45"
                            style="margin-right: 20px;">
                        <h3><a>User Experience</a></h3>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="icon-box">
                        <img src="./assets/img/icons/backend knowledge.png" alt="Backend Knowledge" width="45"
                            height="45" style="margin-right: 20px;">
                        <h3><a>Backend Knowledge</a></h3>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="icon-box">
                        <img src="./assets/img/icons/version control.png" alt="Version Control" width="45" height="45"
                            style="margin-right: 20px;">
                        <h3><a>Version Control</a></h3>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="icon-box">
                        <img src="./assets/img/icons/teamwork.png" alt="Teamwork" width="45" height="45"
                            style="margin-right: 20px;">
                        <h3><a>Teamwork</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </section><!--End Skills-->

    <!--FrontEnd Roadmap-->
    <section id="roadmap-section">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2 id="careerheading">Frontend Roadmap</h2>
            </div>
            <!-- Front End Carousel Start -->
            <div class="container-fluid" data-aos="fade-up">
                <center>
                    <h6><a>Click on Images to access Links</a></h6>
                    <br>
                </center>
            </div>
            <div class="container carousel" data-aos="fade-up">
                <div id="carouselExampleControls1" class="carousel slide">
                    <div class="carousel-inner" data-bs-toggle="modal" data-bs-target="#FrontEndModal1">
                        <div class="carousel-item active">
                            <img src="./assets/img/Carousel images/web dev carousel/1.svg" class="d-block w-100"
                                alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="./assets/img/Carousel images/web dev carousel/2.svg" class="d-block w-100"
                                alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="./assets/img/Carousel images/web dev carousel/3.svg" class="d-block w-100"
                                alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="./assets/img/Carousel images/web dev carousel/4.svg" class="d-block w-100"
                                alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls1"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls1"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

                <!-- Modal Popup Start -->

                <!-- Button trigger modal -->





                <!-- Front End Carousel End -->
                <!-- <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">
                    <center>
                        <a href="web_front_roadmap.html" class="btn-start-learning">Learn More</a>
                    </center>
                </div> -->
            </div>
    </section><!--End Frontend Roadmap-->

    <!--BackEnd Roadmap-->
    <section id="roadmap-section">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2 id="careerheading">Backend Roadmap</h2>
            </div>

            <!-- Backend carousel start -->
            <div class="container carousel" data-aos="fade-up">
                <div id="carouselExampleControls2" class="carousel slide">
                    <div class="carousel-inner" data-bs-toggle="modal" data-bs-target="#BackEndModal1">
                        <div class="carousel-item active">
                            <img src="./assets/img/Carousel images/web dev carousel/5.svg" class="d-block w-100"
                                alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="./assets/img/Carousel images/web dev carousel/6.svg" class="d-block w-100"
                                alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="./assets/img/Carousel images/web dev carousel/7.svg" class="d-block w-100"
                                alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="./assets/img/Carousel images/web dev carousel/8.svg" class="d-block w-100"
                                alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="./assets/img/Carousel images/web dev carousel/9.svg" class="d-block w-100"
                                alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="./assets/img/Carousel images/web dev carousel/10.svg" class="d-block w-100"
                                alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="./assets/img/Carousel images/web dev carousel/11.svg" class="d-block w-100"
                                alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls2"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls2"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <!-- Backend carousel end -->



                <!-- <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">
                <center>
                    <a href="web_back_roadmap.html" class="btn-start-learning">Learn More</a>
                </center>
            </div> -->
            </div>
    </section><!--End Backend Roadmap-->

    <!--Courses Section-->
    <section id="course-section">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2 id="careerheading">Courses</h2>
            </div>
            <div class="row" data-aos="fade-up" data-aos-delay="300">
                <div class="col-md-4">
                    <div class="icon-box">
                        <img src="./assets/img/icons/coursera.png" alt="Coursera" width="45" height="45"
                            style="margin-right: 20px;">
                        <h3><a
                                href="https://www.coursera.org/search?query=web%20development&skipBrowseRedirect=true" target="_blank">Coursera</a>
                        </h3>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="icon-box">
                        <img src="./assets/img/icons/internshala.png" alt="Intershala" width="45" height="45"
                            style="margin-right: 20px;">
                        <h3><a
                                href="https://trainings.internshala.com/web-development-course/?utm_source=is_web_intershala-menu-dropdown-most-popular" target="_blank">Intershala</a>
                        </h3>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="icon-box">
                        <img src="./assets/img/icons/udemy.png" alt="Udemy" width="45" height="45"
                            style="margin-right: 20px;">
                        <h3><a href="https://www.udemy.com/courses/search/?src=ukw&q=web+development" target="_blank">Udemy</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </section><!--End Courses-->

    <section id="quiz-section">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2 id="careerheading">Test Yourself</h2>
            </div>
            <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">
                <center>
                    <a href="web_front_roadmap.html" class="btn-start-learning">Take a Quiz</a>
                </center>
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
    </footer>
    <!-- End Footer -->


    <!-- Frontend Modal start -->
    <div class="modal " id="FrontEndModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Reference Links</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p><a href="https://code.visualstudio.com/" target="_blank">Visual Studio Code</a></p>
                    <p><a href="https://www.sublimetext.com/" target="_blank">Sublime Text</a></p>
                    <p><a href="https://www.microsoft.com/en-us/edge/download?form=MA13FJ" target="_blank">Edge</a></p>
                    <p><a href="https://www.google.com/chrome/?brand=CHBD&brand=CHBD&gclid=CjwKCAiAuaKfBhBtEiwAht6H70lXptFhwpa3YABzCtK_qnwSIecGItPyc24amTDwqXCxKlmHv_mfGhoC-HEQAvD_BwE&gclsrc=aw.ds"
                            target="_blank">Chrome</a></p>
                    <p><a href="https://learn.microsoft.com/en-us/powershell/scripting/install/installing-powershell?view=powershell-7.3"
                            target="_blank">Powershell</a></p>
                    <p><a href="https://www.figma.com/downloads/" target="_blank">Figma</a></p>
                    <p><a href="https://getbootstrap.com/docs/5.2/getting-started/introduction/"
                            target="_blank">Bootstrap</a></p>
                    <p><a href="https://tailwindcss.com/" target="_blank">Tailwind CSS</a></p>
                    <p><a href="https://reactjs.org/" target="_blank">React JS</a></p>
                    <p><a href="https://angularjs.org/" target="_blank">Angular JS</a></p>
                    <p><a href="https://nextjs.org/" target="_blank">Next JS</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Frontend Modal End-->

    <!-- Backend Modal start -->
    <div class="modal " id="BackEndModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Reference Links</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p><a href="https://dev.mysql.com/downloads/mysql/" target="_blank">MYSql</a></p>
                    <p><a href="https://azure.microsoft.com/en-in/products/azure-sql/" target="_blank">Azure Sql</a></p>
                    <p><a href="https://www.mongodb.com/" target="_blank">Mongo DB</a></p>
                    <p><a href="https://aws.amazon.com/?nc2=h_lg" target="_blank">AWS</a></p>
                    <p><a href="https://firebase.google.com/" target="_blank">Firebase</a></p>
                    <p><a href="https://www.netlify.com/" target="_blank">Netlify</a></p>
                    <p><a href="https://pages.github.com/" target="_blank">Github Pages</a></p>
                    <p><a href="https://code.visualstudio.com/" target="_blank">Visual Studio Code</a></p>
                    <p><a href="https://www.figma.com/downloads/" target="_blank">Figma</a></p>
                    <p><a href="https://discord.com/download" target="_blank">Discord</a></p>
                    <p><a href="https://git-scm.com/downloads" target="_blank">Git</a></p>
                    <p><a href="https://github.com/" target="_blank">GitHub</a></p>
                    <p><a href="https://www.linode.com/" target="_blank">Linode</a></p>
                    <p><a href="https://www.nginix.com/" target="_blank">Ngnix</a></p>
                    <p><a href="https://httpd.apache.org/download.cgi" target="_blank">Apache</a></p>

                </div>
            </div>
        </div>
    </div>
    <!-- Backend Modal End-->



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
