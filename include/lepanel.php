
		<div class="main-left">
        	 <table border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td width="60"><img src="images/profile.jpg" /></td>
                            <td><a href="#" onclick="javascript:changelink('show-profile'); return false;">Profile</a></td>
                          </tr>
                          
                           <tr>
                            <td width="60"><img src="images/albam.jpg" /></td>
                            <td><a href="#" onclick="javascript:changelink('album'); return false;">Album</a></td>
                          </tr>
                          
                          <tr>
                            <td width="60"><img src="images/albam.jpg" /></td>
                            <td><a href="#" onclick="javascript:changelink('live-feed'); return false;">Live Feed</a></td>
                          </tr>
                          
                         
                           <tr>
                            <td width="60"><img src="images/search-2.png" /></td>
                            <td><a href="#" onclick="javascript:changelink('search-friend'); return false;">Search</a></td>
                          </tr>
                          
                           <?php
	$query="select * from member m , friend f where m.username= f.fromuser and touser='$pageowner' and f.status='waiting' ";
	//echo $query;
	$result=mysql_query($query,$connection);
	$num=mysql_num_rows($result);
	if ( $num > 0 )
	{
	?>
    <?php 
		 if ( strcmp($pageowner, $orguser )==0 ) 
		 {
		 ?>
                          <tr>
                            <td width="60"><img src="images/search-2.png" /></td>
                            <td><a href="#" onclick="javascript:changelink('notifications'); return false;">Notifications (<?php echo $num ?>)</a></td>
                          </tr>
          <?php
		 }
		 ?>                
          <?php
	}
	else
	{
		$_SESSION['iframepage']="live-feed.php";
	}
	
	?>                
                          
                          
                          <tr>
                            <td width="60"><img src="images/similar.png" /></td>
                            <td><a href="#" onclick="javascript:changelink('search-friend1'); return false;">People With Similar Interests</a></td>
                          </tr>
                        </table>
                        
                        <br />
                        <section class="main-left-tab">
                        <h6>Members</h6>
                        
                         <?php
           				$sqlmember="SELECT * FROM member
				  WHERE username!='$pageowner' AND username NOT IN 
				  
				  (
					   SELECT touser AS frndid
							FROM `friend`
							WHERE fromuser = '$pageowner'
										
								UNION 
						 
					   SELECT fromuser AS frndid
							FROM `friend`
							WHERE touser = '$pageowner'
						       
								
				  )  ORDER BY RAND() LIMIT 6;";
    
	$result=mysql_query($sqlmember,$connection);
		                        
								$i=0;
								while ( $i < 6 )
	           				{	
                				$memusr1=mysql_result($result,$i,"username");
								$mempic1=mysql_result($result,$i,"picture");
								$name1=mysql_result($result,$i,"name");
								
								
								
							
	?>
                        
                        
                        <span><a href="home-page.php?pageowner=<?php echo $memusr1 ?>" title="<?php echo $name1 ?>"><img src="upload/<?php echo $mempic1 ?>" alt="" border="0" width="50" height="52"/></a><p><?php echo $name1 ?></p></span>
                        
                      <?php
					  ++$i;
							}
					  ?>
                        
                        
                        
                        
                       </section>
        
         <br />
                        <section class="main-left-tab">
                        
                         <?php
	
    $sqlfriend="SELECT * FROM member
				  WHERE username IN 
				  
				  (
					   SELECT touser AS frndid
							FROM `friend`
							WHERE fromuser = '$pageowner' and status='accept'
										
								UNION 
						 
					   SELECT fromuser AS frndid
							FROM `friend`
							WHERE touser = '$pageowner' and status='accept'
						       
								
				  )  ;";
    
	$result=mysql_query($sqlfriend,$connection);
	$num=mysql_num_rows($result);
	?>
                        
                        
                        
                        
                        <h6>Friends(<?php echo $num ?>)</h6>
                        
                          <?php
	
   
							$i=0;
                			while ( $i < $num )
	           				{	
								    
									
									$friendname=mysql_result($result,$i,"username");
								   $friendpicture=mysql_result($result,$i,"picture");	                        
     ?>
                        
                        
                        <span><a href="home-page.php?pageowner=<?php echo $friendname ?>" ><img src="upload/<?php echo $friendpicture ?> " alt="" border="0" height="42" width="40"/></a><p><?php echo $friendname ?></p></span>
                        
                      <?php
					  ++$i;
							}
					  ?>
                        
                        
                        
                        
                       </section>
        
        
        
        </div>