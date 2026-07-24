<?php

    require_once '../config.php';

    $pageTitle = "Message from Trustee | Akanksha Public School";
?>

<!DOCTYPE html>
<html lang="en">
   
  <head>

    <!--====================== Header =======================-->
    <?php @include('../includes/header.php'); ?>

    <!-- hero css cdn -->
    <link rel="stylesheet" href="<?= BASE_URL ?>/css/message-from-trust.css">


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

            <h1>Message From Our Trustees</h1>

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

                <p>Message from our Trustees</p>

            </div>

        </div>

    </section>
    <!--==================== PAGE BANNER ENDS ====================-->





    <!-- =========================== Message From Trustee =========================== -->
    <section class="trust-message">
        <div class="container">

            <!-- Left Image -->
            <!-- <div class="trust-image">
                <img src="/akanshapublicschool/assets/members/director.png" alt="Director">
            </div> -->

            <!-- Right Content -->
            <div class="trust-content">

                <span class="section-tag">
                   Some Words From
                </span>

                <h2 class="trust-name">
                    Akanksha Group
                </h2>

                <div class="message-text">

                    <p>
                        At Akansha Group Trust, we firmly believe that education is the foundation upon which strong individuals and progressive societies are built. Our vision is to create an inspiring learning environment where every child is encouraged to explore their potential, develop strong values, and grow into a confident, responsible, and compassionate citizen. We are committed to providing quality education that empowers students with the knowledge and skills required to succeed in an ever-evolving world.
                    </p>

                    <p>
                        Our institutions are dedicated to fostering academic excellence while promoting creativity, innovation, discipline, and integrity. We strive to create a balanced educational experience that nurtures intellectual growth alongside emotional, social, and ethical development. Every initiative undertaken by the Trust reflects our unwavering commitment to shaping well-rounded individuals who contribute positively to society.
                    </p>

                    <p>
                        We recognize that the journey of education is a collaborative effort involving students, parents, teachers, and the community. By working together, we aim to cultivate an atmosphere of trust, mutual respect, and continuous learning, ensuring that every student receives the guidance and opportunities necessary to realize their dreams and aspirations.
                    </p>

                    <p>
                        As we continue our mission of educational excellence, Akansha Group Trust remains dedicated to building institutions that inspire future generations to lead with knowledge, integrity, and compassion. We sincerely thank all our stakeholders for their continued faith and support and warmly welcome you to be a part of our journey towards creating a brighter future for every learner.
                    </p>

                </div>

            </div>

        </div>


        <div class="vice container">

            <!-- Left Image -->
            <div class="trust-image">
                <img src="<?= BASE_URL ?>/assets/members/director2.png" alt="Director">
            </div>

            <!-- Right Content -->
            <div class="trust-content">

                <!-- <span class="section-tag">
                    Message From
                </span> -->

                <h2 class="trust-name">
                    Mr. Pankaj Kumar
                </h2>

                <h4 class="trust-designation">
                    Vice Principle
                </h4>

                <div class="message-text">

                    <p>
                        It is a pleasure to welcome you to Akansha Public School, where we are committed to creating a learning environment that inspires excellence, confidence, and integrity. We believe that every child has unique abilities, and our responsibility is to guide them with care, encouragement, and the right opportunities to achieve their fullest potential. Together, we strive to build a strong foundation for lifelong learning and personal growth.
                    </p>

                    <p>
                        As Vice Principal, I firmly believe that education is most effective when it nurtures both academic achievement and character development. With the support of our dedicated teachers and the cooperation of parents, we encourage students to become disciplined, compassionate, and responsible individuals who are prepared to face future challenges with confidence and contribute positively to society.
                    </p>

                </div>

            </div>

        </div>
    </section>
    <!-- =========================== Message From Trustee Ends =========================== -->





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