<?php
session_start();
include "./connect_db.inc";
$connection = db_connect();

if ( ! $connection ) 
{
	print( "cannot connect to database" );
	exit;
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>FriendSpace</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<link href='http://fonts.googleapis.com/css?family=Raleway:400,200,300,600,700,800' rel='stylesheet' type='text/css'>
<link href="style/style.css" rel="stylesheet" type="text/css" media="screen" />
</head>


<body>
<?php include("include/header.php");?>





<div class="pro-imgbg">

    
    <form name="bcsprofile" action="create-profile-script.php" method="post" enctype="multipart/form-data"><br />
    
    <table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td width="100%">

    
    <TABLE width="100%" height="292" border=0 cellPadding=2 cellSpacing=2>
        <TBODY>
        <TR>
          <TD colSpan=2 height="10" class="mover-headernew" align="center"><h2>Create Your Friends Space Profile<h2></TD></TR>
         <TR>
           <TD width="20%" height="41" align=right valign="top" class="text-pane0l2">Profile Picture :</TD>
           <TD width="40%" align=left><input class="input1" type="file" size="35" name="picture"/></TD>
         </TR>
		<TR>
          <TD height="32"></TD>
          <TD align=left><i>FACE pic of you and/or family only.   NO full body shots and NO inappropriate pics allowed. If you donot want to upload your real picture , Please choose an AVATAR from the list of images given below !!</i><br />
          
          <table>
          <tr>
          <?php 
          $z=1;
          while ( $z <= 33 )
		  {
		  $pvar="a".$z.".jpg";
		  echo "<td><img src='upload/$pvar' width='30' height='32'><br><input type='radio' name='avatar' value='$pvar'> </td>";
		  if ( $z % 10 == 0 )
		  echo "</tr><tr>";
		  $z++;
		  }
		  
		  ?>
          
          </tr>
          </table>
          
          
          </TD>
        </TR>
         <TR>
          <TD height="26" align=right valign="top" class="text-panel">Interests :</TD>
          <TD align=left>
		  
		  
		  <table>
		  
		  
		  <tr>
 <?php    
	$username=$_SESSION['uid'];
	$query="select * from member where username='$username'  ";
	//echo $query;						
								
				    		$result=mysql_query($query,$connection);
							$i=0;
                				$interests=mysql_result($result,$i,"interests");
								$myinterests = explode(",", $interests);
								foreach ($myinterests as &$value) 
								{
    								$value = trim($value);
								}

								
								
								
							
								


	
	 $sql="SELECT * FROM interests";
    
	$result=mysql_query($sql,$connection);
	$num=mysql_num_rows($result);
							$i=0;
							
                			while ( $i < $num )
	           				{	
								    
									
									$interest=mysql_result($result,$i,"interest");
								     $var="c".($i+1);	   
          
       if ( in_array( $interest, $myinterests)) 
	   {
      echo "<td> <input type='checkbox' checked name='$var' value='$interest'/>$interest</td>";
	   }
	   else
	   {
		   echo "<td> <input type='checkbox' name='$var' value='$interest'/>$interest</td>";
	   }
	   
      if ( (($i+1) % 3 )==0) 
	  {
	  echo "</tr><tr>";
	
	  }
	  $i++;
							}
      
		  
		  ?>
          
		</tr>  
		  
		  
		  
		  
		  </table>




</TD>
        </TR>
       
         <TR>
          <TD height="34" align=right valign="top" class="text-pane0l2">Interested in meeting :</TD>
          <TD align=left>
          
          	  
		  <table>
		  
		  
		  <tr>
 <?php         
        
	$query="select * from member where username='$username'  ";
	//echo $query;						
								
				    		$result=mysql_query($query,$connection);
							$i=0;
                				$interests=mysql_result($result,$i,"meeting");
								$myinterests = explode(",", $interests);
								foreach ($myinterests as &$value) 
								{
    								$value = trim($value);
								}

								
								
								
							
								


	
	 $sql="SELECT * FROM meeting";
    
	$result=mysql_query($sql,$connection);
	$num=mysql_num_rows($result);
							$i=0;
							
                			while ( $i < $num )
	           				{	
								    
									
									$interest=mysql_result($result,$i,"meeting");
								     $var="p".($i+1);	   
          
       if ( in_array( $interest, $myinterests)) 
	   {
      echo "<td> <input type='checkbox' checked name='$var' value='$interest'/>$interest</td>";
	   }
	   else
	   {
		   echo "<td> <input type='checkbox' name='$var' value='$interest'/>$interest</td>";
	   }
	   
      if ( (($i+1) % 3 )==0) 
	  {
	  echo "</tr><tr>";
	
	  }
	  $i++;
							}
      
		  
		  ?>
          
		</tr>  
		  
		  
		  
		  
		  </table>


        
        
        
        
        
        
        </TR>
         <TR>
          <TD height="34" align=right valign="top" class="text-pane0l2">Status :</TD>
          <TD align=left>
          
         	  
		  <table>
		  
		  
		  <tr>
 <?php         
        
	$query="select * from member where username='$username'  ";
	//echo $query;						
								
				    		$result=mysql_query($query,$connection);
							$i=0;
                				$interests=mysql_result($result,$i,"status");
								$myinterests = explode(",", $interests);
								foreach ($myinterests as &$value) 
								{
    								$value = trim($value);
								}

								

	 $sql="SELECT * FROM status";
    
	$result=mysql_query($sql,$connection);
	$num=mysql_num_rows($result);
							$i=0;
							
                			while ( $i < $num )
	           				{	
								    
									
									$interest=mysql_result($result,$i,"mstat");
								     $var="k".($i+1);	   
          
       if ( in_array( $interest, $myinterests)) 
	   {
      echo "<td> <input type='checkbox' checked name='$var' value='$interest'/>$interest</td>";
	   }
	   else
	   {
		   echo "<td> <input type='checkbox' name='$var' value='$interest'/>$interest</td>";
	   }
	   
      if ( (($i+1) % 3 )==0) 
	  {
	  echo "</tr><tr>";
	
	  }
	  $i++;
							}
      
		  
		  ?>
          
		</tr>  
		  
		  
		  
		  
		  </table>


          
          
          
          
          </TD>
        </TR>
		 
       
          <TD height="59" colSpan=2 align="center" ><INPUT type="submit" id="submit" name="submit" value="Submit" class="formbg-butt">&nbsp;&nbsp;
          </TD></TR></TABLE>
          
    </td>
  </tr>
</table>
          
          </form>
          
   </div>
</div>



<?php include("include/footer.php");?>
</body>
</html>
        
