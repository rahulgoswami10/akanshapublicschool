<?php

    require_once 'config.php';

    $pageTitle = "Home | Akanksha Public School";
?>

<!DOCTYPE html>
<html lang="en">
   
  <head>
    
    <!--====================== Header =======================-->
    <?php @include('includes/header.php'); ?>

    <!-- hero css cdn -->
    <link rel="stylesheet" href="<?= BASE_URL ?>/css/hero.css">

  </head>


   <body>

    <!--====================== Topbar =======================-->
    <?php @include('includes/topbar.php'); ?>

    <!--====================== Navbar =======================-->
    <?php @include('includes/navbar.php'); ?>

    <!-- Contact Widget -->
    <?php include 'includes/contact-widget.php'; ?>



    <!--====================== HERO SECTION =======================-->
    <section class="hero">

        <!-- <div class="overlay"></div> -->

            <!-- slide 1 -->
            <div class="slide active">
                <img src="<?= BASE_URL ?>/assets/prayers/prayer37.jpeg" alt="">

                <div class="overlay"></div>

                <div class="container">

                    <div class="content">
                        <h4>Inspiring Excellence</h4>
                        <h1>Welcome To Our School</h1>
                        <p>
                            Every day brings fresh opportunities for learning, innovation and growth. Join our educational journey.
                        </p>

                        <!-- <a href="#" class="btn">
                        Explore More
                        </a> -->

                        <div class="hero-buttons">

                            <a href="admission.php" class="btn-primary">
                                Apply Now
                            </a>

                            <a href="about.php" class="btn-secondary">
                                Explore Campus <i class="fa-solid fa-arrow-right-long"></i>
                            </a>

                        </div>
                    </div>

                </div>

            </div>


            <!-- slide 2 -->
            <div class="slide">
                <img src="<?= BASE_URL ?>/assets/facilities/play_ground.png">

                <div class="overlay"></div>

                <div class="container">

                    <div class="content">
                        <h4>Learning For Future</h4>
                        <h1>Education With Values</h1>
                        <p>
                            Admission Ongoing. Book your seat now
                        </p>

                        <!-- <a href="#" class="btn">
                        Know More
                        </a> -->

                        <div class="hero-buttons">

                            <a href="#" class="btn-primary">
                                Apply Now
                            </a>

                            <a href="#" class="btn-secondary">
                                Explore Campus <i class="fa-solid fa-arrow-right-long"></i>
                            </a>

                        </div>

                    </div>

                </div>
            </div>

            <!-- slide 3 -->
            <div class="slide">
                <img src="<?= BASE_URL ?>/assets/facilities/smart_classroom.png">

                <div class="overlay"></div>

                <div class="container">

                    <div class="content">
                        <h4>50+ Years</h4>
                        <h1>Building Bright Careers</h1>
                        <p>
                            Every day brings fresh opportunities for learning, innovation and growth. Be a part of our journey.
                        </p>

                        <!-- <a href="#" class="btn">
                        Read More
                        </a> -->

                        <div class="hero-buttons">

                            <a href="#" class="btn-primary">
                                Apply Now
                            </a>

                            <a href="#" class="btn-secondary">
                                Explore Campus<i class="fa-solid fa-arrow-right-long"></i>
                            </a>

                        </div>
                    </div>

                </div>
            </div>

            <button id="prev"> ❮ </button>
            <button id="next"> ❯ </button>

            <!-- slider pagination -->
            <div class="slider-pagination">

                <span class="dot active">
                    <span class="progress"></span>
                </span>

                <span class="dot">
                    <span class="progress"></span>
                </span>

                <span class="dot">
                    <span class="progress"></span>
                </span>

            </div>


    </section>
    <!--==================== HERO SECTION ENDS ====================-->



    
    <!--========================= Hero Cards =========================-->
    <div class="container">

        <div class="hero-cards">

            <div class="card">
                <div class="icon">
                    <i class="fa-solid fa-graduation-cap"></i>
                </div>
                <h3>Skilled Instructors</h3>
                <p>
                    The infrastructure of a school typically includes the physical facilities, buildings.
                </p>
            </div>

            <div class="card">
                <div class="icon">
                    <i class="fa-solid fa-building-columns"></i>
                </div>
                <h3>Classrooms</h3>
                <p>
                    These are the primary spaces where teaching and learning take place.
                </p>
            </div>

            <div class="card">
                <div class="icon">
                    <i class="fa-solid fa-school"></i>
                </div>
                <h3>Library</h3>
                <p>
                    A well-stocked library is essential for providing students with access to a wide range of books.
                </p>
            </div>

            <div class="card">
                <div class="icon">
                    <i class="fa-solid fa-baseball-bat-ball"></i>
                </div>
                <h3>Sports Facilities</h3>
                <p>
                    Schools should have sports fields, courts, or gymnasiums for physical education and extracurricular activities.
                </p>
            </div>

        </div>

    </div>
    <!--========================= Hero Cards ENDS =========================-->




    <!--========================= SCHOOL STATS SECTION =========================-->
    <section class="school-stats">

        <div class="container">

            <div class="stats-wrapper">

                <!--================ ITEM 1 =================-->
                <div class="stat-item">

                    <div class="stat-icon">
                        <i class="fas fa-school"></i>
                    </div>

                    <h2 class="counter" data-target="25" data-suffix="+">0</h2>

                    <p>Years Experience</p>

                </div>

                <!--================ ITEM 2 =================-->
                <div class="stat-item">

                    <div class="stat-icon">
                        <i class="fas fa-user-graduate"></i>
                    </div>

                    <h2 class="counter" data-target="2500" data-suffix="+">0</h2>

                    <p>Students</p>

                </div>

                <!--================ ITEM 3 =================-->
                <div class="stat-item">

                    <div class="stat-icon">
                        <i class="fas fa-chalkboard-teacher"></i>
                    </div>

                    <h2 class="counter" data-target="150" data-suffix="+">0</h2>

                    <p>Expert Faculty</p>

                </div>

                <!--================ ITEM 4 =================-->
                <div class="stat-item">

                    <div class="stat-icon">
                        <i class="fas fa-award"></i>
                    </div>

                    <h2 class="counter" data-target="98" data-suffix="%">0</h2>

                    <p>Success Rate</p>

                </div>

            </div>

        </div>

    </section>
    <!--========================= SCHOOL STATS SECTION ENDS =========================-->




    <!--==================== ABOUT SECTION ====================-->
    <section class="about-section">

        <div class="container about-wrapper">

            <div class="about-image">
                <img src="<?= BASE_URL ?>/assets/classroom3.jpeg" alt="">
            </div>

            <div class="about-content">

                <span class="about-tag">ABOUT US</span>

                <h2>
                    Welcome to Akansha Public School
                </h2>

                <p>
                    If you believe that "Vidyasagar Vidyapith (H.S.)" is the best choice for you or your family, that's wonderful. It's essential to consider your specific educational goals and values when selecting a school.

                </p>

                <p>
                    High-quality education, strong curriculum, and academic achievements help students grow academically and personally.
                </p>

                <div class="about-list">

                    <div><i class="fa-solid fa-circle-check"></i> Academic Excellence</div>
                    <div><i class="fa-solid fa-circle-check"></i> Experienced Teachers</div>

                    <div><i class="fa-solid fa-circle-check"></i> Modern Facilities</div>
                    <div><i class="fa-solid fa-circle-check"></i> Extracurricular Activities</div>

                    <div><i class="fa-solid fa-circle-check"></i> Student Safety</div>
                    <div><i class="fa-solid fa-circle-check"></i> Smart Classrooms</div>

                </div>

                <a href="#" class="about-btn">
                    Read More <i class="fa-solid fa-arrow-right-long"></i>
                </a>

            </div>

        </div>

    </section>
    <!--==================== ABOUT SECTION ENDS ====================-->



    <!--==================== HISTORY SECTION ====================-->
    <section class="history-section">

        <div class="container history-wrapper">

            <!-- History -->
            <div class="history-card">

                <div class="history-icon">
                    <i class="fa-solid fa-lightbulb"></i>
                </div>

                <div class="history-content">

                    <h3>History</h3>

                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum, dolor sit amet consectetur 
                    </p>

                    <a href="#">
                        More <i class="fa-solid fa-arrow-right-long"></i>

                    </a>

                </div>

            </div>

            <!-- Mission -->

            <div class="history-card">

                <div class="history-icon">
                    <i class="fa-solid fa-bullseye"></i>
                </div>

                <div class="history-content">

                    <h3>Our Mission</h3>

                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum, dolor sit amet consectetur 
                    </p>

                    <a href="#">
                        More <i class="fa-solid fa-arrow-right-long"></i>

                    </a>

                </div>

            </div>

        </div>

    </section>
    <!--==================== HISTORY SECTION ENDS ====================-->



    <!--========================================= LEADERSHIP SECTION ==========================================-->
    <section class="leadership-section">

        <div class="container">

            <!-- Header -->

            <div class="leadership-header">

                <h2>Leadership</h2>

                <!-- <div class="leader-nav">

                    <button class="leader-prev">
                        <i class="fa-solid fa-arrow-left"></i>
                    </button>

                    <button class="leader-next">
                        <i class="fa-solid fa-arrow-right"></i>
                    </button>

                </div> -->

            </div>

            <!-- Main -->

            <div class="leadership-main">

                <!-- Left Side -->

                <div class="leadership-left">

                    <div class="featured-image">

                        <img src="<?= BASE_URL ?>/assets/members/director4.png" alt="Chairman">

                    </div>

                    <div class="featured-content">

                        <h3>Abhisek Singh</h3>

                        <h5>Director, Akansha Public School</h5>

                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Veniam molestiae ipsum cupiditate quia perspiciatis
                            molestias, quaerat, ea porro consequatur saepe dolorem
                            inventore modi. Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Lorem ipsum dolor, sit amet consectetur 
                            adipisicing elit. Blanditiis doloremque commodi voluptate, 
                            beatae accusamus cumque natus aliquid, corrupti possimus in 
                            reiciendis? Rem quisquam cum voluptatum!
                        </p>

                        <a href="#" class="featured-btn">

                            Chairman's Message

                            <i class="fa-solid fa-arrow-right-long"></i>


                        </a>

                    </div>

                </div>

                <!-- Right Side -->

                <div class="leadership-right">

                    <div class="leader-cards">

                        <!-- Card -->

                        <div class="leader-card">

                            <img src="assets/inner-ceo-1.jpg" alt="Principal">

                            <div class="leader-info">

                                <h4>Principal Name</h4>

                                <span>Principal</span>

                            </div>

                        </div>

                        <!-- Card -->

                        <div class="leader-card">

                            <img src="<?= BASE_URL ?>/assets/inner-ceo-2.jpg" alt="Vice Principal">

                            <div class="leader-info">

                                <h4>Vice Principal</h4>

                                <span>Vice Principal</span>

                            </div>

                        </div>

                        <!-- Card -->

                        <div class="leader-card">

                            <img src="<?= BASE_URL ?>/assets/inner-ceo-3.jpg" alt="Director">

                            <div class="leader-info">

                                <h4>Director Name</h4>

                                <span>Director</span>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>
    <!--========================================= LEADERSHIP SECTION ENDS ==========================================-->




    <!-- ========================= WHY CHOOSE AKANSHA SCHOOL ========================== -->
    <section class="why-school">

        <div class="container">

            <!-- Section Heading -->

            <div class="section-heading">

                <h2>Why Akansha Public School?</h2>

                <p>Instills strength, vision, and wisdom in students.</p>

            </div>

            <!-- Filter Tabs -->

            <div class="tabs">

                <button class="tab-btn active" data-tab="learning">
                    Personalised Learning
                </button>

                <button class="tab-btn" data-tab="future">
                    Preparing for the Future
                </button>

                <button class="tab-btn" data-tab="wellbeing">
                    Wellbeing
                </button>

                <button class="tab-btn" data-tab="experience">
                    Student Experience
                </button>

                <button class="tab-btn" data-tab="family">
                    Family First
                </button>

            </div>

            <!-- Content Area -->

            <div class="tab-content-wrapper">

                <!-- Left Content -->

                <div class="tab-content">

                    <h3 id="content-title">
                        Personalised Learning
                    </h3>

                    <p id="content-description">
                        We believe every child has the potential to achieve
                        extraordinary things when provided with the freedom to
                        explore, express and challenge themselves. Whether your
                        child is sporty, musical, dramatic or creative, there is
                        something to nurture every talent. 
                        <br><br> Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                        Maiores sit, voluptas magni quo amet itaque quis maxime assumenda, praesentium mollitia aliquam 
                        sed eligendi officiis perferendis ad fuga tempora rerum iure?
                    </p>

                </div>

                <!-- Right Image -->

                <div class="tab-image">

                    <img
                        id="content-image"
                        src="<?= BASE_URL ?>/assets/classroom3.jpeg"
                        alt="Personalised Learning"
                    >

                </div>

            </div>

        </div>

    </section>
    <!-- ========================= WHY CHOOSE AKANSHA SCHOOL ENDS ========================== -->




    <!--========================= WHY AKANSHA SECTION =========================-->
    <section class="why-akansha">

        <div class="container">

            <div class="why-wrapper">

                <!--================ LEFT COLUMN ================-->

                <div class="left-column">

                    <a href="#" class="why-card teacher-card">

                        <img src="<?= BASE_URL ?>/assets/classroom11.jpeg" alt="Our Teachers">

                        <div class="overlay"></div>

                        <div class="card-content">
                            <h3>Our Teachers</h3>
                        </div>

                    </a>

                    <a href="#" class="why-card scholarship-card">

                        <img src="<?= BASE_URL ?>/assets/classroom12.jpeg" alt="Scholarships">

                        <div class="overlay"></div>

                        <div class="card-content">
                            <h3>Scholarships</h3>
                        </div>

                    </a>

                </div>

                <!--================ MIDDLE COLUMN ================-->

                <div class="middle-column">

                    <a href="#" class="why-card beyond-card">

                        <img src="<?= BASE_URL ?>/assets/classroom13.jpeg" alt="Beyond Classroom">

                        <div class="overlay"></div>

                        <div class="card-content">
                            <h3>Beyond the Classroom</h3>
                        </div>

                    </a>

                    <a href="#" class="why-card academic-card">

                        <img src="<?= BASE_URL ?>/assets/classroom14.jpeg" alt="Academic Excellence">

                        <div class="overlay"></div>

                        <div class="card-content">
                            <h3>Academic Excellence</h3>
                        </div>

                    </a>

                </div>

                <!--================ RIGHT COLUMN ================-->

                <div class="right-column">

                    <a href="#" class="why-card values-card">

                        <img src="<?= BASE_URL ?>/assets/classroom15.jpeg" alt="Our Values">

                        <div class="overlay"></div>

                        <div class="card-content">
                            <h3>Our Values</h3>
                        </div>

                    </a>

                    <a href="#" class="why-card inclusion-card">

                        <img src="<?= BASE_URL ?>/assets/classroom16.jpeg" alt="Inclusion">

                        <div class="overlay"></div>

                        <div class="card-content">
                            <h3>Inclusion</h3>
                        </div>

                    </a>

                </div>

            </div>

        </div>

    </section>
    <!--========================= WHY AKANSHA SECTION ENDS =========================-->



    <!--========================= FACILITIES SECTION =========================-->
    <section class="facilities">

        <div class="container">

            <!--========== HEADING ==========-->

            <div class="facilities-header">

                <h2>Our Facilities</h2>

                <p>Designed to provide the best learning environment</p>

            </div>

            <!--========== SLIDER ==========-->

            <div class="swiper facilitiesSwiper">

                <div class="swiper-wrapper">

                    <!--====================================================-->
                    <!--                  SLIDE 01                          -->
                    <!--====================================================-->

                    <div class="swiper-slide">

                        <div class="facility-grid">

                            <!-- CARD 1 -->

                            <a href="#" class="facility-card">

                                <img src="<?= BASE_URL ?>/assets/facilities/smart_classroom.png" alt="Modern Classroom">

                                <div class="facility-overlay"></div>

                                <div class="facility-content">

                                    <h3>Modern Classroom</h3>

                                </div>

                            </a>

                            <!-- CARD 2 -->

                            <a href="#" class="facility-card">

                                <img src="<?= BASE_URL ?>/assets/facilities/library.png" alt="Library">

                                <div class="facility-overlay"></div>

                                <div class="facility-content">

                                    <h3>Library</h3>

                                </div>

                            </a>

                            <!-- CARD 3 -->

                            <a href="#" class="facility-card">

                                <img src="<?= BASE_URL ?>/assets/facilities/computer_lab.png" alt="Computer Lab">

                                <div class="facility-overlay"></div>    

                                <div class="facility-content">

                                    <h3>Computer Lab</h3>

                                </div>

                            </a>

                            <!-- CARD 4 -->

                            <a href="#" class="facility-card">

                                <img src="<?= BASE_URL ?>/assets/facilities/sports_ground.png" alt="Sports Ground">

                                <div class="facility-overlay"></div>

                                <div class="facility-content">

                                    <h3>Sports Ground</h3>

                                </div>

                            </a>

                        </div>

                    </div>

                    <!--====================================================-->
                    <!--                  SLIDE 02                          -->
                    <!--====================================================-->

                    <div class="swiper-slide">

                        <div class="facility-grid">

                            <a href="#" class="facility-card">

                                <img src="<?= BASE_URL ?>/assets/facilities/science_lab.png" alt="Science Lab">

                                <div class="facility-overlay"></div>

                                <div class="facility-content">

                                    <h3>Science Lab</h3>

                                </div>

                            </a>

                            <a href="#" class="facility-card">

                                <img src="<?= BASE_URL ?>/assets/facilities/smart_classroom.png" alt="Smart Classroom">

                                <div class="facility-overlay"></div>

                                <div class="facility-content">

                                    <h3>Smart Classroom</h3>

                                </div>

                            </a>

                            <a href="#" class="facility-card">

                                <img src="<?= BASE_URL ?>/assets/facilities/playground.png" alt="Playground">

                                <div class="facility-overlay"></div>

                                <div class="facility-content">

                                    <h3>Playground</h3>

                                </div>

                            </a>

                            <a href="#" class="facility-card">

                                <img src="<?= BASE_URL ?>/assets/facilities/activity_room.png" alt="Activity Room">

                                <div class="facility-overlay"></div>

                                <div class="facility-content">

                                    <h3>Activity Room</h3>

                                </div>

                            </a>

                        </div>

                    </div>

                </div>

                <!--========== NAVIGATION ==========-->

                <!-- <div class="swiper-button-prev"></div>

                <div class="swiper-button-next"></div> -->

                <div class="swiper-pagination"></div>

            </div>

        </div>

    </section>
    <!--========================= FACILITIES SECTION ENDS =========================-->



    <!--======================== TESTIMONIAL SECTION ========================-->
    <section class="testimonial">

        <div class="container">

            <div class="section-heading">

                <span class="sub-title">
                    Testimonials
                </span>

                <h2>
                    What Our Parents Say
                </h2>

                <p>
                    Hear from our parents about their experience with Akansha Public School.
                </p>

            </div>



            <div class="testimonial-slider">

                <div class="testimonial-track">

                    <!--================ Card 01 ================-->

                    <div class="testimonial-card">

                        <div class="testimonial-header">

                            <img src="<?= BASE_URL ?>/assets/unknown_woman.jpg" alt="Parent">

                            <div class="testimonial-info">

                                <h4>Priya Sharma</h4>

                                <span>Parent of Class VI Student</span>

                            </div>

                        </div>

                        <div class="testimonial-rating">

                            ★★★★★

                        </div>

                        <p>

                            Akansha Public School has provided an excellent learning environment.
                            The teachers are caring, supportive and always motivate children to do their best.

                        </p>

                    </div>



                    <!--================ Card 02 ================-->

                    <div class="testimonial-card">

                        <div class="testimonial-header">

                            <img src="<?= BASE_URL ?>/assets/unknown_man.jpg" alt="Parent">

                            <div class="testimonial-info">

                                <h4>Rahul Das</h4>

                                <span>Parent of Class VIII Student</span>

                            </div>

                        </div>

                        <div class="testimonial-rating">

                            ★★★★★

                        </div>

                        <p>

                            The school's academic excellence and extracurricular activities have
                            helped my child become more confident and responsible.

                        </p>

                    </div>



                    <!--================ Card 03 ================-->

                    <div class="testimonial-card">

                        <div class="testimonial-header">

                            <img src="<?= BASE_URL ?>/assets/unknown_woman.jpg" alt="Parent">

                            <div class="testimonial-info">

                                <h4>Anjali Roy</h4>

                                <span>Parent of Class IV Student</span>

                            </div>

                        </div>

                        <div class="testimonial-rating">

                            ★★★★★

                        </div>

                        <p>

                            We are extremely happy with the dedicated teachers and the positive
                            atmosphere maintained throughout the campus.

                        </p>

                    </div>



                    <!--================ Card 04 ================-->

                    <div class="testimonial-card">

                        <div class="testimonial-header">

                            <img src="<?= BASE_URL ?>/assets/unknown_man.jpg" alt="Parent">

                            <div class="testimonial-info">

                                <h4>Soumya Ghosh</h4>

                                <span>Parent of Class X Student</span>

                            </div>

                        </div>

                        <div class="testimonial-rating">

                            ★★★★★

                        </div>

                        <p>

                            Every teacher gives personal attention to students.
                            The communication between parents and school is excellent.

                        </p>

                    </div>



                    <!--================ Card 05 ================-->

                    <div class="testimonial-card">

                        <div class="testimonial-header">

                            <img src="<?= BASE_URL ?>/assets/unknown_woman.jpg" alt="Parent">

                            <div class="testimonial-info">

                                <h4>Meera Sen</h4>

                                <span>Parent of Class II Student</span>

                            </div>

                        </div>

                        <div class="testimonial-rating">

                            ★★★★★

                        </div>

                        <p>

                            A wonderful school with experienced teachers,
                            disciplined environment and modern facilities.

                        </p>

                    </div>



                    <!--================ Duplicate Cards For Infinite Scroll ================-->

                    <div class="testimonial-card">

                        <div class="testimonial-header">

                            <img src="<?= BASE_URL ?>/assets/unknown_woman.jpg" alt="Parent">

                            <div class="testimonial-info">

                                <h4>Priya Sharma</h4>

                                <span>Parent of Class VI Student</span>

                            </div>

                        </div>

                        <div class="testimonial-rating">

                            ★★★★★

                        </div>

                        <p>

                            Akansha Public School has provided an excellent learning environment.
                            The teachers are caring, supportive and always motivate children to do their best.

                        </p>

                    </div>



                    <div class="testimonial-card">

                        <div class="testimonial-header">

                            <img src="<?= BASE_URL ?>/assets/unknown_man.jpg" alt="Parent">

                            <div class="testimonial-info">

                                <h4>Rahul Das</h4>

                                <span>Parent of Class VIII Student</span>

                            </div>

                        </div>

                        <div class="testimonial-rating">

                            ★★★★★

                        </div>

                        <p>

                            The school's academic excellence and extracurricular activities have
                            helped my child become more confident and responsible.

                        </p>

                    </div>



                    <div class="testimonial-card">

                        <div class="testimonial-header">

                            <img src="<?= BASE_URL ?>/assets/unknown_woman.jpg" alt="Parent">

                            <div class="testimonial-info">

                                <h4>Anjali Roy</h4>

                                <span>Parent of Class IV Student</span>

                            </div>

                        </div>

                        <div class="testimonial-rating">

                            ★★★★★

                        </div>

                        <p>

                            We are extremely happy with the dedicated teachers and the positive
                            atmosphere maintained throughout the campus.

                        </p>

                    </div>



                    <div class="testimonial-card">

                        <div class="testimonial-header">

                            <img src="<?= BASE_URL ?>/assets/unknown_man.jpg" alt="Parent">

                            <div class="testimonial-info">

                                <h4>Soumya Ghosh</h4>

                                <span>Parent of Class X Student</span>

                            </div>

                        </div>

                        <div class="testimonial-rating">

                            ★★★★★

                        </div>

                        <p>

                            Every teacher gives personal attention to students.
                            The communication between parents and school is excellent.

                        </p>

                    </div>



                    <div class="testimonial-card">

                        <div class="testimonial-header">

                            <img src="<?= BASE_URL ?>/assets/unknown_woman.jpg alt="Parent">

                            <div class="testimonial-info">

                                <h4>Meera Sen</h4>

                                <span>Parent of Class II Student</span>

                            </div>

                        </div>

                        <div class="testimonial-rating">

                            ★★★★★

                        </div>

                        <p>

                            A wonderful school with experienced teachers,
                            disciplined environment and modern facilities.

                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>
    <!--======================== TESTIMONIAL SECTION ENDS ========================-->

    

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
    <?php @include('includes/footer.php'); ?>



    <!-- swiper js script -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- main js script -->
    <script src="/akanshapublicschool/js/index.js"></script>

    <script>
        /*========== FACILITIES SWIPER ==========*/
        const facilitiesSwiper = new Swiper(".facilitiesSwiper", {

            loop: true,
            speed: 1000,
            spaceBetween: 30,

            grabCursor: true,
            slidesPerView: 1,

            autoplay: {

                delay: 3500,

                disableOnInteraction: false,

                pauseOnMouseEnter: true,

            },

            pagination: {

                el: ".swiper-pagination",

                clickable: true,

            },

            breakpoints: {

                0: {

                    slidesPerView: 1,

                },

                768: {

                    slidesPerView: 1,

                },

                992: {

                    slidesPerView: 1,

                }

            }

        });
    </script>


    <script>
        /*==================================== HERO SLIDER ====================================*/

        const slides = document.querySelectorAll(".slide");
        const dots = document.querySelectorAll(".dot");

        const nextBtn = document.getElementById("next");
        const prevBtn = document.getElementById("prev");

        let currentSlide = 0;

        // function showSlide(index){

        //     slides.forEach((slide)=>{
        //         slide.classList.remove("active");
        //     });

        //     slides[index].classList.add("active");

        // }

        function showSlide(index){

            slides.forEach(slide=>{

                slide.classList.remove("active");

            });

            dots.forEach(dot=>{

                dot.classList.remove("active");

                const progress=dot.querySelector(".progress");

                progress.style.animation="none";

                progress.offsetHeight;

                progress.style.animation=null;

            });

            slides[index].classList.add("active");

            dots[index].classList.add("active");

        }

        // Next Slide
        function nextSlide(){

            currentSlide++;

            if(currentSlide >= slides.length){
                currentSlide = 0;
            }

            showSlide(currentSlide);

        }

        // Previous Slide
        function prevSlide(){

            currentSlide--;

            if(currentSlide < 0){
                currentSlide = slides.length - 1;
            }

            showSlide(currentSlide);

        }

        nextBtn.addEventListener("click",nextSlide);

        prevBtn.addEventListener("click",prevSlide);

        // Auto Slider

        setInterval(nextSlide,5000);

        dots.forEach((dot,index)=>{

            dot.addEventListener("click",()=>{

                currentSlide=index;

                showSlide(currentSlide);

            });

        });


    </script>


    <script>
        /*====================================== SCHOOL STATS COUNTER ======================================*/

        const counters = document.querySelectorAll(".counter");

        const counterObserver = new IntersectionObserver((entries, observer) => {

            entries.forEach(entry => {

                if (!entry.isIntersecting) return;

                const counter = entry.target;

                const target = +counter.dataset.target;

                const suffix = counter.dataset.suffix || "+";

                const duration = 2000;

                const increment = target / (duration / 16);

                let current = 0;

                const updateCounter = () => {

                    current += increment;

                    if (current < target) {

                        counter.innerText = Math.ceil(current) + suffix;

                        requestAnimationFrame(updateCounter);

                    } else {

                        counter.innerText = target + suffix;

                    }

                };

                updateCounter();

                observer.unobserve(counter);

            });

        }, {
            threshold: 0.5
        });

        counters.forEach(counter => {
            counterObserver.observe(counter);
        });
    </script>



    <!-- ============================== WHY SCHOOL TABS =============================== -->
    <script>

        const tabData = {

            learning:{

                title:"Personalised Learning",

                image:"<?= BASE_URL ?>/assets/classroom5.jpeg",

                description:`We believe every child has the potential to achieve extraordinary things when given the freedom to explore, express and challenge themselves. Whether your child is sporty, musical, dramatic or creative, there is something to nurture every talent.`

            },

            future:{

                title:"Preparing for the Future",

                image:"<?= BASE_URL ?>/assets/classroom6.jpeg",

                description:`We strongly believe that education should prepare every student for life beyond school. We help students develop leadership, confidence, creativity and practical skills to become future-ready citizens.`

            },

            wellbeing:{

                title:"Wellbeing",

                image:"<?= BASE_URL ?>/assets/classroom7.jpeg",

                description:`Students grow best in a safe, happy and caring environment. We focus on physical, emotional and mental wellbeing through guidance, counselling and a positive school culture.`

            },

            experience:{

                title:"Student Experience",

                image:"<?= BASE_URL ?>/assets/classroom8.jpeg",

                description:`Every child experiences exciting learning through activities, events, clubs, sports and collaborative projects. Our vibrant campus life creates memorable experiences every day.`

            },

            family:{

                title:"Family First",

                image:"<?= BASE_URL ?>/assets/classroom9.jpeg",

                description:`Parents are our strongest partners. Through regular communication, meetings and school events, we work together to ensure every child reaches their full potential.`

            }

        };



        const buttons = document.querySelectorAll(".tab-btn");

        const title = document.getElementById("content-title");

        const description = document.getElementById("content-description");

        const image = document.getElementById("content-image");

        const content = document.querySelector(".tab-content");

        const imageBox = document.querySelector(".tab-image");



        buttons.forEach(button=>{

            button.addEventListener("click",()=>{

                if(button.classList.contains("active")) return;

                buttons.forEach(btn=>btn.classList.remove("active"));

                button.classList.add("active");

                const tab = button.dataset.tab;

                /*=========================
                    Fade Out
                ==========================*/

                content.style.opacity="0";
                content.style.transform="translateY(30px)";

                imageBox.style.opacity="0";
                imageBox.style.transform="scale(.95)";



                setTimeout(()=>{

                    title.textContent=tabData[tab].title;

                    description.textContent=tabData[tab].description;

                    image.src=tabData[tab].image;

                    image.alt=tabData[tab].title;

                    /*=========================
                        Fade In
                    ==========================*/

                    content.style.opacity="1";
                    content.style.transform="translateY(0)";

                    imageBox.style.opacity="1";
                    imageBox.style.transform="scale(1)";

                },300);

            });

        });
    </script>


   </body>
</html>