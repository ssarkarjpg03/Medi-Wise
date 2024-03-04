<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital</title>
    <link rel="stylesheet" href="css/Hospital.css">
    
</head>
<body>
<?php
        include 'authentication.php';
    ?>
    <div class="header">
    
        <div class="side-nav">
            <a href="#" class="logo">
                <img src="image/logo1.png" alt="logo" class="logo-img">
            </a>
            <h2 id="name">Hospital</h2>
            <ul class="nav-links">
                <li><a href="#"><img class="icon" src="image/dashboard.png"><p>Dashboard</p></a></li>
                <li><a href="#"><img class="icon" src="image/home.png"><p>Profile</p></a></li>
                <li>
                    <a href="#"><img class="icon" src="image/appointment.png"><p>Appointsment</p></a>
                </li>
                <li><a href="doctors.php"><img class="icon" src="image/doctor.png"><p>Doctors</p></a></li>
                <li><a href="#"><img class="icon" src="image/hospitalisation.png"><p>Patients</p></a></li>
                <li><a href="services.php"><img class="icon" src="image/customer-service.png"><p>Services</p></a></li>
                <li><a href="logout_hospital.php"><img class="icon" src=""><p>Logout</p></a></li>
                <div class="active"></div>
            </ul>
        </div>
        <div class="dashoard">
            <div class="total-patient">
                
            </div>
            <div class="total-doctor">

            </div>
        </div>
    </div>
</body>
</html>
