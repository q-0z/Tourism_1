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

		<div class="container">
			<section >

        <div class="pus">
    				<div class="sup">
            					<div class="login2">
                    							<h1>Round Trip</h1>
                    							<form  method="post" name="userf" action="bus_DB.php" onsubmit="cc()">




																		<input list="from" name="from" placeholder="from">
																			<datalist id="from" >
																					<option value="kolkata">
																					<option value="pune">
																					<option value="chennai">
																					<option value="delhi">

																			</datalist>

																			<input list="to" name="to" placeholder="to">
																				<datalist id="to" >
																						<option value="kolkata">
																						<option value="pune">
																						<option value="chennai">
																						<option value="delhi">

																				</datalist>

																				<input list="class" name="class" placeholder="class">
																					<datalist id="class" >
																							<option value="Economy">
																							<option value="Busssuiness">
																							<option value="Premium">
																							<option value="Premium Economy">

																					</datalist>
																				<input list="des" name="pass" placeholder="passengers">
																					<datalist id="des">
																							<option value="1">
																							<option value="2">
																							<option value="3">
																							<option value="4">
																							<option value="5">
																					</datalist>
                                          <input type="date" placeholder="date" name="date">
                          								<input type="submit" name="book1" value="Book">
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

        </div>
        <div class="pus">
            <div class="sup2">
                  <div class="login">
                            <h1>single Trip</h1>
                            <form  method="post" name="userf" action="bus_DB.php" onsubmit="cc()">

															<input list="from" name="from" placeholder="from">
																<datalist id="from" >
																		<option value="kolkata">
																		<option value="pune">
																		<option value="chennai">
																		<option value="delhi">

																</datalist>

																<input list="to" name="to" placeholder="to">
																	<datalist id="to" >
																			<option value="kolkata">
																			<option value="pune">
																			<option value="chennai">
																			<option value="delhi">

																	</datalist>

																	<input list="class" name="class" placeholder="class">
																		<datalist id="class" >
																				<option value="Economy">
																				<option value="Busssuiness">
																				<option value="Premium">
																				<option value="Premium Economy">

																		</datalist>
																	<input list="des" name="pass" placeholder="passengers">
																		<datalist id="des">
																				<option value="1">
																				<option value="2">
																				<option value="3">
																				<option value="4">
																				<option value="5">
																		</datalist>
                                  <input type="date" placeholder="date" name="date">
                                  <input type="submit" name="book2" value="Book" >
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





																function cc()
																{
															    var user='<?php echo $_SESSION['name'];?>';
																	alert(user);
																}

															    // if (user != "")
																	//  {
																	// 	 	document.write("welcome"+user);
															    // 	}
																	//  else
																	//  {
															    //    	document.write("please login");
															    //  }


                      </script>
                  </div>
                </div>
        </div>






			</section>
		</div>



		<footer>
			<p>© 2017  All rights reserved</p>
		</footer>



	</body>
</html>
