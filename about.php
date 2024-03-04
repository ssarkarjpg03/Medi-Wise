<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MediWise</title>

    <!-- Font -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- css-->
    <link rel="stylesheet" href="css/styles.css">

</head>
<body>
<?php
        include 'authentication.php';
    ?>
    <!-- about section  -->

<section class="about" id="about">
    <h1 class="heading">
        <span>about</span> us
    </h1>

    <div class="row">
        <div class="image">
            <img src="image/abt-us.jpg" alt="">
        </div>

        <div class="content">
            <h3> Convenient, Reliable, Your Health Partner</h3>
            <p>Welcome to MediWise, where innovation meets compassionate healthcare. Founded with a vision to revolutionize medical management, we are committed to providing cutting-edge solutions that prioritize the well-being of patients.</p>
            <p>At the heart of our mission is a commitment to patient-centric care. We understand the complexities of healthcare, and our Smart Medical Management System is designed to simplify and improve every step of the medical journey. From seamless appointment scheduling and electronic prescriptions to integrated health records, we empower individuals to take control of their health.</p>
            <a href="registration.php" class="btn"> <span class="fas fa-chevron">Join Us</span></a>
        </div>
    </div>

</section>
<!-- about section end -->

<!-- footer section  -->

<section class="footer" id="footer">
    <div class="box-container">
        <div class="box">
            <h3>quick links</h3>
            <a href="index.php"> <i class="fas fa-chevron-right"></i> home </a>
            <a href="index.php#services"> <i class="fas fa-chevron-right"></i> services </a>
            <a href="about.php"> <i class="fas fa-chevron-right"></i> about </a>
            <a href="index.php#doctors"> <i class="fas fa-chevron-right"></i> Hospitals </a>
            <a href="index.php#book"> <i class="fas fa-chevron-right"></i> book </a>
            <a href="index.php#review"> <i class="fas fa-chevron-right"></i> review </a>
            <a href="blogs.php"> <i class="fas fa-chevron-right"></i> blogs </a>
        </div>
    
        <div class="box">
            <h3>our services</h3>
            <a href="#"> <i class="fas fa-chevron-right"></i> dental care </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> massage therapy </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> cardioloty </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> diagnosis </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> ambulance </a>
        </div>
    
        <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> 12345678 </a>
            <a href="#"> <i class="fas fa-phone"></i> 12345678 </a>
            <a href="#"> <i class="fas fa-envelope"></i> arpita@gmail.com </a>
            <a href="#"> <i class="fas fa-envelope"></i> neha@gmail.com </a>
            <a href="#"> <i class="fas fa-location"></i> delhi </a>
        </div>
    
        <div class="box">
            <h3>follow us</h3>
            <a href="#"> <i class="fab fa-facebook"></i> facebook </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
            <a href="#"> <i class="fab fa-pinterest"></i> pinterest </a>
        </div>
    </div>
    
    <div class="credit"> created by
        <span> MediWise team </span> | all rights reserved
    
    </div>
    
    </section>
    
    <!-- footer section end -->
</body>
