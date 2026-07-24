<!--====================== HEADER =======================-->
<header>


    <div class="container nav">

        <!-- nav logo -->
        <a href="<?= BASE_URL ?>/index" class="logo">
            <!-- <img src="assets/logo.png"> -->
            <img src="<?= BASE_URL ?>/assets/logo.png">
            <span>Akanksha Public School</span> 
        </a>

        <!-- nav menu links -->
        <ul class="menu">
            <!-- home -->
            <li><a href="<?= BASE_URL ?>/index">Home</a></li>

            <!-- about -->
            <li class="has-dropdown">
                <a href="#">About <i class="fa-solid fa-chevron-down"></i></a>

                <ul class="dropdown">

                    <li><a href="<?= BASE_URL ?>/about/overview">Overview</a></li>
                    <li><a href="<?= BASE_URL ?>/about/message-from-principal">Principal's Message</a></li>
                    <li><a href="<?= BASE_URL ?>/about/message-from-director">Director's Message</a></li>
                    <li><a href="<?= BASE_URL ?>/about/message-from-trust">Trustee's Message</a></li>
                    <li><a href="<?= BASE_URL ?>/about/vision-and-mission">Vision & Mission</a></li>
                    <li><a href="<?= BASE_URL ?>/about/leadership">Our Leadership</a></li>

                </ul>
            </li>

            <!-- academics -->
            <li class="has-dropdown">
                <a href="#">Academics <i class="fa-solid fa-chevron-down"></i></a>

                <ul class="dropdown">

                    <li><a href="<?= BASE_URL ?>/academics/teachers">Our Teachers</a></li>
                    <li><a href="<?= BASE_URL ?>/academics/values">Our Values</a></li>
                    <li><a href="<?= BASE_URL ?>/academics/beyond-classroom">Beyond Classroom</a></li>
                    <li><a href="<?= BASE_URL ?>/academics/curriculum">Curriculum</a></li>
                    <li><a href="<?= BASE_URL ?>/academics/methodology">Learning Methodology</a></li>

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