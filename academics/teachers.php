<?php

    require_once '../config.php';

    $pageTitle = "Our Faculties | Akanksha Public School";
?>

<!DOCTYPE html>
<html lang="en">
   
  <head>

    <!--====================== Header =======================-->
    <?php @include('../includes/header.php'); ?>

    <!-- hero css cdn -->
    <link rel="stylesheet" href="<?= BASE_URL ?>/css/teachers.css">


  </head>



   <body>

    <!--====================== Topbar =======================-->
    <?php @include('../includes/topbar.php'); ?>

    <!--====================== Navbar =======================-->
    <?php @include('../includes/navbar.php'); ?>

    <!-- Contact Widget -->
    <?php include '../includes/contact-widget.php'; ?>



    <!--==================== PAGE BANNER ====================-->
    <section class="page-banner">

        <div class="banner-overlay"></div>

        <img src="<?= BASE_URL ?>/assets/banners/leadership.png" alt="Overview Banner">

        <div class="banner-content container">

            <!-- <span>Know Us Better</span> -->

            <h1>Our Faculties</h1>

            <div class="breadcrumb">

                <a href="<?= BASE_URL ?>/index">
                    Home
                </a>

                <span>
                    <i class="fa-solid fa-angle-right"></i>
                </span>

                <a href="#">
                    About
                </a>

                <span>
                    <i class="fa-solid fa-angle-right"></i>
                </span>

                <p>Our Faculties</p>

            </div>

        </div>

    </section>
    <!--==================== PAGE BANNER ENDS ====================-->




    <!-- ==================== Teachers Intro ==================== -->
    <section class="teachers-intro">
        <div class="container">

            <div class="teachersIntroHeading">
                <!-- <span>OUR FACULTIES</span> -->
                <h2>Outstanding Teachers</h2>
            </div>

            <div class="teachersIntroWrapper">

                <!-- Left Images -->

                <div class="teachersImage">

                    <img src="<?= BASE_URL ?>/assets/facilities/science_lab.png" alt="Teachers">

                </div>

                <!-- Right Content -->

                <div class="teachersContent">

                    <p class="quote">
                        Teachers are the architects of tomorrow, shaping minds with
                        knowledge, compassion and dedication.
                    </p>

                    <p>
                        At Akanksha Public School, our teachers inspire curiosity,
                        creativity and confidence in every learner. They nurture
                        academic excellence while helping students build strong values,
                        discipline and leadership qualities that prepare them for a
                        successful future.
                    </p>

                    <p>
                        With innovative teaching methods and a student-centric
                        approach, our educators create an engaging classroom
                        environment where every child is encouraged to think,
                        explore and grow into responsible global citizens.
                    </p>

                </div>

            </div>

        </div>
    </section>
    <!-- ==================== Teachers Intro Ends ==================== -->




    <!-- ========================= Our Faculties ========================= -->
    <section class="ourFaculties">

        <div class="container">

            <div class="headingWrapper">

                <span class="subHeading">
                    OUR Faculties
                </span>

                <h2 class="heading">
                    Meet Our Teachers
                </h2>

                <p class="headingText">
                    Guiding our school with vision, experience and a commitment to exellence.
                </p>

            </div>

            <div class="teacherCards">

                <!-- teacher -->
                <div class="teacherCard">

                    <div class="teacherImage">
                        <img src="<?= BASE_URL ?>/assets/unknown_man.jpg" alt="Teacher">
                    </div>

                    <div class="teacherContent">

                        <h3>Prem Kumar</h3>

                        <span>Department : Mathematics</span>

                        <div class="teacherSocial">

                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>

                            <a href="#"><i class="fa-brands fa-instagram"></i></a>

                            <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>

                        </div>

                    </div>

                </div>


                <!-- teacher -->
                <div class="teacherCard">

                    <div class="teacherImage">
                        <img src="<?= BASE_URL ?>/assets/unknown_man.jpg" alt="Teacher">
                    </div>

                    <div class="teacherContent">

                        <h3>Mukesh sir</h3>

                        <span>Department : science </span>

                        <div class="teacherSocial">

                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>

                            <a href="#"><i class="fa-brands fa-instagram"></i></a>

                            <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>

                        </div>

                    </div>

                </div>


                <!-- teacher -->
                <div class="teacherCard">

                    <div class="teacherImage">
                        <img src="<?= BASE_URL ?>/assets/unknown_man.jpg" alt="teacher">
                    </div>

                    <div class="teacherContent">

                        <h3>Akhilesh Kumar</h3>

                        <span>Department : English</span>

                        <div class="teacherSocial">

                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>

                            <a href="#"><i class="fa-brands fa-instagram"></i></a>

                            <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>

                        </div>

                    </div>

                </div>


                <!-- teacher -->
                <div class="teacherCard">

                    <div class="teacherImage">
                        <img src="<?= BASE_URL ?>/assets/unknown_woman.jpg" alt="teacher">
                    </div>

                    <div class="teacherContent">

                        <h3>Madhu Kumari</h3>

                        <span>Department : Hindi</span>

                        <div class="teacherSocial">

                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>

                            <a href="#"><i class="fa-brands fa-instagram"></i></a>

                            <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>

                        </div>

                    </div>

                </div>


                <!-- teacher -->
                <div class="teacherCard">

                    <div class="teacherImage">
                        <img src="<?= BASE_URL ?>/assets/unknown_man.jpg" alt="teacher">
                    </div>

                    <div class="teacherContent">

                        <h3>Randhir Kumar</h3>

                        <span>Department : Hindi</span>

                        <div class="teacherSocial">

                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>

                            <a href="#"><i class="fa-brands fa-instagram"></i></a>

                            <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>

                        </div>

                    </div>

                </div>


                <!-- teacher -->
                <div class="teacherCard">

                    <div class="teacherImage">
                        <img src="<?= BASE_URL ?>/assets/unknown_man.jpg" alt="teacher">
                    </div>

                    <div class="teacherContent">

                        <h3>Pankaj kumar</h3>

                        <span>Department : English</span>

                        <div class="teacherSocial">

                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>

                            <a href="#"><i class="fa-brands fa-instagram"></i></a>

                            <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>

                        </div>

                    </div>

                </div>


                <!-- teacher -->
                <div class="teacherCard">

                    <div class="teacherImage">
                        <img src="<?= BASE_URL ?>/assets/unknown_woman.jpg" alt="teacher">
                    </div>

                    <div class="teacherContent">

                        <h3>Aakansha Kumari</h3>

                        <span>Department : Computer</span>

                        <div class="teacherSocial">

                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>

                            <a href="#"><i class="fa-brands fa-instagram"></i></a>

                            <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>

                        </div>

                    </div>

                </div>


                <!-- teacher -->
                <div class="teacherCard">

                    <div class="teacherImage">
                        <img src="<?= BASE_URL ?>/assets/unknown_man.jpg" alt="teacher">
                    </div>

                    <div class="teacherContent">

                        <h3>Amardeep Choudhary</h3>

                        <span>Department : Computer</span>

                        <div class="teacherSocial">

                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>

                            <a href="#"><i class="fa-brands fa-instagram"></i></a>

                            <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>
    <!-- ========================= Our Faculties Ends ========================= -->





    <!--======================== SCROLL TO TOP ========================-->
    <button id="scrollTopBtn">
        <!-- <i class="fa-solid fa-arrow-up"></i> -->
        <i class="fa-solid fa-arrow-up-long"></i>
    </button>



    <!--======================== WHATSAPP BUTTON ========================-->
    <a href="https://wa.me/919832510816" class="whatsapp-btn" target="_blank">
        <i class="fa-brands fa-whatsapp"></i>
    </a>


    <!--====================== Footer =======================-->
    <?php @include('../includes/footer.php'); ?>



    <!-- swiper js script -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script src="<?= BASE_URL ?>/js/index.js"></script>




   </body>
</html>