<!DOCTYPE html>


<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">

		<title>Jaust a testing</title>
		<link rel="stylesheet" href="css/main.css?<?php echo time(); ?>">
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
						<div class="php">
								<?php session_start();
									if(isset($_SESSION['name']))
										echo "  ".$_SESSION['name'];
									else
										echo "error";

								?>
						</div>


								<form name="togo" action="search_place.php" method="post">
									<!--// <input type="text" placeholder="from" name="from"  >		-->

													<input list="loc" name="from" placeholder="from">
													  <datalist id="loc" >
																<option value="kolkata">
																<option value="bihar">
																<option value="digha">
																<option value="puri">
																<option value="darj">
													  </datalist>
													<!--//<input type="text" placeholder="to" name="to">-->

													<input list="des" name="to" placeholder="to">
													  <datalist id="des">
																<option value="kolkata">
																<option value="bihar">
																<option value="digha">
																<option value="puri">
																<option value="darj">
													  </datalist>


													<input type="submit" value="enter" name="search">
								</form>
									<div class="sphp">
												<?php

													if(isset($_POST['search']))
													{
														$from=$_POST['from'];
														$to=$_POST['to'];
														locate($from,$to);

													}

													function locate($from,$to)
													{
														 $link = mysqli_connect("127.0.0.1", "root", "", "demo");      ///////////demo is database name
														  if($link === false)
														  {
															die("ERROR: Could not connect. " . mysqli_connect_error());
														  }
														  $sql="SELECT pl_source,pl_dest,pl_price FROM places WHERE pl_source='".$from."' AND pl_dest='".$to."'"; /////////incomplete-------

														  $result = mysqli_query($link,$sql);

															if($result)
															{

																if (mysqli_num_rows($result)> 0)
																{
																	// output data of each row
																	while($row = mysqli_fetch_assoc($result))
																	{
																		//$source= $row['pl_source']; // " - to: " . $row['pl_dest']. " -price- " .$row['pl_price'];
																		header("Location:rervation_register.php?source=".$row['pl_source']."&dest=".$row['pl_dest']."&price=".$row['pl_price']);
																	}


																}
																else
																{
																	echo "0 results";
																}
															}
															else
															{
																echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
																///send eroor message on screen
															}


														$link->close();

													}
												?>


										</div>





					</section>
				</div>

		<section class="x">
		</section>



		<footer>
			<p>Wow so we finally reach at the bottom of the page </p>
		</footer>


	</body>
</html>
