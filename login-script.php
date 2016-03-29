<?php
session_start();

include "./connect_db.inc";
$connection = db_connect();

if ( ! $connection ) 
{
	print( "cannot connect to database" );
	exit;
}
$username=$_POST['username'];
$password=$_POST['password'];


$sql="SELECT username,password FROM member  WHERE username='$username' and password='$password'";
//echo $sql;
$result=mysql_query($sql,$connection);
$num=mysql_numrows($result);
if($num==1)
{  	
	$_SESSION['uid']=$username;
	//$_SESSION['type']=$login_type;
	header("location:before-home.php");
}

else
{
  //echo "Invalid UserName or Password";
header("location:index.php");
}  
?>
