<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    <link rel="stylesheet" href="css/services.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
<?php
        include 'authentication.php';
    ?>
    <section class="services" id="services">
        <h1 class="heading"> our <span> services </span></h1>
        <div class="box-container">
            <div class="box">
                <i class="fas fa-notes-medical"></i>
                <h3>E-Prescriptions</h3>
                <p> Our E-Prescription feature is a cornerstone of the MediWise, designed to enhance the prescription process for both healthcare professionals and patients.With our E-Prescription system, healthcare providers can quickly and accurately prescribe medications with just a few clicks. Say goodbye to handwritten prescriptions that can lead to errors and delays.</p>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span></a>
            </div>
    
            <div class="box">
                <i class="fas fa-ambulance"></i>
                <h3>SOS</h3>
                <p>Introducing the SOS Ambulance Service, an integral component of MediWise.Our system is equipped with advanced GPS technology for real-time tracking and dispatch of ambulances. This ensures that help reaches the location of the emergency swiftly.</p>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span></a>
            </div>
    
            <div class="box">
                <i class="fas fa-user-md"></i>
                <h3>Authorized Doctors</h3>
                <p>At MediWise, we understand the importance of having access to qualified and trusted healthcare professionals. Our System ensures that you receive expert care from accredited physicians who are committed to your well-being.</p>
                <a href="authdoc.php" class="btn"> learn more <span class="fas fa-chevron-right"></span></a>
            </div>
    
            <div class="box">
                <i class="fas fa-pills"></i>
                <h3>Online Pharmacy</h3>
                <p>We understand the importance of seamless access to medications, and our platform is designed to provide a comprehensive and convenient pharmacy experience for all your healthcare needs.</p>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span></a>
            </div>
    
            <div class="box">
                <i class="fas fa-computer"></i>
                <h3>Online Appointments</h3>
                <p>We understand that your time is valuable, and that's why we've designed a user-friendly platform that allows you to schedule appointments with healthcare professionals effortlessly, ensuring you receive the care you need on your terms.</p>
                <a href="#book" class="btn"> learn more <span class="fas fa-chevron-right"></span></a>
            </div>
    
        </div>
    </section>
</body>
</html>