<nav class="hraderbg">
		<div class="header">
        		<div class="logo">
                		<a href="index.php"><img src="images/logo.png" alt="Logo"></a>
                </div>
               <?php
               $user=$_SESSION['uid'];
               ?>
                              
              
                <div class="navi">
                       <ul>			
                                        <li><a href="#home-log">Register</a></li>
                                        <li><a href="#home-log">Login</a></li>
                                        <li><a href="logout.php">Logout <?php echo $user ?> </a></li>
                                        <li><a href="index.php">Home</a></li>
                       </ul>
  
                </div>
                <div class="mobilen">

                 <form name="mycombo">
        <div id="mob-nav">
				<select id="navm" name="example" onchange="go()">
            					<option value="index.php">Home</option>
                                
                                <option value="logout.php">Logout</option>
                                <option value="#home-log">Login</option>
                                <option value="#home-reg">Register</option>
            	</select>
        </div>
        
        <script type="text/javascript">
<!--
function go(){
location=
document.mycombo.example.
options[document.mycombo.example.selectedIndex].value
}
//-->
</script>

        </form>
        </div>
                

                
        </div>
<div class="clr"></div>
</nav>
