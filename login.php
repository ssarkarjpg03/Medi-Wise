<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/patient-login.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Login Form </title>
</head>
<body>
	<div class="container" id="container">
		<div class="form-container log-in-container">
			<form action="login_data.php" method="post">
				<h1>Login</h1>
				<div class="social-container">
					<a href="#" class="social"><i class="fa fa-facebook fa-2x"></i></a>
					<a href="#" class="social"><i class="fab fa fa-twitter fa-2x"></i></a>
                    <a href="#" class="social"><i class="fab fa fa-google fa-2x"></i></a>
				</div>
				<span>or use your account</span>
				<input type="email" name="email" placeholder="Email" required>
				<input type="password" name="password" placeholder="Password" required>
				<a href="#">Forgot your password?</a>
				<!-- <button>Log In</button> -->
				<button>Log In</button>
				<a href="signup.php"><span> Not a user? </span></a> 
			</form>
		</div>
		<div class="overlay-container">
			<div class="overlay">
				<div class="overlay-panel overlay-right">
					<h1>Welcome back !</h1>
					<p>We are happy to e-meet you again.</p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>