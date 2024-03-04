<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Signup</title>
  <link rel="stylesheet" href="css/registration.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  
</head>
<body>
  <div class="container" id="container">
    <div class="form-container log-in-container">
      <form action="hospital-registration-data.php" method="POST">
        <h1>Hospital Registration</h1>
        <!-- <div class="social-container">
          <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="social"><i class="fab fa-google"></i></a>
        </div>
        <span>or use your account</span> -->
        <input type="text" id="name" name="name" placeholder="Hospital Name">
        <input type="text" id="city" name="city" placeholder="City">
        <input type="text" id="address" name="address" placeholder="Address">
        <input type="number" id="hospitalid" name="hospitalid" placeholder="Hospital id">
        <input type="password" id="password" name="password" placeholder="Password"><br>
        <button class="button" type="submit">Register</button><br>

       <span> Already have an account? <a href="hospital-login.php">Login</a></span>
      </form>
    </div>
    <div class="overlay-container">
      <div class="overlay">
        <div class="overlay-panel overlay-right">
          <h1>Welcome!</h1>
          <p>We are excited to have you.</p>
        </div>
      </div>
    </div>
  </div>


</html>