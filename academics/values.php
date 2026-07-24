<?php

    require_once '../config.php';

    $pageTitle = "Our Values | Akanksha Public School";
?>

<!DOCTYPE html>
<html lang="en">
   
  <head>

    <!--====================== Header =======================-->
    <?php @include('../includes/header.php'); ?>

    <!-- hero css cdn -->
    <link rel="stylesheet" href="<?= BASE_URL ?>/css/values.css">


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

        <img src="<?= BASE_URL ?>/assets/banners/values.png" alt="Overview Banner">

        <div class="banner-content container">

            <!-- <span>Know Us Better</span> -->

            <h1>Our Values</h1>

            <div class="breadcrumb">

                <a href="<?= BASE_URL ?>/index.php">
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

                <p>Our Values</p>

            </div>

        </div>

    </section>
    <!--==================== PAGE BANNER ENDS ====================-->



    <!--==================== OUR VALUES ====================-->
    <section class="values-section">
        <div class="container">

            <div class="section-heading">
                <span>OUR VALUES</span>
                <h2>Core Values That Shape Every Student</h2>
                <p>
                    At Akanksha Public School, our values guide every action,
                    decision and learning experience.
                </p>
            </div>

            <div class="values-grid">

                <!-- Card -->
                <div class="value-card">

                    <div class="value-image">
                        <img src="<?= BASE_URL ?>/assets/prayers/prayer1.jpeg" alt="">
                    </div>

                    <div class="value-content">

                        <h3>Respect</h3>

                        <p>
                            We nurture kindness, empathy and mutual respect among
                            students, teachers and parents.
                        </p>

                    </div>

                </div>

                <!-- Card -->
                <div class="value-card">

                    <div class="value-image">
                        <img src="<?= BASE_URL ?>/assets/classroom3.jpeg" alt="">
                    </div>

                    <div class="value-content">

                        <h3>Pursuing Excellence</h3>

                        <p>
                            Every learner is encouraged to strive for excellence in
                            academics and life.
                        </p>

                    </div>

                </div>

                <!-- Card -->
                <div class="value-card">

                    <div class="value-image">
                        <img src="<?= BASE_URL ?>/assets/facilities/activity_room.png" alt="">
                    </div>

                    <div class="value-content">

                        <h3>School Culture</h3>

                        <p>
                            We create a positive environment filled with enthusiasm,
                            creativity and collaboration.
                        </p>

                    </div>

                </div>

                <!-- Card -->
                <div class="value-card">

                    <div class="value-image">
                        <img src="<?= BASE_URL ?>/assets/prayers/prayer14.jpeg" alt="">
                    </div>

                    <div class="value-content">

                        <h3>One Goal</h3>

                        <p>
                            Together we work toward one mission—
                            empowering every child.
                        </p>

                    </div>

                </div>

                <!-- Card -->
                <div class="value-card">

                    <div class="value-image">
                        <img src="<?= BASE_URL ?>/assets/classroom19.jpeg" alt="">
                    </div>

                    <div class="value-content">

                        <h3>Integrity</h3>

                        <p>
                            Honesty, transparency and responsibility define every
                            member of our community.
                        </p>

                    </div>

                </div>

                <!-- Card -->
                <div class="value-card">

                    <div class="value-image">
                        <img src="<?= BASE_URL ?>/assets/classroom20.jpeg" alt="">
                    </div>

                    <div class="value-content">

                        <h3>Leadership</h3>

                        <p>
                            We inspire students to become confident leaders with
                            compassion and courage.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>
    <!--==================== OUR VALUES ENDS ====================-->





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