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
    
<?php


$timestamp=time();
$picture= $_FILES['picture']['name'];
$avatar=$_POST['avatar'];
$pic=0;
if ( strlen ( $picture ) > 0)
{
$pic=1;
$ary=explode("." , $picture);
$newfilename=$timestamp.".".$ary[1];
copy($_FILES["picture"]["tmp_name"],
      "upload/" . $newfilename);
}
if ( strlen ( $avatar ) > 0 && $pic == 0 )
$newfilename=$avatar;
// interests
$i=1;
$interests="";
while ( $i <=63 )
{
$var="c".$i;
$intr=$_POST[$var];

if ( strlen($intr)!=0)
{
	$interests=$interests." , ". $intr;
}

$i++;
}

// meeting 

$i=1;
$meeting="";
while ( $i <=3 )
{
$var="p".$i;
$meet=$_POST[$var];

if ( strlen($meet)!=0)
{
	$meeting=$meeting." , ". $meet;
}

$i++;
}
	
	
//status
$i=1;
$status="";
while ( $i <=3 )
{
$var="k".$i;
$stat=$_POST[$var];

if ( strlen($stat)!=0)
{
	$status=$status." , ". $stat;
}

$i++;
}

$interests=substr($interests,3);
$meeting=substr($meeting,3);
$status=substr($status,3);

$username=$_SESSION['uid'];


if (strlen($newfilename)>0)
{
$sql="update member set interests='$interests' , meeting = '$meeting' , status='$status' , picture='$newfilename' , room='1'  where username='$username' ";
}
else
{
$sql="update member set interests='$interests' , meeting = '$meeting' , status='$status' , room='1'  where username='$username' ";
}


$result=mysql_query($sql,$connection);


echo "<h2>Thanks for Updating your profile !! Please Enjoy Friends Space NOW !!</h2><br><center><h3>PLease click <a href='home-page.php'>HERE</a> to go to your Home</h3><center>";


?>
                    
 </div>
</div>



<?php include("include/footer.php");?>
</body>
</html>
