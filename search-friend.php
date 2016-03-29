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
  <td width="86%" align="left" valign="top" class="b1" style=" padding-top:5px"><h3 style="color:#14252f;">Search Your Friends</h3></td>
  </tr>
  </table>
 
<?php
$connection = db_connect();

	if ( ! $connection ) 
        {
		print( "cannot connect to database" );
		exit;
	}
	
	


?>

  <form name="searchfriends" action="search-friend.php" method="post">
  <table width="100%" border="0" cellspacing="0" cellpadding="0" >
 
  <tr>
        <td >Friend's Name</td><td><input name="fname" type="text" size="45" /></td><td><input type="submit" name="Search" value="Search"/></td>
        
   </tr>
   </table>
   </form>
  

<?php
$fname=$_POST['fname'];

echo "<div style='width: 100%; height: 800px; overflow: scroll'>";

							echo "<table border=1 width='99%' bgcolor='#F4E8D0'>";
							echo "<tr >
										<td class=reg_text><b>Member</b></td>
										<td class=reg_text><b>Name</b></td>
										<td class=reg_text><b>Address</b></td>
										<td class=reg_text><b>Email</b></td>
										
																				
									</tr>";
						    
							$query="select * from member where name like '%$fname%' order by name";
							
								
				    		$result=mysql_query($query,$connection);
							$num=mysql_num_rows($result);
							$i=0;
                			while ( $i < $num )
	           				{	
								$picture=mysql_result($result,$i,"picture");
								$name=mysql_result($result,$i,"name");
								$address=mysql_result($result,$i,"address");
								$email=mysql_result($result,$i,"email");
								$memname=mysql_result($result,$i,"username");
								
								
							echo "<tr class='status-msg'>";
								
								echo "<td>
										<a href='home-page.php?pageowner=$memname' target='_parent'>
											<img src='upload/$picture' border='0' width='50' height='52'>
										</a>
									</td>

									
									<td >$name</td>
									
									<td >$address</td>
				
									<td >$email</td>";
									
								
							echo "</tr>";
								
					           ++$i;
								
						}		
							
							echo "</table>";
							echo "</div>";

							echo "</font>";

?>
   
      </body>
      </html>
      