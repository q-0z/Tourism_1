<?php

session_start();


function DB()
{
  $link = mysqli_connect("127.0.0.1", "root", "");   /////////////////ip , name ,password

  if($link === false)
  {
    die("ERROR: Could not connect. " . mysqli_connect_error());
  }
  $sql = "CREATE DATABASE IF NOT EXISTS demo";
  if(mysqli_query($link, $sql))    /////////////// creating db
    {
  		echo "Database created successfully";
    }
	else
	{
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
}





function Table()
{
  echo "is it\n";
  $link = mysqli_connect("127.0.0.1", "root", "", "demo");      ///////////demo is database name
  if($link === false)
  {
    die("ERROR: Could not connect. " . mysqli_connect_error());
  }
  $val=mysqli_query($link,'select 1 from reserv');

  if($val == FALSE)
  {
    $sql = "CREATE TABLE u_sav(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	  pl_to VARCHAR(30) NOT NULL,
	  pl_from VARCHAR(30),
	  pl_price VARCHAR(30),
	  seats VARCHAR(30),
	  date VARCHAR(30),
    user VARCHAR(30),
    pass VARCHAR(30))";
    if(mysqli_query($link, $sql))
    {
      echo "Table created successfully\n";
    }
    else
    {
      echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
  }

  else
  {
    echo "bbhhh";
  }

  mysqli_close($link);
}
function Insert(){}
function Fetch(){}




if()




?>
