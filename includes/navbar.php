<!--====================== HEADER =======================-->
<header>

    <div class="container nav">

        <!-- nav logo -->
        <a href="<?= BASE_URL ?>/index.php" class="logo">
            <!-- <img src="assets/logo.png"> -->
            <img src="<?= BASE_URL ?>/assets/logo.png">
            <span>Akanksha Public School</span> 
        </a>

        <!-- nav menu links -->
        <ul class="menu">
            <!-- home -->
            <li><a href="<?= BASE_URL ?>/index.php">Home</a></li>

            <!-- about -->
            <li class="has-dropdown">
                <a href="#">About <i class="fa-solid fa-chevron-down"></i></a>

                <ul class="dropdown">

                    <li><a href="<?= BASE_URL ?>/about/overview.php">Overview</a></li>
                    <li><a href="<?= BASE_URL ?>/about/message-from-principal.php">Principal's Message</a></li>
                    <li><a href="<?= BASE_URL ?>/about/message-from-director.php">Director's Message</a></li>
                    <li><a href="<?= BASE_URL ?>/about/message-from-trust.php">Trustee's Message</a></li>
                    <li><a href="<?= BASE_URL ?>/about/vision-and-mission.php">Vision & Mission</a></li>
                    <li><a href="<?= BASE_URL ?>/about/leadership.php">Our Leadership</a></li>

                </ul>
            </li>

            <!-- academics -->
            <li class="has-dropdown">
                <a href="#">Academics <i class="fa-solid fa-chevron-down"></i></a>

                <ul class="dropdown">

                    <li><a href="<?= BASE_URL ?>/academics/teachers.php">Our Teachers</a></li>
                    <li><a href="<?= BASE_URL ?>/academics/values.php">Our Values</a></li>
                    <li><a href="<?= BASE_URL ?>/academics/classroom.php">Beyond Classroom</a></li>
                    <li><a href="<?= BASE_URL ?>/academics/curriculum.php">Curriculum</a></li>
                    <li><a href="#">Learning Methodology</a></li>

                </ul>
        
            </li>

            <!-- admission -->
            <li class="has-dropdown">
                <a href="#">Admission <i class="fa-solid fa-chevron-down"></i> </a>

                <ul class="dropdown">

                    <li><a href="#">Admission Process</a></li>
                    <li><a href="#">Fee Structure</a></li>
                    <li><a href="#">Documents Required</a></li>
                    <li><a href="#">Admission Enquiry</a></li>
                    <li><a href="#">FAQs</a></li>

                </ul>
            
            
            </li>

            <!-- gallery -->
            <li><a href="#">Gallery</a></li>

            <!-- contact -->
            <li class="has-dropdown">
                <a href="#">Contact <i class="fa-solid fa-chevron-down"></i> </a>

                <ul class="dropdown">

                    <li><a href="#">Career</a></li>
                    <li><a href="#">Contact</a></li>

                </ul>
            
            </li>
        </ul>

        <!-- apply now button -->
        <a href="#" class="apply-btn">
            Apply Now <i class="fa-solid fa-arrow-right-long"></i>
        </a>

        <!-- ham -->
        <div class="menu-btn">
            <i class="fa-solid fa-bars"></i>
        </div>

    </div>

</header>