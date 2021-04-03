<?php
	session_start();
	if(isset($_SESSION['username'])) {
		header("location:profile.php");
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <link rel="stylesheet" href="./css/style.css" />

</head>
<body class="bg-image" style="background-image: url('assets/background.svg');
      height: 100%; width: 100%; background-size: cover;">
	<div class="container mt-5 ">
		<div class="row" >
			<div class="col-lg-4 offset-lg-4" id='alert'>
				<div class="alert alert-success alert-dismissible" role='alert' >
					<strong id="result" ></strong>
				</div>
			</div>
		</div>
		<!-- Login form Starting -->
		<div class="row" >
			<div class="col-lg-4 offset-lg-4 " id="login-box" >
				<div class="text-center pb-5 mt-2">
                <h1 class="login-title text-dark">Login</h1>
                <p class="p-1 m-0 font-ubuntu text-black-50">Login and enjoy additional features</p>
                <span class="font-ubuntu text-black-50">New User? <a href="#" id="register-button">Register Here</a></span>
            </div>

				<form action="" method="post" role="form" class="p-2" id="login-form">
					<div class="form-group" >
						<input type="text" name="username" class="form-control" placeholder="Username *" required minlength="4" value="<?php if(isset($_COOKIE['username'])) { echo $_COOKIE['username']; } ?>" >
					</div>
					<div class="form-group" >
						<input type="password" name="password" class="form-control" placeholder="Password *" required minlength="8"
						value="<?php if(isset($_COOKIE['password'])) { echo $_COOKIE['password']; } ?>">
					</div>
					<div class="form-group" >
						<div class="custom-control custom-checkbox" >
							<input type="checkbox" name="remember" class="custom-control-input" id="customCheckBox1" <?php if(isset($_COOKIE['username'])) { ?> checked <?php } ?> >
							<label for="customCheckBox1" class="custom-control-label" >Remember Me</label>
							<a href="#" id="forget-button" class="float-right"  >Forget Password?</a>
						</div>
						
					</div>
					<div class="form-group" >
						<input type="submit" name="login" id="login" value="Login" class="btn btn-warning rounded-pill btn-block">
					</div>
					


					
				</form>
			</div>
		</div>
		<!-- Login Form Ending -->

		<!-- Register Form Starting -->
		<div class="row" >
			<div class="col-lg-4 offset-lg-4 " id="register-box" >
				<div class="text-center pb-5 mt-2">
                    <h1 class="login-title text-dark">Register</h1>
                    <p class="p-1 m-0 font-ubuntu text-black-50">Register and enjoy additional features</p>
                    <span class="font-ubuntu text-black-50">Already registered? <a href="#" id="login-button">Login</a></span>
                </div>
				<form action="" method="post" role="form" class="p-2" id="register-form">
					<div class="form-group" >
						<input type="text" name="name" id="fname" class="form-control" placeholder="Full Name *" required minlength="3" >
					</div>
					<div class="form-group" >
						<input type="text" name="username" id="uname" class="form-control" placeholder="Username *" required minlength="4" >
					</div>
					<div class="form-group" >
						<input type="email" name="email" id="email" class="form-control" placeholder="E-mail *" required >
					</div>

					<div class="form-group" >
						<input type="password" name="password" id="pass" class="form-control" placeholder="Password *" required minlength="8">
					</div>
					<div class="form-group" >
						<input type="password" name="confirm_password" id="cpass" class="form-control" placeholder="Confirm Password *" required minlength="8" >
					</div>
					<div class="form-group" >
						<div class="custom-control custom-checkbox" >
							<input type="checkbox" name="conditions" class="custom-control-input form-check-label font-ubuntu text-black-50" id="customCheckBox2" >
							
							<label for="customCheckBox2" class="custom-control-label" >I agree to the 
							<a href="#"  >terms, conditions & policy</a>(*)
							</label>
							
						</div>
						
					</div>
					<div class="form-group" >
						<input type="submit" name="register" id="register" value="Register" class="btn btn-warning rounded-pill btn-block text-dark">
					</div>
				</form>
			</div>
		</div>
		<!-- Register Form  Ending -->
	</div>




<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js" integrity="sha512-UdIMMlVx0HEynClOIFSyOrPggomfhBKJE28LKl8yR3ghkgugPnG6iLfRfHwushZl1MOPSY6TsuBDGPK2X4zYKg==" crossorigin="anonymous"></script>

<script src="js/main.js"></script>
</body>
</html>