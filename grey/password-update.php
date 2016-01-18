<?php
session_start();
require("config.php"); 
if(isset($_SESSION['id']))
{
$uid=$_SESSION['id'];
$sql = mysql_query("select * from `customers` where id = '$uid'");
$r = mysql_fetch_array($sql);

$name = $r['name'];
$dob = $r['dob'];
$adress = $r['address'];
$mobile = $r['mobile'];
$pincode = $r['pin_code'];
$gender = $r['gender'];
$email = $r['email'];
$password = sha1($r['password']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Password Update</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.4.2.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>  
<script type="text/javascript" src="js/Myriad_Pro_600.font.js"></script>
<!--[if lt IE 9]>
	<script type="text/javascript" src="http://info.template-help.com/files/ie6_warning/ie6_script_other.js"></script>
	<script type="text/javascript" src="js/html5.js"></script>
<![endif]-->
</head>
<body id="page2">
<div class="extra">
	<div class="main">
<!-- header -->
		<header>
			<div class="wrapper">
				<h1><a href="index.php" id="logo">Greyhound Buses</a></h1>
				<div class="right">
					<div class="wrapper">
				&nbsp;
					</div>
					<div class="wrapper">
						<nav>
							<ul id="top_nav">
									<li>Welcome! <a href ="profile.php?id"><h3><?php echo $name;?></h3></a></li>
								<li><a href="logout.php">Logout</a></li>
							</ul>
						</nav>
					</div>	
				</div>
			</div>
			<nav>
				<ul id="menu">
					<li><a href="index.php" class="nav1">Home</a></li>
					<li><a href="About.html" class="nav2">About Us </a></li>
					<li><a href="Tours.html" class="nav3">Our Tours</a></li>
					<li><a href="Destinations.html" class="nav4">Destinations</a></li>
					<li class="end"><a href="Contacts.html" class="nav5">Contacts</a></li>
				</ul>
			</nav>
			<div class="text">
				<h2>Change Your Password</h2>
				<form id="ContactForm" method="post">     
<div class="wrapper">
Old Password : <input class="input" type="password" name="oldp" required></div>
<div class="wrapper">
New Password : <input class="input" type="password"  name="newp" required ></div>
<div class="wrapper">
Confrim Password : <input class="input" type="password" name="conp" required ></div>
<input class="button" type="submit" value="Change" name="pas">
<a class="button" href="home.php?id=<?php echo $uid; ?>">Back</a>
</form>
				<br />
			</div>
			<div class="img">&nbsp;</div>
			
			<div class="img" style="margin-top:20px;">&nbsp;<img src="images/bus.jpg" alt=""></div>
			<div class="img" style="margin-top:20px;"><b><?php echo date("D d-M-Y");?></b></div> 

		</header>
<!-- / header -->
	</div>

</div>
<div class="body1">
	<div class="main">
<!-- footer -->
		<footer>
			<a rel="nofollow" href="" target="_blank"></a>&copy; 2014 Greyhound Buses<br>
			</footer>
<!-- / footer -->
	</div>
</div>
<script type="text/javascript"> Cufon.now(); </script>
<?php

$uid=$_SESSION['id'];//the id we're to which we are changing the password to

$sql = mysql_query("select * from register where id = '$uid'");
$r = mysql_fetch_array($sql);  //query to go to specified id
$password = sha1($r['password']);//fetch oldp from db

if(isset($_POST['pas'])){
	$oldp = sha1($_POST['oldp']);//collect info from the form above
	$newp = sha1($_POST['newp']);
	$conp = sha1($_POST['conp']);
	
 	if($oldp=='' || $oldp=='' || $newp==''){
		echo "<table class=table cellpadding=0 cellspacing=0 align=center bgcolor=#FFFF66 style=font-family:verdana;>
		<tr><td><font color=#FF0000 size=2>&nbsp;Please Enter The Password in All Fields &nbsp;</font></td></tr></table>";
	}
	else if($oldp!=$password){
			echo "<table class=table cellpadding=0 cellspacing=0 align=center bgcolor=#FFFF66 style=font-family:verdana;>
		<tr><td><font color=#FF0000 size=2>&nbsp;The Old Password is incorrect &nbsp;</font></td></tr></table>";
			}
	
	else if($newp != $conp){
		echo "<table class=table cellpadding=0 cellspacing=0 align=center bgcolor=#FFFF66 style=font-family:verdana;>
		<tr><td><font color=#FF0000 size=2>&nbsp; New Password and Confirm Password are not match &nbsp;</font></td></tr></table>";
		}
		
else{
	$sql = mysql_query("update register set password='$newp' where id='$uid' AND password='$oldp'");
	header('location:Home.php?id=$uid');
	?>
    <script>
	alert('Password Successfully changed');
	</script>
    <?php
	
	}

}

}
else
{
	header("Location:Home.php?id=$uid");
}
?>
</body>
</html>