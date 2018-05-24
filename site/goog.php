<?php
session_start();
require_once 'user_DB.php';


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
 Inserted($_REQUEST['name'],'');

 echo $_REQUEST['name'];








 ?>
