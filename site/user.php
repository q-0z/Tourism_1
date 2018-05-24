<!DOCTYPE html>


<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">

		<title>Jaust a testing</title>
		<link rel="stylesheet" href="user.css?<?php echo time(); ?>">
	</head>

	<body>
		<header>
			<div class="container">
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

						</li>

						<li class="dropdown">
								<a href="#" class="dropbtn">Book Now</a>
								<div class="dropdown-content">
									<a href="plane.php">plane</a>

									<a href="train.php">train</a>
									

						</li>


						<li><a href="contact.php">contact us</a></li>
					</ul>
				</nav>

			</div>
		</header>

		<div class="container">
			<section >
				<div class="sup">
					<div class="login">
							<h1>Enter Details to Sign up</h1>
							<form  method="post" name="userf" action="user_DB.php" onsubmit="return valid()">
								<input type="text" name="name" placeholder="user">
								<input type="password" name="pass" placeholder="password">
								<input type="password" name="cpass"  placeholder="confirm password"><div id="cont" style="visibility:hidden;color:red"><h>please enter correct password</h></div>
								<input type="submit" name="signup" value="signup">
							</form>

							<script type="text/javascript">
									function checking()
									{
										if(document.userf.cpass.value==document.userf.pass.value)
											document.getElementById("cont").style.visibility = "hidden";

										else
											document.getElementById("cont").style.visibility = "visible";   <!--enter submit using js and use button instead of submit-->
									}



									function valid()
									{

										if (document.userf.cpass.value!=document.userf.pass.value)
										{
											document.getElementById("cont").style.visibility = "visible";
											return false;
										}
										else
											return true;
									}
							</script>
					</div>
				</div>
			</section>
		</div>



		<footer>
			<p>© 2017  All rights reserved</p>
		</footer>



	</body>
</html>
