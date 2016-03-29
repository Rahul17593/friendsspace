<?php
 session_start();
include_once( "./connect_db.inc");
$orguser=$_GET['orguser'];
$pageowner=$_GET['pageowner'];
$connection = db_connect();

	if ( ! $connection ) 
        {
		print( "cannot connect to database" );
		exit;
	}
	
	$query="insert into friend ( fromuser , touser , status ) values ( '$orguser' , '$pageowner' , 'waiting')";
	//echo $query;
	$result=mysql_query($query,$connection);
						$_SESSION['iframepage']="addfriendmsg.php?msg=$pageowner";
						header("location:home-page.php?orguser=$orguser&pageowner=$orguser");
	
							
  ?>
     
	  
      </body>
      </html>
      