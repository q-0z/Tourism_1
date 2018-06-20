<?php

  session_start();

  function insert($a,$b,$c,$d,$e)
  {
    $link = mysqli_connect("127.0.0.1", "root", "", "demo");      ///////////demo is database name
    if($link === false)
      die("ERROR: Could not connect. " . mysqli_connect_error());
     $sql="insert into u_sav (pl_source,pl_dest,date,fare,class) values('".$a."','".$b."','".$c."','".$d."','".$e. "')";
     if(mysqli_query($link, $sql))
       echo "Records inserted successfully.";
     else
       echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

  }
  if(isset($_POST['booking']))
     insert($_POST['from'],$_POST['to'],$_POST['class'],$_POST['date'],$_POST['fare']);
    ?>
