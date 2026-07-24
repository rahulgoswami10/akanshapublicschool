<?php

    require_once '../config.php';

    $pageTitle = "Beyond The Classroom | Akanksha Public School";
?>

<!DOCTYPE html>
<html lang="en">
   
  <head>

    <!--====================== Header =======================-->
    <?php @include('../includes/header.php'); ?>

    <!-- hero css cdn -->
    <link rel="stylesheet" href="<?= BASE_URL ?>/css/beyond-classroom.css">


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

        <img src="<?= BASE_URL ?>/assets/banners/classroom.png" alt="Overview Banner">

        <div class="banner-content container">

            <!-- <span>Know Us Better</span> -->

            <h1>Beyond The Classroom</h1>

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

                <p>Beyond The Classroom</p>

            </div>

        </div>

    </section>
    <!--==================== PAGE BANNER ENDS ====================-->




    <!--==================== BEYOND CLASSROOM ====================-->
    <section class="beyondClassroom">

        <div class="container">

            <div class="section-heading">

                <span>BEYOND THE CLASSROOM</span>

                <h2>Learning Beyond Books</h2>

                <p>
                    Our students grow through sports, arts, cultural activities,
                    leadership programs and hands-on experiences that build
                    confidence and creativity.
                </p>

            </div>

            <div class="activityGrid">

                <!-- Card -->

                <div class="activityCard">

                    <img src="<?= BASE_URL ?>/assets/prayers/prayer1.jpeg">

                    <div class="activityOverlay">

                        <h3>Music & Performing Arts</h3>

                    </div>

                </div>

                <!-- Card -->

                <div class="activityCard">

                    <img src="<?= BASE_URL ?>/assets/prayers/prayer3.jpeg">

                    <div class="activityOverlay">

                        <h3>Sports Excellence</h3>

                    </div>

                </div>

                <!-- Card -->

                <div class="activityCard">

                    <img src="<?= BASE_URL ?>/assets/facilities/science_lab.png">

                    <div class="activityOverlay">

                        <h3>Science Activities</h3>

                    </div>

                </div>

                <!-- Card -->

                <div class="activityCard">

                    <img src="<?= BASE_URL ?>/assets/facilities/activity_room.png">

                    <div class="activityOverlay">

                        <h3>Creative Arts</h3>

                    </div>

                </div>

                <!-- Card -->

                <div class="activityCard">

                    <img src="<?= BASE_URL ?>/assets/prayers/prayer12.jpeg">

                    <div class="activityOverlay">

                        <h3>Dance & Culture</h3>

                    </div>

                </div>

                <!-- Card -->

                <div class="activityCard">

                    <img src="<?= BASE_URL ?>/assets/prayers/prayer18.jpeg">

                    <div class="activityOverlay">

                        <h3>Educational Tours</h3>

                    </div>

                </div>

                <!-- Card -->

                <div class="activityCard">

                    <img src="<?= BASE_URL ?>/assets/prayers/prayer30.jpeg">

                    <div class="activityOverlay">

                        <h3>Yoga & Wellness</h3>

                    </div>

                </div>

                <!-- Card -->

                <div class="activityCard">

                    <img src="<?= BASE_URL ?>/assets/prayers/prayer36.jpeg">

                    <div class="activityOverlay">

                        <h3>School Events</h3>

                    </div>

                </div>

            </div>

        </div>

    </section>
    <!--==================== BEYOND CLASSROOM ENDS ====================-->





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