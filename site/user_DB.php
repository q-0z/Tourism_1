<?php

/////////////////////main database of user/////////////////////////////////////////////////////////////////////
if(session_status() == PHP_SESSION_NONE){
   //session has not started
   session_start();
}

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
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function CreateTable()
{
  $link = mysqli_connect("127.0.0.1", "root", "", "demo");      ///////////demo is database name
  if($link === false)
  {
    die("ERROR: Could not connect. " . mysqli_connect_error());
  }
  $val=mysqli_query($link,'select 1 from users');

  if($val == FALSE)
  {
    $sql = "CREATE TABLE users(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    user VARCHAR(30) NOT NULL,
    pass VARCHAR(30) NOT NULL


  )";
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
    echo " no happening";
  }

  mysqli_close($link);
}


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function Insert($uname,$pass)  /////////////////insert data into db
{
  $link = mysqli_connect("127.0.0.1", "root", "", "demo");      ///////////demo is database name
  if($link === false)
  {
    die("ERROR: Could not connect. " . mysqli_connect_error());
  }
  $sql = "INSERT INTO users (user, pass) VALUES ('".$uname."','".$pass."')";
    /////put down checking wheather the value is insurtef or not
  if(mysqli_query($link, $sql))
  {
    echo "Records inserted successfully.";
    ////change the location or logggd in th user
  //  header("Location: mainm.php");
  }
  else
  {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    ///send eroor message on screen
  }
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////




function login($user,$pass)						/////login function
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
                  				$_SESSION['name']=$row["user"];
                  				$_SESSION['pass']=$row["pass"];
                  			}
              		}
              		else
              		{
              			echo "0 results found";
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






// function Insertpl($uname,$pass)  /////////////////insert data into db
// {
//   $link = mysqli_connect("127.0.0.1", "root", "", "demo");      ///////////demo is database name
//   if($link === false)
//   {
//     die("ERROR: Could not connect. " . mysqli_connect_error());
//   }
//   $sql = "INSERT INTO users (user, pass,pl_s,pl_d,date,t_by,price) VALUES ('".$uname."','".$pass."','".$pl_s."','".$pl_d."','".$date."','".$t_by."','".$price"')";
//     /////put down checking wheather the value is insurtef or not
//   if(mysqli_query($link, $sql))
//   {
//     echo "Records inserted successfully.";
//     ////change the location or logggd in th user
//     header("Location: mainm.php");
//   }
//   else
//   {
//     echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
//     ///send eroor message on screen
//   }
// }

///////////////////////////////////////////////////////////////////////////////////////////////////////////


	if(isset($_SESSION['name']) && isset($_SESSION['pass']))
    {
       echo "yesss";

    }
	else
	{
		echo"noooooo;";
	}


		//echo $_POST['pass'];
	if(isset($_POST['signup']))
		{

			$uname=$_POST['name'];
			$pass=$_POST['pass'];
			Db();
			CreateTable();
			Insert($uname,$pass);


		}
	   elseif (isset($_POST['signin']))
		{
			$user=$_POST['name'];
			$pass=$_POST['pass'];
			login($user,$pass);
			header("Location: userlogged.php");

		}
    elseif (isset($_POST['signin']))
    {
      $uname=$_POST['name'];
      $pl_s=$_POST['from'];
      $pl_d=$_POST['to'];
			$price=$_POST['price'];
      $seats=$_POST['seats'];
			$date=$_POST['date'];
    }





 ?>
