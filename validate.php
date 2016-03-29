<?php
session_start();
include_once( "./connect_db.inc");
if ( strlen($_SESSION['uid'])==0)
{
header("location:index.php?code=1");
}
else
{
	$connection = db_connect();

	if ( ! $connection ) 
        {
		print( "cannot connect to database" );
		exit;
	}
	$username=$_SESSION['uid'];
	$_SESSION['iframepage']="live-feed.php";
	$query="select * from member where username='$username'  ";
							
								
				    		$result=mysql_query($query,$connection);
							
							$i=0;
                				
								$room=mysql_result($result,$i,"room");
								if ( $room == "1" )
								header("location:home-page.php?pageowner=$username");
                                else
								header("location:create-profile.php");
}

?>


