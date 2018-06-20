<!DOCTYPE html>


<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
		<meta name="google-signin-client_id" content="490214144268-jrkif5k47q7i71kk7roomqb3cd40efgl.apps.googleusercontent.com">

		<title>Jaust a testing</title>
		<link rel="stylesheet" href="css/main.css?<?php echo time(); ?>">
		<script src="https://apis.google.com/js/platform.js" async defer></script>
	</head>

	<body>


		<header>

				<div id ="branding">
					<h1>
						Indian Tourism
					</h1>

				</div>

				<nav>
					<ul>
						<li><a href="mainm.php">Home</a></li><!--<li><a href="reservation.html">reservation</a></li>-->
						<li class="dropdown">
								<a href="#" class="dropbtn">user</a>
								<div class="dropdown-content">
									<a href="login.php">login</a>
									<a href="user.php">signup</a>
									<a href="#">menu3</a>
						</li>


						<li class="dropdown">
								<a href="#" class="dropbtn">Book Now</a>
								<div class="dropdown-content">
									<a href="plane.php">plane</a>

									<a href="train.php">train</a>
									<a href="bus.php">bus</a>

						</li>

						<li><a href="contact.php">contact us</a></li>
					</ul>
				</nav>

			</div>

		</header>



		<section>
			<!-- <div class="container"> -->
				   <div class="slider"id="login">
							<h1>Out of curiosity</h1>

										<div class="login">
											<form action="user_DB.php" method="post">
												<input type="text" name="name" placeholder="Name">
												<input type="password" name="pass" placeholder="Password">
												<input type="submit" name="signup" value="sign up">
												<input type="submit" name="signin" value="sign in">
											</form>
										</div>

										<div class="ads">
													<!-- <a href="http://www.google.com"><img src="login-google.png"></a> -->
													<div id="fb"><a   href="http://www.google.com"><img  src="img/login-facebook.png"></a></div>
													<div class="g-signin2" data-onsuccess="onSignIn" data-width="300" data-height="45" data-padding-bottom="10">

													</div><br>

													<div id="tw"><a  href="tlogin.php" ><img src="img/sign_tw.png"></a></div>
										</div>

							</div>
							<script>
							function onSignIn(googleUser)
													{
														var profile = googleUser.getBasicProfile();
														// alert('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
														// console.log('Name: ' + profile.getName());
														//console.log('Image URL: ' + profile.getImageUrl());
														//console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.

														window.open("goog.php?name="+profile.getName(),"_self");
													}
							</script>

				<!-- </div> -->
		</section>

		<!-- <div class="container"> -->
		<section class="x">

							<div class="places">


									<div class="box">
										<div class="tt">
										<a href="1.php"><img src="img/Hyderabad-768x454.jpg"></a>
										<p>Hyderabad<p>
										</div>
									</div>

									<div class="box">
										<div class="tt">
											<a href="2.php"><img src="img/Lucknow.jpg"></a>
											<p>Lucknow<p>
										</div>
									</div>


									<div class="box">
										<div class="tt">
											<a href="3.php"><img src="img/LSplendour-of-Gujrat.jpg" ></a>
											<p>Gujrat<p>
										</div>
									</div>


									<div class="box">
										<div class="tt">
											<a href="4.php"><img  src="img/lucknow-1-758x502.jpg"></a>
											<p>Ahmedabad<p>
										</div>
									</div>

									<div class="box">
										<div class="tt">
											<a href="5.php"><img src="img/L132945695.jpg"></a>
											<p>Rajasthan<p>
										</div>
									</div>


									<div class="box">
										<div class="tt">
											<a href="6.php"><img src="img/Maitra_Ramban.jpg"></a>
											<p>Darjeeling<p>
										</div>
									</div>

									<div class="box">
										<div class="tt">
										<a href ="7.php">	<img src="img/Kashmir.jpg"></a>
												<p>Kashmir<p>
										</div>
									</div>


									<div class="box">
										<div class="tt">
												<a href="8.php"><img src="img/sikkim.jpg"></a>
												<p>sikkim<p>
										</div>
									</div>


									<div class="box">
										<div class="tt">
												<a href="8.php"><img src="img/sikkim.jpg"></a>
												<p>sikkim<p>
										</div>
									</div>

									<div class="box">
										<div class="tt">
												<a href="8.php"><img src="img/sikkim.jpg"></a>
												<p>sikkim<p>
										</div>
									</div>
								</div>

	</section>
		<!-- </div> -->


		<footer>
			<p>© 2017  All rights reserved</p>
		</footer>




	</body>
</html>
