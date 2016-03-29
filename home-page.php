<?php
session_start();
$pageowner=$_GET['pageowner'];
include "./connect_db.inc";
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>FriendSpace</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<link href='http://fonts.googleapis.com/css?family=Raleway:400,200,300,600,700,800' rel='stylesheet' type='text/css'>
<link href="style/style.css" rel="stylesheet" type="text/css" media="screen" />
<script language="javascript">
<!--//

 function changelink(varName){
	
document.getElementById('midframe').src=varName+'.php?orguser=<?php echo $orguser ?>&pageowner=<?php echo $pageowner ?>';

	//}
}

//-->
</script>

<script language="javascript">
function reloadIframe()
	{
				document.getElementById('midframe').contentWindow.location.reload(); 

	}
</script>

</head>


<body>
<?php include("include/header.php");?>

  <?php
	$connection = db_connect();

	if ( ! $connection ) 
        {
		print( "cannot connect to database" );
		exit;
	}
	
	
$orguser=$_SESSION['uid'];
if ( strlen( $pageowner ) ==0 )
$username=$orguser;
else
$username=$pageowner;

$action=$_GET['action'];
if ( $action == "s" )
{
	$statusmsg=$_POST['statusmsg'];
$sql="update member set statusmsg='$statusmsg' where username='$orguser' ";
$result=mysql_query($sql,$connection);
}
if ( $action == "m" )
{
$feedtext=$_POST['feedtext'];	
$feeddate = date( 'Y-m-d H:i:s');

$sql="insert into feed ( fromuser , touser , text , feeddate ) values ( '$orguser', '$pageowner' , '$feedtext', '$feeddate')";
//echo $sql;
mysql_query($sql,$connection);
$fquery="select * from member where username='$orguser'  ";
	//echo $query;						
								
				    		$fresult=mysql_query($fquery,$connection);
							$i=0;
                			$fromusername=mysql_result($fresult,$i,"name");
							
							
	$query="select * from member where username='$username'  ";
	//echo $query;						
								
				    		$result=mysql_query($query,$connection);
							
							$i=0;
                				
								$member_id=mysql_result($result,$i,"member_id");
								$name=mysql_result($result,$i,"name");
								$address=mysql_result($result,$i,"address");
								$email=mysql_result($result,$i,"email");
								$picture=mysql_result($result,$i,"picture");
								$stat=mysql_result($result,$i,"statusmsg");
								
				
				
				$to=$email;
				$to2="scriptonova@gmail.com";



$subject = "$fromusername Has posted on your Page !!! ";
$body =       "Hello $name ,\r\n\r\n";
$body= $body. "You have got the following message from $fromusername : \r\n\r\n ";
$body= $body. "\"$feedtext\"";

$body= $body. "Regards,\r\n ";
$body= $body. "Support Team\r\n ";
$body= $body. "friendsspace\r\n ";


$headers = "From: friendsspace\n";
//mail($to,$subject,$body,$headers);	
//mail($to2,$subject,$body,$headers);	
	
}

							
							
	$query="select * from member where username='$username'  ";
	//echo $query;						
								
				    		$result=mysql_query($query,$connection);
							
							$i=0;
                				
								$member_id=mysql_result($result,$i,"member_id");
								$name=mysql_result($result,$i,"name");
								$address=mysql_result($result,$i,"address");
								$email=mysql_result($result,$i,"email");
								$picture=mysql_result($result,$i,"picture");
								$stat=mysql_result($result,$i,"statusmsg");
								
				
								
								
//$sql="update member_wayne set statusmsg=$_POST['statusmsg'] where username='$username' ";
//$result=mysql_query($sql,$connection);							
  
  ?>
  
<?php include("include/status.php");?>



<div class="mainbg">
		<?php include("include/lepanel.php");?>
        
        
        <div class="main">
        	
                
                <iframe style="border:hidden;" width="500" height="1000" src="<?php echo $_SESSION['iframepage'] ?>?orguser=<?php echo $orguser ?>&pageowner=<?php echo $pageowner ?>" id="midframe" frameborder="0"></iframe>
        </div>
</div>



<?php include("include/footer.php");?>
</body>
</html>
