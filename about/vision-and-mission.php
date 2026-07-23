<?php
    $pageTitle = "Mission and Vision | Akanksha Public School";
?>

<!DOCTYPE html>
<html lang="en">
   
  <head>

    <!--====================== Header =======================-->
    <?php @include('../includes/header.php'); ?>

    <!-- hero css cdn -->
    <link rel="stylesheet" href="/akanshapublicschool/css/vision-and-mission.css">


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

        <img src="/akanshapublicschool/assets/banners/mission-vision.png" alt="Overview Banner">

        <div class="banner-content container">

            <!-- <span>Know Us Better</span> -->

            <h1>Our Vision & Mission</h1>

            <div class="breadcrumb">

                <a href="/akanshapublicschool/index.php">
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

                <p>Vision & Mission</p>

            </div>

        </div>

    </section>
    <!--==================== PAGE BANNER ENDS ====================-->





    <!-- =========================== Our Vision =========================== -->
    <section class="vision-message">

        <div class="container">

            <!-- Left Image -->
            <div class="vision-image">
                <img src="/akanshapublicschool/assets/vision.png" alt="Director">
            </div>

            <!-- Right Content -->
            <div class="vision-content">

                <!-- <span class="section-tag">
                   Some Words From
                </span> -->

                <h2 class="vision-name">
                    Our Vision
                </h2>

                <div class="message-text">

                    <p>
                        At Akansha Public School, our vision is to become a center of educational excellence that inspires students to achieve their highest potential while embracing knowledge, innovation, and lifelong learning. We aspire to create a dynamic and inclusive environment where every learner is empowered to think independently, lead with integrity.
                    </p>

                    <p>
                        Our vision is to inspire every child to dream boldly, achieve confidently, and lead responsibly in an ever-changing world. We envision nurturing future-ready citizens who are intellectually curious, socially responsible, and globally aware. 
                    </p>

                </div>

            </div>

        </div>

    </section>
    <!-- =========================== Our Vision Ends =========================== -->






    <!-- =========================== Our Mission =========================== -->
    <section class="mission-message">

        <div class="container">

            <!-- Left Image -->
            <div class="mission-image">
                <img src="/akanshapublicschool/assets/mission.png" alt="Director">
            </div>

            <!-- Right Content -->
            <div class="mission-content">

                <!-- <span class="section-tag">
                   Some Words From
                </span> -->

                <h2 class="mission-name">
                    Our Mission
                </h2>

                <div class="message-text">

                    <p>
                        At Akansha Public School, our mission is to provide a nurturing and inclusive learning environment where every student is encouraged to achieve academic excellence while developing strong moral values, creativity, and critical thinking skills. 
                    </p>

                    <p>
                        We are committed to empowering young minds through innovative teaching practices, holistic development, and meaningful learning experiences that inspire confidence, leadership, and lifelong curiosity.
                    </p>

                </div>

            </div>

        </div>

    </section>
    <!-- =========================== Our Mission Ends =========================== -->





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

    <script src="/akanshapublicschool/js/index.js"></script>




   </body>
</html>