<?php
    $pageTitle = "Our leadership | Akanksha Public School";
?>

<!DOCTYPE html>
<html lang="en">
   
  <head>

    <!--====================== Header =======================-->
    <?php @include('../includes/header.php'); ?>

    <!-- hero css cdn -->
    <link rel="stylesheet" href="/akanshapublicschool/css/leadership.css">


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

        <img src="/akanshapublicschool/assets/banners/leadership.png" alt="Overview Banner">

        <div class="banner-content container">

            <!-- <span>Know Us Better</span> -->

            <h1>Our Leadership</h1>

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

                <p>Leadership</p>

            </div>

        </div>

    </section>
    <!--==================== PAGE BANNER ENDS ====================-->






    <!-- ========================= Our Leadership ========================= -->
    <section class="ourLeadership">

        <div class="container">

            <div class="headingWrapper">

                <span class="subHeading">
                    OUR LEADERSHIP
                </span>

                <h2 class="heading">
                    Meet Our Leaders
                </h2>

                <p class="headingText">
                    Guiding our school with vision, experience and a commitment to exellence.
                </p>

            </div>

            <div class="leadershipCards">

                <!-- Principal -->
                <div class="leaderCard">

                    <div class="leaderImage">
                        <img src="/akanshapublicschool/assets/members/principal1.jpeg" alt="Principal">
                    </div>

                    <div class="leaderContent">

                        <h3>Mr. Amardeep Choudhary</h3>

                        <span>Principal</span>

                        <p>
                            Dedicated to fostering academic excellence, discipline, and holistic development while inspiring every student to achieve their highest potential.
                        </p>

                        <div class="leaderSocial">

                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>

                            <a href="#"><i class="fa-brands fa-instagram"></i></a>

                            <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>

                        </div>

                    </div>

                </div>


                <!-- Vice Principal -->
                <div class="leaderCard">

                    <div class="leaderImage">
                        <img src="/akanshapublicschool/assets/members/principal2.jpeg" alt="Vice Principal">
                    </div>

                    <div class="leaderContent">

                        <h3>Mr. Pankaj Kumar</h3>

                        <span>Vice Principal</span>

                        <p>
                            Passionate about creating an inclusive learning environment that nurtures confidence, creativity, and lifelong learning among students.
                        </p>

                        <div class="leaderSocial">

                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>

                            <a href="#"><i class="fa-brands fa-instagram"></i></a>

                            <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>

                        </div>

                    </div>

                </div>


                <!-- Director -->
                <div class="leaderCard">

                    <div class="leaderImage">
                        <img src="/akanshapublicschool/assets/members/director.png" alt="Director">
                    </div>

                    <div class="leaderContent">

                        <h3>Mr. Abhishek Choudhary</h3>

                        <span>Director</span>

                        <p>
                            Leading the institution with a progressive vision and leadership, empowering students through innovation, integrity, and quality education. Lorem ipsum dolor sit amet.
                        </p>

                        <div class="leaderSocial">

                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>

                            <a href="#"><i class="fa-brands fa-instagram"></i></a>

                            <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>
    <!-- ========================= Our Leadership Ends ========================= -->





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