<?php

/////////////////////main database of plane/////////////////////////////////////////////////////////////////////
        session_start();
        function db_start()
        {
          $link = mysqli_connect("127.0.0.1", "root", "", "demo");      ///////////demo is database name
          if($link === false)
          {
            die("ERROR: Could not connect. " . mysqli_connect_error());
          }
        }
/////kgoN=5le    NTP0157314////////////////////////////////////////////////////////////////////////////////////////

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
                		//echo "Database created successfully";
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
          $val=mysqli_query($link,'select 1 from plane');

          if($val == FALSE)
          {
                $sql = "CREATE TABLE plane
                (
                    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
                    pl_source VARCHAR(30),
                    pl_dest VARCHAR(30),
                    date VARCHAR(30) ,
                    fare VARCHAR(30) ,
                    class VARCHAR(30)
                )";

                if(mysqli_query($link, $sql))
                  echo "Table created successfully\n";
                else
                  echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
          }

          else
            //echo "\nno data in database";

          mysqli_close($link);
}


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function Insert($from,$to,$date,$fare,$class)
{
  $link = mysqli_connect("127.0.0.1", "root", "", "demo");
  if($link === false)
    die("ERROR: Could not connect. " . mysqli_connect_error());
  $sql = "INSERT INTO plane (pl_source,pl_dest,date,fare,class) VALUES ('".$from."','".$to."','".$date."','".$fare."','".$class."')";
  if(mysqli_query($link, $sql))
    echo "Records inserted successfully.";
  else
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////




function search($from,$to)						/////login function
{

    $link = mysqli_connect("127.0.0.1", "root", "", "demo");      ///////////demo is database name
    if($link === false)

    die("ERROR: Could not connect. " . mysqli_connect_error());
    $sql="SELECT pl_source,pl_dest,date,class,seat,fare FROM plane where pl_source='".$from."' and pl_dest='".$to."'";
    $result = $link->query($sql);
  	if($result)
  	{
      		if ($result->num_rows > 0)
      		{
        			while($row = $result->fetch_assoc())
                  echo "<h1>from:'".$row["pl_source"]."' to:'".$row["pl_dest"]. "'<h1>";

          }
      		else

              echo "\n0 results found";
  	}
  	else
  		echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
  	$link->close();
}


function ret($name)
{
	return $name;
}

///////////////////////////////////////////////////////////////////////////////////////////////////////////


	if(isset($_POST['Search']))
		{
			$from=$_POST['from'];
      $to=$_POST['to'];
      $date=$_POST['date'];
			Db();
			CreateTable();
      // search($from,$to,$date);
      header("Location:usercustomize.php?from=".$from."&to=".$to);
		}
	elseif (isset($_POST['book1']))
		{
			$user=$_POST['name'];
			$pass=$_POST['pass'];
			login($user,$pass);
			//header("Location: userlogged.php");
		}
    elseif (isset($_POST['admin_entry']))
    {
      $from=$_POST['from'];
      $to=$_POST['to'];
      $date=$_POST['Date'];
      $fare=$_POST['fare'];
      $class=$_POST['class'];
      Insert($from,$to,$date,$fare,$class);
    }


 ?>
