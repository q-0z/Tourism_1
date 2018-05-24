<?php 
							function login()						/////login function
							{
							  $link = mysqli_connect("127.0.0.1", "root", "", "demo");      ///////////demo is database name
							  if($link === false)
							  {
								die("ERROR: Could not connect. " . mysqli_connect_error());
							  }


							  $sql="SELECT * FROM reserv"; /////////incomplete-------
							  
							  
							  
							  $result = $link->query($sql);
							  
								if($result)
								{
									if ($result->num_rows > 0) 
									{
										// output data of each row
										while($row = $result->fetch_assoc()) 
										{
											 echo "id: " . $row["pl_to"]."<br><br>";
											
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
									////send eroor message on screen
								}
								$link->close();        
							}

login();								

?>