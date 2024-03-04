<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Doctor Ragistration</title>
  <link rel="stylesheet" href="css/registration.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  
</head>
<body>
  <div class="container" id="container">
    <div class="form-container log-in-container">
      <form action="doctor-registration_data.php" method="POST">
        <!-- <h1>Sign Up</h1> -->
        <!-- <div class="social-container">
          <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="social"><i class="fab fa-google"></i></a>
        </div> -->
        <!-- <span>or use your account</span> -->
        <input type="text" id="firstname" name="firstname" placeholder="First Name">
        <input type="text" id="lastname" name="lastname" placeholder="Last Name">
        <input type="text" id="catagory" name="catagory" placeholder="catagory">
        <input type="text" id="username" name="username" placeholder="Username">
        <!-- <input type="number" id="phoneno" name="phoneno" placeholder="Phone No."> -->
        <input type="email" id="email" name="email" placeholder="Email">
        <input type="password" id="password" name="password" placeholder="Password"><br>
        <button class="button" type="submit">Add Doctor</button><br>

       <!-- <span> Already have an account? <a href="login.php">Login</a></span> -->
      </form>
    </div>
    <div class="overlay-container">
      <div class="overlay">
        <div class="overlay-panel overlay-right">
          <h1>Doctor Addition</h1>
          <p>We are excited to have you.</p>
        </div>
      </div>
    </div>
  </div>


</html>