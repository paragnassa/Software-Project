<?php 
include_once("connection.php");
$rno=$_GET["uid"];
$pwd=$_GET["upwd"];
$uid=$_GET["uid"];
$mobile=$_GET["umob"];
$name=$_GET["uname"];

$query="insert into signup (name, uid,  pwd, mobile) values('$name', '$uid', '$pwd',  '$mobile');";
    mysqli_query($dbcon, $query);

    $msg=mysqli_error($dbcon);
        if($msg=="")
        {
            mysqli_query($dbcon, $query);
            
        }
else
    echo "User Already Exists";

?>
