<?php


	function DBcreate()
	{
		$link = mysqli_connect("127.0.0.1", "root", "");
		if($link === false)
		{
			die("ERROR: Could not connect. " . mysqli_connect_error()); ///////checking if connection error between mysql and server
		}

		$sql = "CREATE DATABASE IF NOT EXISTS demo";            /////////////data base create

		if(mysqli_query($link, $sql))													//////query to sql
		{
			echo "Database created successfully";
		}
		else
		{
			echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);  ////////error on query
		}

		$link = mysqli_connect("127.0.0.1", "root", "", "demo");									/////connection to db
		if($link === false)
		{
			die("ERROR: Could not connect. " . mysqli_connect_error());
		}

		$val=mysqli_query($link,'select 1 from demo');         /////sql

		if($val != FALSE)																									////checking if table can be created
		{
			$sql = "CREATE TABLE persons(																			////sql
			id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
			first_name VARCHAR(30) NOT NULL,
			last_name VARCHAR(30) NOT NULL,
			email VARCHAR(70) NOT NULL UNIQUE
						)";

			if(mysqli_query($link, $sql))
			{
				 echo "Table created successfully.";
		  }
		   else
		  {
				echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
			 }
		}
		else
		{
			echo"fuked up";
		}


		mysqli_close($link);
	}

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	function register($uname,$pass)											/////insertion of user and pass in db
	{
		echo $uname,$pass;
		$sql = "INSERT INTO users (username, password, email) VALUES ('".$uname."','".$pass."')";
		/* $sql = "INSERT INTO persons (first_name, last_name, email) VALUES ('Peter', 'Parker', 'peterparker@mail.com')"; */
		if(mysqli_query($link, $sql))
		{
			echo "Records inserted successfully.";
		}
		else
		{
			echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
		}

	}


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	function login($uname,$pass)						/////login function
	{
		echo $uname,$pass;

	}


	if(isset($_POST['signup']))										////cheking if signup or signin pressed
	{
		header("location:u.html");
	}
	elseif (isset($_POST['signin']))
	{
			$uname=$_POST['name'];
			$pass=$_POST['pass'];
			login($uname,$pass);

	}







?>
