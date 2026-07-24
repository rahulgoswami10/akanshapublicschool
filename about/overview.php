<?php

    require_once '../config.php';

    $pageTitle = "OverView | Akanksha Public School";
?>

<!DOCTYPE html>
<html lang="en">
   
  <head>

    <!--====================== Header =======================-->
    <?php @include('../includes/header.php'); ?>

    <!-- hero css cdn -->
    <link rel="stylesheet" href="<?= BASE_URL ?>/css/overview.css">


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

        <img src="<?= BASE_URL ?>/assets/banners/overview-banner.png" alt="Overview Banner">

        <div class="banner-content container">

            <span>Know Us Better</span>

            <h1>Overview</h1>

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

                <p>Overview</p>

            </div>

        </div>

    </section>
    <!--==================== PAGE BANNER ENDS ====================-->





    <!--==================== OVERVIEW INTRO ====================-->
    <section class="overview-intro">

        <div class="container">

            <div class="overview-grid">

                <div class="overview-content">

                    <span class="section-tag">
                        ABOUT OUR SCHOOL
                    </span>

                    <h2>
                        Building Bright Futures Through Quality Education
                    </h2>

                    <div class="heading-line"></div>

                    <p>
                        Akanksha Public School is committed to providing quality education
                        that nurtures academic excellence, creativity, discipline and strong
                        moral values. We believe every child possesses unique potential and
                        deserves an environment where learning becomes joyful and meaningful.
                    </p>

                    <p>
                        Our dedicated teachers, modern classrooms, well-equipped laboratories
                        and student-friendly atmosphere inspire children to become confident,
                        responsible and compassionate citizens prepared for tomorrow's
                        challenges.
                    </p>

                    <p>
                        Along with academics, we encourage sports, cultural activities,
                        leadership development and life skills so that every student grows
                        intellectually, physically and emotionally.
                    </p>

                    <a href="#" class="overview-btn">

                        Learn More
                        <i class="fa-solid fa-arrow-right-long"></i>

                    </a>

                </div>

                <div class="overview-image">

                    <img src="<?= BASE_URL ?>/assets/classroom3.jpeg" alt="Overview">

                </div>

            </div>

        </div>

    </section>
    <!--==================== OVERVIEW INTRO ENDS ====================-->





    <!--==================== STUDENT LIFE ====================-->
    <section class="student-life">

        <div class="container">

            <div class="section-header">

                <span class="section-tag">
                    STUDENT LIFE
                </span>

                <h2>
                    Learning Beyond The Classroom
                </h2>

                <p>
                    We provide students with opportunities to explore their talents,
                    build confidence and develop essential life skills through
                    academics, sports and co-curricular activities.
                </p>

            </div>

            <div class="student-grid">

                <!-- Card 1 -->

                <div class="student-card">

                    <div class="student-image">

                        <img src="<?= BASE_URL ?>/assets/facilities/play_ground.png" alt="Sports">

                    </div>

                    <div class="student-content">

                        <h3>Sports & Games</h3>

                        <a href="#">

                            Explore

                            <i class="fa-solid fa-arrow-right-long"></i>

                        </a>

                    </div>

                </div>

                <!-- Card 2 -->

                <div class="student-card">

                    <div class="student-image">

                        <img src="<?= BASE_URL ?>/assets/facilities/activity_room.png" alt="Events">

                    </div>

                    <div class="student-content">

                        <h3>Cultural Activities</h3>

                        <a href="#">

                            Explore

                            <i class="fa-solid fa-arrow-right-long"></i>

                        </a>

                    </div>

                </div>

                <!-- Card 3 -->

                <div class="student-card">

                    <div class="student-image">

                        <img src="<?= BASE_URL ?>/assets/facilities/computer_lab.png" alt="Lab">

                    </div>

                    <div class="student-content">

                        <h3>Smart Learning</h3>

                        <a href="#">

                            Explore

                            <i class="fa-solid fa-arrow-right-long"></i>

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </section>
    <!--==================== STUDENT LIFE ENDS ====================-->


    

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