<?php

/////////////////////main database of user/////////////////////////////////////////////////////////////////////
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
                    seat VARCHAR(30) ,
                    date VARCHAR(30) ,
                    fare VARCHAR(30) ,
                    class VARCHAR(30)
                )";
                //
                // $sql2 = "CREATE TABLE planer
                // (
                //     id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
                //     user VARCHAR(30) NOT NULL,
                //     fro VARCHAR(30) NOT NULL,
                //     to VARCHAR(30) NOT NULL,
                //     seat VARCHAR(30) NOT NULL,
                //     date VARCHAR(30) NOT NULL,
                //     fare VARCHAR(30) NOT NULL,
                //     class VARCHAR(30) NOT NULL
                // )";


                if(mysqli_query($link, $sql))
                {
                  echo "Table created successfully\n";
                }
                else
                {
                  echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                }
                // if(mysqli_query($link, $sql2))
                // {
                //   echo "Table created successfully\n";
                // }
                // else
                // {
                //   echo "ERROR: Could not able to execute $sql2. " . mysqli_error($link);
                // }
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
  $sql = "INSERT INTO plane (user, fro,to,seat,date,fare,class) VALUES ('".$user."','".$fro."','".$to."','".$seat."','".$date."','".$fare."','".$class."')";

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
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////




function login($from,$to,$seat,$date,$class)						/////login function
{
          $link = mysqli_connect("127.0.0.1", "root", "", "demo");      ///////////demo is database name
          if($link === false)
          {
            die("ERROR: Could not connect. " . mysqli_connect_error());
          }


          $sql="SELECT pl_source,pl_dest,date,class,seat,fare FROM plane ";
          // $sql="SELECT pl_source,pl_dest,date,class,seat,fare FROM plane WHERE user='".$user."'";



          $result = $link->query($sql);

        	if($result)
        	{
            		if ($result->num_rows > 0)
            		{
              			// output data of each row
              			while($row = $result->fetch_assoc())
              			{





                            $link = mysqli_connect("127.0.0.1", "root", "", "demo");      ///////////demo is database name
                            if($link === false)
                            {
                              die("ERROR: Could not connect. " . mysqli_connect_error());
                            }
                            $sql = "INSERT INTO reserv (pl_to,pl_from,pl_price,seats,date,user, pass,t_by) VALUES ('".$row["pl_dest"]."','".$row["pl_source"]."','".$row["fare"]."','".$row["seat"]."','".$row["date"]."','".$_SESSION['name']."','".$_SESSION['pass']."','bus' )";
                              /////put down checking wheather the value is insurtef or not
                            if(mysqli_query($link, $sql))
                            {
                              echo "Records inserted successfully.";
                              ////change the location or logggd in th user
                              	header("Location:usercustomize.php");

                            }
                            else
                            {
                              echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                              ///send eroor message on screen
                            }
                      				// echo "from: " . $row["pl_source"]. " to:" . $row["pl_dest"]." fare: ".$row["fare"]." seats: ".$row["seat"]." date: ".$row["date"];
                      			//	$_SESSION['name']=$row["fare"];

                      			//	echo("k");
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

///////////////////////////////////////////////////////////////////////////////////////////////////////////


	if(isset($_SESSION['name']) && isset($_SESSION['pass']))
    {
       $user=$_SESSION['name'];
       $pass=$_SESSION['pass'];
       echo "yasssssssssss";

    }
	else
	{
		echo"noooooo;\n";
	}


		//echo $_POST['pass'];
	if(isset($_POST['book2']))
		{

			$from=$_POST['from'];
      $to=$_POST['to'];
      $date=$_POST['date'];
      $class=$_POST['class'];
      $seat=$_POST['pass'];



			Db();
			CreateTable();
      login($from,$to,$seat,$date,$class);
		}
	elseif (isset($_POST['book1']))
		{
			$user=$_POST['name'];
			$pass=$_POST['pass'];
			login($user,$pass);
			//header("Location: userlogged.php");



		}





 ?>
