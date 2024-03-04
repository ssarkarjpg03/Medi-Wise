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
<!-- blog section  -->

<!-- <link rel="stylesheet" href="styles.css"> -->
<section class="blogs" id="blogs">
    <h1 class="heading"> our <span>blogs</span></h1>
    <div class="box-container">
        <div class="box">
            <div class="image">
                <img src="image/blog1.jpg" alt="">
            </div>

            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 1st March,2022</a>
                    <a href="#"> <i class="fas fa-user"></i> 5th January,2023</a>
                </div>
                <h3>The Lifesaving Routine: Unveiling the Importance of Regular Health Check-ups</h3>
                <p>Regular health check-ups serve as the cornerstone of a proactive and preventive approach to healthcare</p>
                <a href="learnmoreblog.php" class="btn"> learn more <span class="fas fa-chevron-right"></span></a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="image/blog2.png" alt="">
            </div>

            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 1st April,2023</a>
                    <a href="#"> <i class="fas fa-user"></i> 22nd June,2023</a>
                </div>
                <h3>Bridging the gap between Urgency and Care</h3>
                <p>SOS ambulances are equipped to provide rapid response times during emergencies, ensuring that medical assistance reaches individuals in distress promptly. This blog can discuss how quick response times contribute to better outcomes, especially in cases where every second counts.</p>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span></a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="image/blog3.png" alt="">
            </div>

            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 31st March,2023</a>
                    <a href="#"> <i class="fas fa-user"></i> 23rd August,2023</a>
                </div>
                <h3>The Seamless Symphony: Exploring the Integration of Technology in Our Lives</h3>
                <p>In the ever-evolving landscape of the digital age, the integration of technology has become an intricate part of our daily lives, revolutionizing the way we communicate, work, and experience the world. This blog aims to delve into the myriad ways technology seamlessly integrates into various aspects of our lives, driving progress, efficiency, and connectivity.</p>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span></a>
            </div>
        </div>
    </div>
</section>
<!-- blog section end -->

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
</html>