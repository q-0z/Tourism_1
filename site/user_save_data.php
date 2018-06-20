<?php

session_start();


function DB()
{
  $link = mysqli_connect("127.0.0.1", "root", "");   /////////////////ip , name ,password
  if($link === false)
    die("ERROR: Could not connect. " . mysqli_connect_error());
  $sql = "CREATE DATABASE IF NOT EXISTS demo";
  if(mysqli_query($link, $sql))    /////////////// creating db
  		echo "Database created successfully";
	else
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}





function Table()
{
  echo "is it\n";
  $link = mysqli_connect("127.0.0.1", "root", "", "demo");      ///////////demo is database name
  if($link === false)
    die("ERROR: Could not connect. " . mysqli_connect_error());
  $val=mysqli_query($link,'select 1 from u_sav');

  if($val == FALSE)
  {
    $sql = "CREATE TABLE u_sav(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	  pl_source VARCHAR(30) NOT NULL,
	  pl_dest VARCHAR(30),
	  fare VARCHAR(30),
	  class VARCHAR(30),
	  date VARCHAR(30),
    name VARCHAR(30),
    user VARCHAR(30))";
    if(mysqli_query($link, $sql))
      echo "Table created successfully\n";
    else
      echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
  }

  else
    echo "bbhhh";

  mysqli_close($link);
}


DB();
Table();


if(isset($_SESSION['name']) && isset($_SESSION['pass']))
  {
     $user=$_SESSION['name'];
     $pass=$_SESSION['pass'];
     echo "session has been set";

  }
else
{
  echo"coudlbt resolve name please register user 1st ;\n";
}


?>
