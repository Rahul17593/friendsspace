<?php
session_start();	
include "./connect_db.inc";
$connection = db_connect();

	if ( ! $connection ) 
        {
		print( "cannot connect to database" );
		exit;
	}
$name = $_POST['name'];
$address = $_POST['address'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];


$flag=0;

$sql2="SELECT * FROM member  WHERE username='$username'";
$result2=mysql_query($sql2,$connection);
$num2=mysql_numrows($result2);
if( $num2==1)
{  	
echo "<br><br><center>Username already taken. Please try again.";
$flag=1;
}

if($flag == 0)
{
$sql = "insert into member(name,address,email,username,password) values('$name', '$address', '$email','$username','$password')";
//echo $sql;
$result=mysql_query($sql,$connection);

if(!$result)
{echo "error";
}
else
{
	$_SESSION['uid']=$username;
	
	header("location:before-home.php");

}


}


?>
