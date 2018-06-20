<!DOCTYPE html>


<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">

		<title>Jaust a testing</title>
		<link rel="stylesheet" href="css/main.css?<?php echo time(); ?>" >

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
									<a href="userlogged.php">Control</a>
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
				<div class="slider" id ="mainpage">

					<div class="w3-content w3-section" >
								  <img class="mySlides w3-animate-fading" src="img/Hyderabad-768x454.jpg">
								  <img class="mySlides w3-animate-fading" src="img/Lucknow.jpg" >
								  <img class="mySlides w3-animate-fading" src="img/LSplendour-of-Gujrat.jpg" >
								  <img class="mySlides w3-animate-fading" src="img/lucknow-1-758x502.jpg" >
					</div>

				<script>
								var myIndex = 0;
								carousel();

								function carousel()
								{
								    var i;
								    var x = document.getElementsByClassName("mySlides");
								    for (i = 0; i < x.length; i++) {
								       x[i].style.display = "none";
								    }
								    myIndex++;
								    if (myIndex > x.length) {myIndex = 1}
								    x[myIndex-1].style.display = "block";
								    setTimeout(carousel, 9000);
									}
				</script>




				<!-- </div> -->
		</section>


		<!-- <div class="container"> -->
		 <section class="x">

								<div class="places">


										<div class="box">
											<div class="tt">
											<a href="info_place/1.php"><img src="img/Hyderabad-768x454.jpg"></a>
											<p>Hyderabad<p>
											</div>
										</div>

										<div class="box">
											<div class="tt">
												<a href="info_place/2.php"><img src="img/Lucknow.jpg"></a>
												<p>Lucknow<p>
											</div>
										</div>


										<div class="box">
											<div class="tt">
												<a href="info_place/3.php"><img src="img/LSplendour-of-Gujrat.jpg" ></a>
												<p>Gujrat<p>
											</div>
										</div>


										<div class="box">
											<div class="tt">
												<a href="info_place/4.php"><img  src="img/lucknow-1-758x502.jpg"></a>
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
