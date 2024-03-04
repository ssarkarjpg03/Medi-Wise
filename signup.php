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
      <form action="sign_data.php" method="POST">
        <h1>Sign Up</h1>
        <div class="social-container">
          <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="social"><i class="fab fa-google"></i></a>
        </div>
        <span>or use your account</span>
        <input type="text" id="firstname" name="firstname" placeholder="First Name" require>
        <input type="text" id="lastname" name="lastname" placeholder="Last Name" require>
        <input type="text" id="username" name="username" placeholder="Username" require>
        <input type="number" id="phoneno" name="phoneno" placeholder="Phone No." require>
        <input type="email" id="email" name="email" placeholder="Email" require>
        <input type="password" id="password" name="password" placeholder="Password" require><br>
        <button class="button" type="submit">Register</button><br>

       <span> Already have an account? <a href="login.php">Login</a></span>
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