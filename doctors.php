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
    <section class="doctors" id="doctors">

        <h1 class="heading"> <span>Doctors</span></h1>

        <div class="box-container">

            <div class="box">
                <img src="image/doc6.png" alt="">
                <h3>Dr. Biswajit Dey<br>(Gynaecologist)</h3>
                <div class="share">
                    <a href="https://m.facebook.com/drbiswajit.dey.1/" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fas fa-phone"></a><br>
                    <!-- Button trigger modal -->
                   <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Book Now
                        </button> -->
                   
  
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <!-- <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1> -->
                                    <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                                    <!-- </div>
                                    <div class="modal-body">
                                    ...
                                    </div>
                                    <div class="modal-footer"> -->
                                    <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button> -->
                                    </div>
                                </div>
                                </div>
                            </div>
  
  
                </div>
            </div>

            <div class="box">
                <img src="image/doc1.png" alt="">
                <h3>Dr. Sarah Williams<br>(Psychiatrist)</h3>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fas fa-phone"></a>
                </div>
            </div>

            <div class="box">
                <img src="image/doc2.png" alt="">
                <h3>Dr. Andrew Veltuff<br>(Neurologist)</h3>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fas fa-phone"></a>
                </div>
            </div>

            <div class="box">
                <img src="image/doc3.png" alt="">
                <h3>Dr. Nicolas Spark<br>(Orthopedic)</h3>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fas fa-phone"></a>
                </div>
            </div>

            <div class="box">
                <img src="image/doc4.png" alt="">
                <h3>Dr. Alice Carmen<br>(Gastrologist)</h3>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fas fa-phone"></a>
                </div>
            </div>

            <div class="box">
                <img src="image/doc5.png" alt="">
                <h3>Dr. Lisa Malia<br>(Dentist)</h3>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fas fa-phone"></a>
                </div>
            </div>
        
        </div>

</section>

<!-- footer section  -->

<!-- <section class="footer" id="footer">
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
            <a href="#"> <i class="fas fa-chevron-right"></i> cardiology </a>
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
    
    </section> -->
    
    <!-- footer section end -->


</body>
</html>