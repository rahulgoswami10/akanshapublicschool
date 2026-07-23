<?php
    $pageTitle = "Message from director | Akanksha Public School";
?>

<!DOCTYPE html>
<html lang="en">
   
  <head>

    <!--====================== Header =======================-->
    <?php @include('../includes/header.php'); ?>

    <!-- hero css cdn -->
    <link rel="stylesheet" href="/akanshapublicschool/css/message-from-director.css">


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

        <img src="/akanshapublicschool/assets/banners/message-from-principal.png" alt="Overview Banner">

        <div class="banner-content container">

            <!-- <span>Know Us Better</span> -->

            <h1>Message From Our Director</h1>

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

                <p>Message from our Director</p>

            </div>

        </div>

    </section>
    <!--==================== PAGE BANNER ENDS ====================-->





    <!-- =========================== Message From Director =========================== -->
    <section class="director-message">
        <div class="container">

            <!-- Left Image -->
            <div class="director-image">
                <img src="/akanshapublicschool/assets/members/director.png" alt="Director">
            </div>

            <!-- Right Content -->
            <div class="director-content">

                <!-- <span class="section-tag">
                    Message From
                </span> -->

                <h2 class="director-name">
                    Mr. Abhishek Choudhary 
                </h2>

                <h4 class="director-designation">
                    Director, Akanksha Group
                </h4>

                <div class="message-text">

                    <p>
                        It is my privilege to welcome you to Akansha Public School, a place where education extends beyond the boundaries of classrooms. We believe that true learning empowers young minds with knowledge, values, and the confidence to face the challenges of an ever-changing world. Our commitment is to provide an environment that nurtures curiosity, creativity, and a lifelong passion for learning.
                    </p>

                    <p>
                        At Akansha Public School, we focus on the holistic development of every student by encouraging academic excellence, critical thinking, and strong moral values. Through innovative teaching methods and diverse learning opportunities, we strive to help each child discover their unique potential and develop into a responsible and compassionate individual.
                    </p>

                    <p>
                        Our dedicated team of educators works tirelessly to create a culture of respect, discipline, and collaboration. We believe that education is a shared journey involving students, teachers, and parents, and together we can inspire young learners to become confident leaders and responsible citizens of tomorrow.
                    </p>

                    <p>
                        As Director, I remain committed to strengthening our vision of providing quality education that prepares students not only for academic success but also for meaningful contributions to society. I warmly invite you to join the Akansha Public School family and become a part of our journey towards excellence and innovation.
                    </p>

                </div>

            </div>

        </div>
    </section>
    <!-- =========================== Message From Director Ends =========================== -->







    

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