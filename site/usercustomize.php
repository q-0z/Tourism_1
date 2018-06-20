<!DOCTYPE html>


<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">

		<title>Jaust a testing</title>
		<link rel="stylesheet" href="css/user.css?<?php echo time(); ?>">
	</head>
	<?php session_start(); ?>
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
				<section class="z">

				   <div class="">
							 <h1>Booking status</h1>
								 <div id="php">
										<?php
											function login()						/////login function
											{
												$link = mysqli_connect("127.0.0.1", "root", "", "demo");      ///////////demo is database name
												if($link === false)
													die("ERROR: Could not connect. " . mysqli_connect_error());
													$sql="SELECT * FROM plane where pl_source='".$_REQUEST['from']."' and pl_dest='".$_REQUEST['to']."'";
													$result = $link->query($sql);
													if($result)
													{
														if ($result->num_rows > 0)
														{
															// output data of each row
															while($row = $result->fetch_assoc())
															{

																echo"<form>";
																	echo "<input type=\"button\"   id=\"ok\"  onClick=\"return Book()\"  value=\"from:". $row["pl_source"]."    To:". $row["pl_dest"]."    Date". $row["date"]."    Fare:". $row["fare"]."    Class:". $row["class"]. "\">";
																	echo"<br>";
																echo"</form>";

																 //echo "<sec><div>To: " . $row["pl_to"]."</div> From:  ".$row['pl_from']." Price:  ".$row['pl_price']." user: ".$row['user']." seats: ".$row['seats']." and date:".$row['date']."by:".$row['t_by']."<br></sec>";
															}
														}
														else
															echo "0 results";
												}
												else
													echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
												$link->close();
												echo "<script>
													function Book()
													{
														var data=document.getElementById('ok');
														return window.location.href=\"separation.php?x=\"+data.value;


												 }
													</script>";

											}

											login();

										?>
									</div>
						</div>

				</section>
		</div>







		<footer>
			<p>© 2017  All rights reserved</p>
		</footer>



	</body>
</html>
