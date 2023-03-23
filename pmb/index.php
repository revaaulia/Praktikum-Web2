<?php
session_start(); // mulai session
?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Login PMB</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="dist_login/css/style.css">

	</head>
	<body class="img js-fullheight" style="background-image: url(dist_login/images/bg.jpg);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Login</h2>
					<?php

                    if (isset($_SESSION['gagal'])) {
                        echo $_SESSION['gagal'];
                    }
                    ?>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">Have an account?</h3>
		      	<form method="POST" action="login.php" class="signin-form">
		      		<div class="form-group">
		      			<input type="text" name="username" class="form-control" placeholder="Username" required>
		      		</div>
	            <div class="form-group">
	              <input name="password" id="password" type="password" class="form-control" placeholder="Password" required>
	              <span toggle="#password" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
	            <div class="form-group">
	            	<input type="submit" name="login" class="form-control btn btn-primary submit px-3">Sign In</input>
	            </div>
	            <div class="form-group d-md-flex">
	            	<div class="w-50">
						<label class="checkbox-wrap checkbox-primary">Remember Me
							<input type="checkbox" checked>
							<span class="checkmark"></span>
						</label>
					</div>
					<div class="w-50 text-md-right">
						<a href="#" style="color: #fff">Forgot Password</a>
					</div>
	            </div>
	          </form>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="dist_login/js/jquery.min.js"></script>
  <script src="dist_login/js/popper.js"></script>
  <script src="dist_login/js/bootstrap.min.js"></script>
  <script src="dist_login/js/main.js"></script>
	</body>
</html>