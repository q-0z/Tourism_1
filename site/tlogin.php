<?php
session_start();
require 'autoload.php';
require_once 'user_DB.php';
use Abraham\TwitterOAuth\TwitterOAuth;



define('CONSUMER_KEY', 'IORwEWbeHqlllDoC9jsmCmiFb'); // add your app consumer key between single quotes
define('CONSUMER_SECRET', '57gdFzGhxNSf1HEzkwEoUIngVH1PXMsCpH540KmjIOWMj818zC'); // add your app consumer secret key between single quotes
define('OAUTH_CALLBACK', 'http://qz.com/site1o1/cb.php'); // your app callback URL

if (!isset($_SESSION['access_token'])) {
	$connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET);
	$request_token = $connection->oauth('oauth/request_token', array('oauth_callback' => OAUTH_CALLBACK));
	$_SESSION['oauth_token'] = $request_token['oauth_token'];
	$_SESSION['oauth_token_secret'] = $request_token['oauth_token_secret'];
	$url = $connection->url('oauth/authorize', array('oauth_token' => $request_token['oauth_token']));
	header( 'Location:'.$url);
} else {
	$access_token = $_SESSION['access_token'];
	$connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $access_token['oauth_token'], $access_token['oauth_token_secret']);
	$user = $connection->get("account/verify_credentials");
	echo $user->screen_name;









				function Inserted($uname,$pass)
				{
				  $link = mysqli_connect("127.0.0.1", "root", "", "demo");      ///////////demo is database name
				  if($link === false)
				  {
				    die("ERROR: Could not connect. " . mysqli_connect_error());
				  }


					$sql="SELECT user FROM users WHERE user='".$user."'"; /////////incomplete-------
					$result = $link->query($sql);
					if($result)
					{
									if ($result->num_rows > 0)
									{
										// output data of each row
												while($row = $result->fetch_assoc())
												{
													// echo "id: " . $row["user"]. " - Name: " . $row["pass"]. "<br>";
													$_SESSION['name']=$row["user"];
													$_SESSION['pass']=$row["pass"];
													 header("Location: userlogged.php");
												}

									}
									else
									{
										echo "0 results found";
										$sql = "INSERT INTO users (user, pass) VALUES ('".$uname."','".$pass."')";
										if(mysqli_query($link, $sql))
										{
											 echo "Records inserted successfully.";
											 $_SESSION['name']=$uname;
											 $_SESSION['pass']=$pass;
											 header("Location: userlogged.php");
										}
									 else
									 {
										 echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
										 ///send eroor message on screen
									 }

									}
					}
					else
					{
										echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

					 }
					$link->close();
				}
				Inserted($user->screen_name,'');






}
?>
