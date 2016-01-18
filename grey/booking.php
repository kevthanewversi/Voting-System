<?php
session_start();
require("config.php"); 
if(isset($_SESSION['id']))
{
$uid = $_SESSION['id'];
$bus = $_GET['bus'];
$bust = $bus.'bus';

$sql = mysql_query("select * from customers where id = '$uid'") or die(mysql_error());
if(mysql_num_rows($sql)>0)
{
	$r = mysql_fetch_array($sql);
	$name = $r['name'];		
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Booking</title>
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
								<li>Welcome! <a href ="profile.php?id"><h3><?php //echo $name;?></h3></a></li>
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
				<h2>Book Your tickets</h2>
				<?php

$uid = $_SESSION['id'];
echo $bus = $_GET['bus'];
$bust = $bus.'bus';
?>
<?php
if(isset($_POST['book']))
{

	 $seat = $_POST['seat'];
	 $choice = $_POST['choice'];
	 $date = date("Y-m-d");
	echo "<br>";
	if($seat !='')
	{
		if($choice !='')
		{
	
	header("Location:pay.php?id=$uid&bus=$bus&seat=$seat&c=$choice"); //Enter the payment gateway
	}
	else
	{
		?>
        <script>
		alert("Enter your Choice");
		</script>
        <?php
	}
	}
	else
	{
		?>
        <script>
		alert("Enter Number of seats to be booked");
		</script>
        <?php
	}
	}
?>
				<form id="ContactForm" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>?id=<?php echo $uid;?>&bus=<?php echo $bus;?>">   			
<div class="wrapper">
No. of Seats: <input style="width:280px;" class="input" type="text" name="seat" required></div>
<div class="wrapper">
Choice: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<select style="width:280px; height:25px;" name="choice" required>
<option value=""></option>
<option value="N">Aisle</option>
<option value="W">Window</option>
</select></div>
<input class="button" type="submit" name="book" value="Book">
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
}
else
{
	header("Location:Home.php?id=$uid");
}
?>
</body>
</html>