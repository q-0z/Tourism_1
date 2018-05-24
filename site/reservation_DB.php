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
	echo "is it\n";
  $link = mysqli_connect("127.0.0.1", "root", "", "demo");      ///////////demo is database name
  if($link === false)
  {
    die("ERROR: Could not connect. " . mysqli_connect_error());
  }
  $val=mysqli_query($link,'select 1 from reserv');

  if($val == FALSE)
  {
    $sql = "CREATE TABLE reserv(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	   pl_to VARCHAR(30) NOT NULL,
	    pl_from VARCHAR(30),
	     pl_price VARCHAR(30),
	   seats VARCHAR(30),
	  date VARCHAR(30),
    user VARCHAR(30),
    pass VARCHAR(30),
    t_by VARCHAR(30)
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
    echo "bbhhh";
  }

  mysqli_close($link);
}



//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////




function Insert($to,$from,$price,$seats,$date,$uname,$pass)  /////////////////insert data into db
{
  $link = mysqli_connect("127.0.0.1", "root", "", "demo");      ///////////demo is database name
  if($link === false)
  {
    die("ERROR: Could not connect. " . mysqli_connect_error());
  }
  $sql = "INSERT INTO reserv (pl_to,pl_from,pl_price,seats,date,user, pass,t_by) VALUES ('".$to."','".$from."','".$price."','".$seats."','".$date."','".$uname."','".$pass."','bus' )";
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
}




/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////





function login($from,$to,$price,$seats,$date,$uname,$pass)						/////login function
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
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function ret($name)
{
	return $name;
}


Db();
CreateTable();
		//echo $_POST['pass'];
	if(isset($_POST['submit']))
	{

		$uname=$_POST['name'];
		$from=$_POST['from'];
		$to=$_POST['to'];
		$price=$_POST['price'];
		$seats=$_POST['seats'];
		$date=$_POST['date'];
		$pass=$_SESSION['pass'];

		echo $from,$to,$price,$seats,$date,$uname,$pass ."<br><br>";
		Insert($from,$to,$price,$seats,$date,$uname,$pass);
		header("Location:usercustomize.php");


	}
	elseif (isset($_POST['signin']))
	{
		$user=$_POST['name'];
		$pass=$_POST['pass'];
		login($user,$pass);
		header("Location: userlogged.php");



	}
?>
