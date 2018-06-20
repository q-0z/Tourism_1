<?php

// echo $_REQUEST['x'];

// echo str_replace("from:","",$test[0]);
$test=explode("    ",$_REQUEST['x']);
$tn=array_map('trim',$test);

// echo print_r($test);

for ($x=0;$x<count($test);$x++)
{

    $test[$x]=preg_replace('/[A-Za-z0-9]+:/',"",$test[$x]);
}
 header("Location:book.php?a=".$test[0]."&b=".$test[1]."&c=".$test[2]."&d=".$test[3]."&e=".$test[4]);


?>
