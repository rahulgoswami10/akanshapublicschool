<?php

    require_once '../config.php';

    $pageTitle = "Message from principal | Akanksha Public School";
?>

<!DOCTYPE html>
<html lang="en">
   
  <head>

    <!--====================== Header =======================-->
    <?php @include('../includes/header.php'); ?>

    <!-- hero css cdn -->
    <link rel="stylesheet" href="<?= BASE_URL ?>/css/message-from-principal.css">


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

        <img src="<?= BASE_URL ?>/assets/banners/message-from-principal.png" alt="Overview Banner">

        <div class="banner-content container">

            <!-- <span>Know Us Better</span> -->

            <h1>Message From Our Principal</h1>

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

                <p>Message from our Principal</p>

            </div>

        </div>

    </section>
    <!--==================== PAGE BANNER ENDS ====================-->





    <!-- =========================== Message From Principal =========================== -->
    <section class="principal-message">
        <div class="container">

            <!-- Left Image -->
            <div class="principal-image">
                <img src="<?= BASE_URL ?>/assets/members/principal2.jpeg" alt="Principal">
            </div>

            <!-- Right Content -->
            <div class="principal-content">

                <!-- <span class="section-tag">
                    Message From
                </span> -->

                <h2 class="principal-name">
                    Mr. Amardeep Choudhary
                </h2>

                <h4 class="principal-designation">
                    Principal
                </h4>

                <div class="message-text">

                    <p>
                        Welcome to Akansha Public School. Education is not merely about acquiring knowledge; it is about building character, confidence, creativity, and compassion. Our mission is to nurture every child into a responsible citizen who is prepared to face future challenges with determination and integrity.
                    </p>

                    <p>
                        We believe that every learner possesses unique talents and potential. Through innovative teaching practices, a supportive learning environment, and strong moral values, we strive to help our students discover their strengths and achieve excellence in academics as well as co-curricular activities.
                    </p>

                    <p>
                        Our dedicated faculty members continuously inspire students to think critically, act responsibly, and embrace lifelong learning. We encourage curiosity, leadership, teamwork, and resilience, ensuring that every child develops into a confident individual capable of making meaningful contributions to society.
                    </p>

                    <p>
                        Together with our parents and community, we remain committed to providing quality education while fostering an atmosphere of trust, respect, and excellence. I warmly welcome you to become a part of the Akansha Public School family.
                    </p>

                </div>

            </div>

        </div>
    </section>
    <!-- =========================== Message From Principal Ends =========================== -->







    

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