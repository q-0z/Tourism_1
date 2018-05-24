<?php

	session_start();

function Db()
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







function CreateTable()
{

  $link = mysqli_connect("127.0.0.1", "root", "", "demo");      ///////////demo is database name
  if($link === false)
  {
    die("ERROR: Could not connect. " . mysqli_connect_error());
  }
  $val=mysqli_query($link,'select 1 from places');

  if($val == FALSE)
  {
    $sql = "CREATE TABLE places(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
		pl_source VARCHAR(30) NOT NULL,
		pl_dest VARCHAR(30),
		pl_price VARCHAR(30))";
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
    echo "  ";
  }

  mysqli_close($link);
}



//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////




/* function Insert($uname,$pass)  /////////////////insert data into db
{
  $link = mysqli_connect("127.0.0.1", "root", "", "demo");      ///////////demo is database name
  if($link === false)
  {
    die("ERROR: Could not connect. " . mysqli_connect_error());
  }
  $sql = "INSERT INTO users (pl_name,pl_price,pl_loc,user, pass) VALUES ('".$pl_name."','".$pl_price."','".$pl_loc."','".$uname."','".$pass."')";
    /////put down checking wheather the value is insurtef or not
  if(mysqli_query($link, $sql))
  {
    echo "Records inserted successfully.";
    ////change the location or logggd in th user
  }
  else
  {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    ///send eroor message on screen
  }
} */




/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////





function retreave($user,$pass)						/////login function
{
  $link = mysqli_connect("127.0.0.1", "root", "", "demo");      ///////////demo is database name
  if($link === false)
  {
    die("ERROR: Could not connect. " . mysqli_connect_error());
  }


  $sql="SELECT user,pass FROM users WHERE user='".$user."' AND pass='".$pass."'"; /////////incomplete-------



  $result = $link->query($sql);

	if($result)
	{
		if ($result->num_rows > 0)
		{
			// output data of each row
			while($row = $result->fetch_assoc())
			{
				// echo "id: " . $row["user"]. " - Name: " . $row["pass"]. "<br>";



				//$_SESSION['name']=$row["user"];
				//$_SESSION['pass']=$row["pass"];


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


function ret($name)
{
	return $name;
}










Db();
CreateTable();






?>
