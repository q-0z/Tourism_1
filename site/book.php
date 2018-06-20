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
  <div class="slider"id="login">
    <div  id="book">
      <form method="post" action="book_insert.php">
        <input type="text" name="user" placeholder="user" >
        <input type="text" name="from" placeholder="from" value="<?php echo $_REQUEST['a']; ?>">
        <input type="text" name="to" placeholder="to" value="<?php echo $_REQUEST['b']; ?>">
        <input type="text" name="date" placeholder="date" value="<?php echo $_REQUEST['c']; ?>">
            <input type="text" name="fare" placeholder="fare" value="<?php echo $_REQUEST['d']; ?>">
        <input type="text" name="class" placeholder="class" value="<?php echo $_REQUEST['e']; ?>">


        <input type="text" name="seats" placeholder="seats">
        <input type="submit" name="booking">
      </form>
    </div>
    </div>
</section>

  <footer>
    <p>© 2017  All rights reserved</p>
  </footer>




  </body>
</html>
