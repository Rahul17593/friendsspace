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
<script language="javascript" type="text/javascript" src="datetimepicker.js">
</script>
 <!-- Arquivos utilizados pelo jQuery lightBox plugin -->
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery.lightbox-0.5.js"></script>
    <link rel="stylesheet" type="text/css" href="css/jquery.lightbox-0.5.css" media="screen" />
    <!-- / fim dos arquivos utilizados pelo jQuery lightBox plugin -->
    
    <!-- Ativando o jQuery lightBox plugin -->
    <script type="text/javascript">
    $(function() {
        $('#gallery a').lightBox();
    });
    </script>
   	<style type="text/css">
	/* jQuery lightBox plugin - Gallery style */
	#gallery {
		
		padding: 10px;
		width: 320px;
	}
	#gallery ul { list-style: none; }
	#gallery ul li { display: inline; }
	#gallery ul img {
		border: 5px solid #3e3e3e;
		border-width: 5px 5px 20px;
	}
	#gallery ul a:hover img {
		border: 5px solid #fff;
		border-width: 5px 5px 20px;
		color: #fff;
	}
	#gallery ul a:hover { color: #fff; }
	</style>
</head>
<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
  <td width="86%" align="left" valign="top" class="b1" style=" padding-top:5px"><h3 style="color:#14252f;">Album !!</h3></td>
  </tr>
  </table>
 
<?php
$connection = db_connect();

	if ( ! $connection ) 
        {
		print( "cannot connect to database" );
		exit;
	}
	
	 $sql="SELECT * FROM album where username='$pageowner'";
				  
	$result=mysql_query($sql,$connection);
	$num=mysql_num_rows($result);
							$i=0;
							echo "<table border='0' width='100%' id='gallery'><tr>";
                			while ( $i < $num )
	           				{	
								    
									
									$pictext=mysql_result($result,$i,"pictext");
								   $albumpic=mysql_result($result,$i,"albumpic");	   
					   echo "<td class='status-msg'> <a href='upload/$albumpic' target='_parent'><img src='upload/$albumpic' alt='' border='0' height='100' width='95' /><br>$pictext</a></td>";
								   $i++;
								   if ( ( $i % 4 ) == 0 )
								   echo "</tr><tr>";
							}
							echo "</tr></table>";
?>

  
 
      <form name="album" action="album-script.php?orguser=<?php echo $orguser ?>&pageowner=<?php echo $pageowner ?>" method="post" enctype="multipart/form-data"><br />
    
    <table width="474" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td width="410">

    
    <TABLE width="400" height="237" border=0 cellPadding=2 cellSpacing=2>
        <TBODY>
        <TR>
          <TD colSpan=2 height="10" class="mover-headernew" align="center">Create Your Friendspace Album</TD></TR>
         <TR>
           <TD width="173" height="26" align=right valign="top" class="text-pane0l2">Picture :</TD>
           <TD width="220" align=left><input class="input1" type="file" size="35" name="albumpic"/></TD>
         </TR>
		
		<TR>
          <TD height="32"></TD>
          <TD align=left><i>(Size of the file must be less than 1MB. NO inappropriate pics allowed.</i></TD>
        </TR>
		 <TR>
           <TD width="173" height="26" align=right valign="top" class="text-pane0l2">Description:</TD>
           <TD width="417" align=left><textarea cols="30" rows="10" name="pictext"> </textarea></TD>
         </TR>
         <tr>
		 
       
          <TD height="59" colSpan=2 align="center" ><INPUT type="submit" id="submit" name="submit" value="Submit">&nbsp;&nbsp;
          <INPUT type="reset"  name="reset"  id="reset" value="Reset"></TD></TR></TABLE>
          
    </td>
  </tr>
</table>
          
          </form>
	  
      </body>
      </html>
      