<!DOCTYPE html>


<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">

		<title>Jaust a testing</title>
		<link rel="stylesheet" href="css/user.css?<?php echo time();?>">
	</head>
	<?php session_start();


	// while ($_SESSION['name'] == '')
	// {
	// 	echo '<script>alert("login please:"); window.open("login.php","_self");</script>';
	// }
	 ?>
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




	<div class="container" id ="conti">
		<section class="maindesign">
			<div class="sup">
				<div  id="loggedu">
						<div id="mbox">   <?php if(isset($_SESSION['name']))echo $_SESSION['name'];?>
						</div>
					<div class="mbox">
						<a href=usercustomize.php>Account</a>
					</div>
					<div class="mbox" >
						<a href="search_place.php">Register </a>
					</div>
					<div class="mbox"  onclick="myFunction()"><a href=# >Profile
					</a></div>
					<div class="mbox"><a href=# >Feedback</a></div>
					<div class="mbox"><a href=logout.php >Logout</a></div>
				</div>
			</div>
		</section>
	</div>

	<section class="x">

	</section>



	<footer>
		<p>© 2017  All rights reserved</p>
	</footer>


			<script>
				// When the user clicks on div, open the popup
		function myFunction()
		{
		    var popup = document.getElementById("pop");

		    popup.classList.add("show");
		}
		</script>

	</body>
</html>
