<?php 
include_once("connection.php");
$slot=$_GET["slot"];
//$slot=125;
$query="select * from slots where slotno='$slot'";
$table=mysqli_query($dbcon,$query);
$i=mysqli_fetch_array($table);
$flag=1;
$status=$i['status'];  
while($flag==1){
    $query="select * from slots where slotno='$slot'";
$table=mysqli_query($dbcon,$query);
$i=mysqli_fetch_array($table);
    $status=$i['status'];  
if($status==1)
{
    $query="UPDATE slots
SET status = 0 WHERE slotno='$slot';";
    mysqli_query($dbcon, $query);

    $msg=mysqli_error($dbcon);
        if($msg=="")
        {
            mysqli_query($dbcon, $query);
            $flag=0;
            
        }
        else
            echo $msg;
}
    else{
        $slot=rand(0,200);
    }
}

?>
