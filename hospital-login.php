<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/hospital-login.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Hospital Login Form </title>
</head>
<body>
	<div class="container" id="container">
		<div class="form-container log-in-container">
			<form action="hospital-login-data.php" method="post">
				<h1>Hospital Login </h1>
				<div class="social-container">
					<!-- <a href="#" class="social"><i class="fa fa-facebook fa-2x"></i></a>
					<a href="#" class="social"><i class="fab fa fa-twitter fa-2x"></i></a>
                    <a href="#" class="social"><i class="fab fa fa-google fa-2x"></i></a> -->
				</div>
				<!-- <span>or use your account</span> -->
				<input type="number" name="hospitalid" placeholder="Hospital Id" />
				<input type="password" name="password" placeholder="Password" />
				<a href="#">Forgot your password?</a>
				<!-- <button>Log In</button> -->
				<button>Log In</button>
				<a href="hospital-registration.html">Add a new hospital</a> 
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