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

$timestamp=time();
$albumpic= $_FILES['albumpic']['name'];
$pictext=$_POST['pictext'];
$ary=explode("." , $albumpic);
$newfilename=$timestamp.".".$ary[1];
copy($_FILES["albumpic"]["tmp_name"],
      "upload/" . $newfilename);

$orguser=$_SESSION['uid'];
	
$sql="INSERT INTO album ( albumpic , pictext , username ) VALUES( '$newfilename' , '$pictext' , '$orguser' )";
$result=mysql_query($sql,$connection);
$_SESSION['iframepage']="album.php";	
	echo "Picture Uploaded !! Please Click<a href='home-page.php?orguser=$orguser&pageowner=$pageowner' target='_parent' javascript:reloadIframe();> Here</a> to get back to your Page";


?>
                    
                                   
