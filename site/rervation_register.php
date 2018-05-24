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




		</header>


<div class="container">
		<section class="about">
				 <div class="res">
						<div  id="register">
							<div class="php">
								<?php session_start();
									if(isset($_SESSION['name']))
										echo "".$_SESSION['name'];
									else
										echo "error";
								?>
							</div>
											<form name="x" action="reservation_DB.php" method="post">
														<input type="text" placeholder="name" name="name" value="<?php echo $_SESSION['name']; ?>">
														<input type="text" placeholder="from" name="from" value="<?php echo $_REQUEST['source']; ?>">
														<input type="text" placeholder="to" name="to"value="<?php echo $_REQUEST['dest']; ?>">
														<input type="text" placeholder="price" name="price" value="<?php echo $_REQUEST['price']; ?>">
														<input type="text" placeholder="no of seats" name="seats" >
														<input type="date" placeholder="date" name="date">
														<input type="submit" name="submit" value="submit">  <!--//echo $_REQUEST['id'];-->
											</form>
							</div>
					</div>
		</section>
</div>





				<footer>
						<p>Wow so we finally reach at the bottom of the page </p>
				</footer>




	</body>
</html>
