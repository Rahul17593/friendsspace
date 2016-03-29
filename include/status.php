<div class="form-profilebg">
		<div class="profile">
                <img src="upload/<?php echo $picture ?>" width="100%" />
                
            <h6><?php echo $name ?></h6>
            <a href="addfriend.php?orguser=<?php echo $orguser ?>&pageowner=<?php echo $pageowner ?>">Add Me</a>
        </div>

		<div class="form-profile">
        
         <?php 
		 if ( strcmp($pageowner, $orguser )==0 ) 
		 {
		 ?>
        			 <form name="poststatusmsg" action="home-page.php?action=s" method="POST" >
        			<textarea name="statusmsg" class="mainform" ><?php echo $stat ?>
                    </textarea>
                    <input type="submit" class="mainform-butt" value="Submit" />
                    </form>
                    
                	 <?php
		 }
		 else
		 {
		 echo "My Status : $stat<br>"; 
		 
		 
		 }
		 ?>
                  <form name="sendmsg" action="home-page.php?action=m&pageowner=<?php echo $pageowner ?>" method="POST" >
                    <input type="text"  name="feedtext" class="mainform" placeholder="Send Me Your Message" />
                	<input type="submit" class="mainform-butt" value="Submit" />
                    </form>
        </div>
        
</div>