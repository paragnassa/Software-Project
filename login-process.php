<?php 
include_once('connection.php');
session_start();
$uid=$_GET['uid'];
$pwd=$_GET["pwd"];
$query="select * from signup where uid='$uid'";
$table=mysqli_query($dbcon,$query);//
if(mysqli_num_rows($table)==0)
	echo "Invalid User";
else

{
    $query="select * from signup where uid='$uid'";

    $table=mysqli_query($dbcon,$query);//
    
    $login_details=mysqli_fetch_array($table);
    $chkpwd=$login_details['pwd'];
    if($pwd==$chkpwd && $login_details['status']==1 )
    {        
        $_SESSION["loggedUser"]=$uid;
    }
    else
    {
	echo "Invalid Pass";

    }
    
}
?>