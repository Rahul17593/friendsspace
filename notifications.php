<?php
include_once( "./connect_db.inc");
$orguser=$_GET['orguser'];
$pageowner=$_GET['pageowner'];
//echo "--------------$orguser---$pageowner";
?>



<html>
<head>
<link href="stylesheet/main.css" rel="stylesheet" type="text/css" />
<link href="stylesheet/navigation.css" rel="stylesheet" type="text/css" />
<link href="stylesheet/scroll.css" rel="stylesheet" type="text/css" />
<link href="stylesheet/face.css" rel="stylesheet" type="text/css" />
</head>
<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
  <td width="86%" align="left" valign="top" class="b1" style=" padding-top:5px"><h3 style="color:#14252f;">Friendship Calls !!</h3></td>
  </tr>
  </table>
 
<?php
$connection = db_connect();

	if ( ! $connection ) 
        {
		print( "cannot connect to database" );
		exit;
	}
	
	$query="select * from member m , friend f where m.username= f.fromuser and touser='$pageowner' and f.status='waiting' ";
	//echo $query;
	$result=mysql_query($query,$connection);
	$num=mysql_num_rows($result);
							$i=0;
                			while ( $i < $num )
	           				{	
								    
									$id=mysql_result($result,$i,"id");
									$memname=mysql_result($result,$i,"username");
								   $feedpicture=mysql_result($result,$i,"picture");
								    
									$statusmsg=mysql_result($result,$i,"statusmsg");

?>

  
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
        <td style="border-bottom:1px solid #666666">
        
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="18%" align="left" valign="top" style="padding:5px 0 20px 0">
			  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><a href="home-page.php?pageowner=<?php echo $memname ?>" target="_parent"><img src="upload/<?php echo $feedpicture ?>" width="50" height="52" alt="" border="0" /></a></td>
  </tr>
 <tr><td class="status-msg"><?php echo $statusmsg ?></td></tr> 
</table>

			  </td>
              <td width="82%" align="left" valign="top" class="b1" style=" padding-top:5px"><?php echo $memname. " wants to be your Friend !!"  ?><br>
              <table>
              <tr class="status-msg">
              <td width="100px" ><a href="accept.php?id=<?php echo $id ?>&orguser=<?php echo $orguser ?>&pageowner=<?php echo $pageowner ?>"><img src="images/accept.png" alt="" height="16" width="16"/>Accept</a></td><td width="100px"><a href="reject.php?id=<?php echo $id ?>&orguser=<?php echo $orguser ?>&pageowner=<?php echo $pageowner ?>"><img src="images/reject.png" alt="" height="16" width="16"/>Reject</a></td>
              </tr>
              </table>
              
              
              
               </td>
               

          </tr>
        </table></td>
      </tr>      
      </table>
<?php
$i++;
							}
							
  ?>
      
      </body>
      </html>
      