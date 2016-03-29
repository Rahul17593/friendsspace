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
  <td width="86%" align="left" valign="top" class="b1" style=" padding-top:5px"><h3 style="color:#14252f;">All Friends !!</h3></td>
  </tr>
  </table>
 
<?php
$connection = db_connect();

	if ( ! $connection ) 
        {
		print( "cannot connect to database" );
		exit;
	}
	
	 $sqlfriend="SELECT * FROM member_wayne
				  WHERE username IN 
				  
				  (
					   SELECT touser AS frndid
							FROM `wayne_friend`
							WHERE fromuser = '$pageowner' and status='accept'
										
								UNION 
						 
					   SELECT fromuser AS frndid
							FROM `wayne_friend`
							WHERE touser = '$pageowner' and status='accept'
						       
								
				  )  ;";
    
	$result=mysql_query($sqlfriend,$connection);
	$num=mysql_num_rows($result);
							$i=0;
							echo "<table border='0' width='100%'><tr>";
                			while ( $i < $num )
	           				{	
								    
									
									$friendname=mysql_result($result,$i,"username");
								   $friendpicture=mysql_result($result,$i,"picture");	   
					   echo "<td class='status-msg'><a href='bcs_face_page.php?pageowner=$friendname' target='_parent'><img src='upload/$friendpicture' alt='' border='0' height='52' width='50' /><br>$friendname</a></td>";
								   $i++;
								   if ( ( $i % 4 ) == 0 )
								   echo "</tr><tr>";
							}
							echo "</tr></table>";
?>

  
 
      
      </body>
      </html>
      