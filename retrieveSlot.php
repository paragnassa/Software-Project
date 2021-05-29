<?php 
include_once("connection.php");
$slot=$_GET["slot"];



$query="UPDATE slots
SET status = 1 WHERE slotno='$slot';";
    mysqli_query($dbcon, $query);

    $msg=mysqli_error($dbcon);
        if($msg=="")
        {
            mysqli_query($dbcon, $query);
            
        }
else
    echo $msg;
    
?>
