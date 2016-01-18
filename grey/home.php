<?php
session_start();
require("config.php");
if(isset($_SESSION['id']))
{
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Home</title>
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
				<h1><a href="index.html" id="logo">Kenya Airways</a></h1>
				<div class="right">
					<div class="wrapper">
						&nbsp;
					</div>
					<div class="wrapper">
					<?php 
					if(isset($_SESSION['id']))
{
$uid = $_SESSION['id'];	

$sql = mysql_query("select * from `customers` where id = '$uid'");
if(mysql_num_rows($sql)>0)
{
	$r = mysql_fetch_array($sql);
	$name = $r['name'];		
}
?>
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
					<li><a href="Tours.php" class="nav3">Our Tours</a></li>
					<li class="end"><a href="Contacts.html" class="nav5">Contacts</a></li>
				</ul>
			</nav>
			<div class="text">
				<h4>Your Account Settings</h4>
				
		<div class="wrapper"><img align="absmiddle" src="images/password.png" width="32" height="32" alt="" /><a href="password-update.php?id=<?php echo $uid;?>">Change Password</a></div>
		<div class="wrapper"><img align="absmiddle" src="images/profile.png" width="32" height="32" alt="" /><a href="profile.php?id=<?php echo $uid;?>">View Profile</a></div>
		<div class="wrapper"><img align="absmiddle" src="images/ticket.png" width="32" height="32" alt="" /><a href="myticket.php?id=<?php echo $uid;?>">My Ticket History</a></div>

			</div>
			<div class="img" style="margin-top:20px;" ><img src="images/volvo-bus.jpg" alt=""></div>
		</header>
<!-- / header -->
<!-- content -->
		<section id="content">
			<article class="col1">
				<h3>Hot Travel</h3>
				<div class="pad">
					<div class="wrapper under">
						<figure class="left marg_right1"><img width="100" height="100" src="images/thumbs/p3.jpg" ></figure>
						<p class="pad_bot2"><strong><br></strong></p>
						<p class="pad_bot2">.</p>
						<a href="#" class="marker_1"></a>
					</div>
					<div class="wrapper under">
						<figure class="left marg_right1"><img width="100" height="100" src="images/thumbs/p1.jpg"  ></figure>
						<p class="pad_bot2"><strong></strong></p>
						<p class="pad_bot2"></p>
						<a href="#" class="marker_1"></a>
					</div>
					<div class="wrapper">
						<figure class="left marg_right1"><img  width="100" height="100" src="images/thumbs/p2.jpg"></figure>
						<p class="pad_bot2"><strong></strong></p>
						<p class="pad_bot2"></p>
						<a href="#" class="marker_1"></a>
					</div>
				</div>
       		</article>
			<article class="col2 pad_left1">
				<h2>Search For plane Services</h2>
				<form method="post" id="SearchForm">
				From&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<?php
								$sql = mysql_query("select * from  bus_rev.destinations");
							?>
							<select name="from" class="select-big">
							<option value="">Select</option>
							<?php
        	           while($arrvar = mysql_fetch_array($sql))
					  	{
						?>
        		        <option value="<?php echo $arrvar['destination']?>"><?php echo $arrvar['destination']?></option>
               			<?php 
						}
					   ?>
							</select>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<?php
								mysql_connect("localhost","root","");
								mysql_select_db('bus_rev');
								$sql = mysql_query("select * from  bus_rev.destinations");
							?>
							<select name="to" class="select-big">
							<option value="">Sefromlect</option>
							<?php
        	           while($arrvar = mysql_fetch_array($sql))
					  	{
        		        echo "<option value='$arrvar[destination]'>$arrvar[destination]</option>";
               			}
					   ?>
							</select><br /><br />
							<div class="wrapper">Date of Journey  : <input type="text" class="input" value="04/11/ 2014"> &nbsp;(mm/dd/yy) </div>
							<br />
							<input type="submit" name="search" class="button" value="Search" onclick="return callfrm(document.getElementById('currentdate').value);" class="html-button">
			
			 	       <input type="submit" name="resert" class="button" value="Reset"  class="html-button">
				  
				</form><br />
				
				<div class="errormessage" align="center">
					 
				</div>
				<br />
				<?php
if(isset($_POST['search']))
{
	require('config.php');//connect to DB
	 $from = $_POST['from'];
	 $to = $_POST['to'];
	 
	 $query = mysql_query("select * from bus where from_stop ='$from' AND to_stop ='$to'");
	 $c = mysql_num_rows($query);
	if($c>0)
	{
?>
<table width="650" height="62" align="center">

<tr align="center"><td width="95">Bus Reg</td><td width="95">From</td><td width="95">To</td><td width="117">Dept Time</td><td width="119">Arrival Time</td><td width="110">Distance</td><td width="110">Fare</td><td>Available</td><td width="101">&nbsp;</td></tr>
<?php
while($r1 = mysql_fetch_array($query))
{
	$bus= $r1['id'];
	$bus_name = $r1['bus_reg'];
	$from = $r1['from_stop'];
	$to = $r1['to_stop'];
	$dept_time = $r1['dept_time'];
	$arrival_time = $r1['arrival_time'];   
	$distance = $r1['distance'];
	$fare = $r1['fare'];
	
	$bust = $bus.'bus';
	$query1 = mysql_query("SELECT * from $bust where status='Available'");
	$c = mysql_num_rows($query1);
?>

<tr align="center"><td><?php echo $bus_name;?></td><td><?php echo $from;?></td><td><?php echo $to;?></td><td><?php echo $dept_time;?></td><td><?php echo $arrival_time;?></td><td nowrap="nowrap"><?php echo $distance;?></td><td><?php echo $fare; ?></td><td><?php echo $c;?></td><td><a href="booking.php?id=<?php echo $uid;?>&bus=<?php echo $bus;?>">Book</a>
</td></tr>
<?php
}
?>
</table>
<?php
}
}
?>
        	</article>
		</section>
<!-- / content -->
	</div>
	<div class="block"></div>
</div>
<div class="body1">
	<div class="main">
<!-- footer -->
		<footer>
			<a rel="nofollow" href="" target="_blank"></a>&copy; 2015 Kenya Airways<br>
		</footer>
<!-- / footer -->
	</div>
</div>
<script type="text/javascript"> Cufon.now(); </script>
<?php
}
else
{
	header("Location:index.php");
}
}
else
{
	header("Location:Home.php?id=$uid");
}
?>

</body>
</html>
