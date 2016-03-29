<?php

 session_start();
?>

 <html>
 <body>
<?php
include_once( "./connect_db.inc");
$id=$_GET['id'];
$orguser=$_GET['orguser'];
$pageowner=$_GET['pageowner'];
$connection = db_connect();

	if ( ! $connection ) 
        {
		print( "cannot connect to database" );
		exit;
	}
	
	$query="update friend set status='accept' where id=$id";
	//echo $query;
	$result=mysql_query($query,$connection);
						$_SESSION['iframepage']="notifications.php";	
	echo "FriendShip Accepted !! Please Click<a href='home-page.php?orguser=$orguser&pageowner=$pageowner' target='_parent' javascript:reloadIframe();> Here</a> to get back to your Page";
							
  ?>
     
	  
      </body>
      </html>
      