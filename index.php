<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>FriendSpace</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<link href='http://fonts.googleapis.com/css?family=Raleway:400,200,300,600,700,800' rel='stylesheet' type='text/css'>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
 <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/modern-business.css" rel="stylesheet">
  <link href="style/style.css" rel="stylesheet" type="text/css" media="screen" />
</head>

<body>

<?php include("include/header.php");?>

<!--------------------------------------->



<header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
           
                   
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url(images/slider-1.jpg);"></div>
                <div class="carousel-caption">
                    <h2></h2>
                </div>
            </div>
            
                       
            
             <div class="item">
                <div class="fill" style="background-image:url(images/slider-3.jpg);"></div>
                <div class="carousel-caption">
                    <h2></h2>
                </div>
            </div>
            
            
             <div class="item">
                <div class="fill" style="background-image:url(images/slider-2.jpg);"></div>
                <div class="carousel-caption">
                    <h2></h2>
                </div>
             </div>
          </div> 



        <!-- Controls -->
         <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
        
    </header>

    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>




<!------------------------------------------->
<div class="homebg" id="home-log">
		<div class="home">
        <div class="home-left">
        	<h2>Welcome to Friends Space.</h2>
           
            <p>Connect with your friends — and other fascinating people. Get in-the-moment updates on the things that interest you. And watch events unfold, in real time, from every angle.</p>
        </div>
        
        <div class="home-right">
        		<div class="formbg">
                		     <form name="nlogin" action="login-script.php" method="post">                       
                            <input type="text" placeholder="Username" class="contform" name="username">
                            
                            <input type="password" placeholder="Password" class="contform" name="password">
                           
                            <input type="submit" value="LOGIN" class="formbg-butt" />
                            
                           </form>

                            
                            
                  
            </div>
        <br><br>
        		<div class="formbg" id="home-reg">
            				<h6>New To  Friends Space?</h6>
                            <form name="regitation" action="registration-script.php" method="post"> 
                    		 
                    		<input type="text" placeholder="Name" class="contform" name="name">
                            
                            <input type="text" placeholder="Email*" class="contform" name="email">
                            
                            <input type="text" placeholder="Username*" class="contform" name="username">
                            
                            <input type="password" placeholder="Password*" class="contform" name="password">
                           
                            <input type="submit" value="Submit" class="formbg-butt" />
                            </form>
                            
                            
                  
            </div>
        </div>
 
        </div>
</div>



<div class="aboutbg">
		<div class="about-left"><img src="images/member-6.jpg" />
        </div>
        
        
        <div class="about-right">
        <h3>About</h3>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting 
industry. Lorem Ipsum has been the industry's standard dummy text 
ever since the 1500s, when an unknown printer took a galley of type
and scrambled it to make a type specimen book. It has survived not 
only five centuries, but also the leap into electronic typesetting,</p>
        </div>
</div>


<div class="aboutbg">
		<div class="about-left"><img src="images/member-8.jpg" />
        </div>
        
        
        <div class="about-right">
        <h3>About</h3>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting 
industry. Lorem Ipsum has been the industry's standard dummy text 
ever since the 1500s, when an unknown printer took a galley of type
and scrambled it to make a type specimen book. It has survived not 
only five centuries, but also the leap into electronic typesetting,</p>
        </div>
</div>
<div class="aboutbg-divider"></div>


<?php include("include/footer.php");?>
</body>
</html>