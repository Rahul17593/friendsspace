<?php
include_once( "./connect_db.inc");
$orguser=$_GET['orguser'];
$pageowner=$_GET['pageowner'];

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
  <td width="86%" align="left" valign="top" class="b1" style=" padding-top:5px"><h3 style="color:#14252f;">My Profile</h3></td>
  </tr>
  </table>
 
<?php
$connection = db_connect();

	if ( ! $connection ) 
        {
		print( "cannot connect to database" );
		exit;
	}
	
	$query="select * from member where username='$pageowner'  ";
	//echo "hfhfhjfghfghghfhgf: $query";
	$result=mysql_query($query,$connection);
	//echo "hello hgfhjgjgj g j g hghjghjghjgghjg";
							$i=0;
                			
$name=mysql_result($result,$i,"name");
$address=mysql_result($result,$i,"address");
$email=mysql_result($result,$i,"email");
$username=mysql_result($result,$i,"username");
$interests=mysql_result($result,$i,"interests");
$meeting=mysql_result($result,$i,"meeting");
$status=mysql_result($result,$i,"status");

?>

  
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
 
   <tr>
        <td></td><td>&nbsp;</td>
   </tr>
   
  <tr>
        <td><b>Email</b></td><td><?php echo $email ?></td>
   </tr>
  <tr>
        <td></td><td>&nbsp;</td>
   </tr>
  <tr>
        <td><b>Username</b></td><td><?php echo $username ?></td>
   </tr>
   <tr>
        <td></td><td>&nbsp;</td>
   </tr>
  <tr>
        <td><b>Interests</b></td><td><?php echo $interests ?></td>
   </tr>
   <tr>
        <td></td><td>&nbsp;</td>
   </tr>
  <tr>
        <td><b>Wants to Meet</b></td><td><?php echo $meeting ?></td>
   </tr>
  <tr>
        <td></td><td>&nbsp;</td>
   </tr>

  <tr>
        <td><b>Status</b></td><td><?php echo $status ?></td>
   </tr>
  
   </table>
   </body>
   </html>
   
   