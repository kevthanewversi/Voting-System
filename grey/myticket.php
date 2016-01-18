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
								<li><a href=""></a></li>
								<li><a href="#">Log In</a></li>
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
				<h2>You Booking History</h2>
				<?php
$query = mysql_query("select * from user_history where user_id = '$uid'");
if(mysql_num_rows($query)>0)
{
	
?>
<table border="1" bordercolor="#000000" width="805" height="62" align="center" cellpadding="1" class="table">

<tr align="center"><td width="115">Bus Name</td><td width="122">From</td><td width="117">To</td><td width="117">Journey Date</td><td width="117">Booking Date</td><td width="117">Seat No.</td><td width="117">Dept Time</td><td width="110">Distance</td><td width="110">Fare</td><td width="101">Operations</td></tr>
<tr>&nbsp;</tr>
<?php
while($r = mysql_fetch_array($query))
{
	$id = $r['id'];
	$bus_id = $r['bus_id'];
	$bus_reg = $r['bus_reg'];
	$from_stop = $r['from_stop'];
	$to_stop = $r['to_stop'];
	$journey_date = $r['journey_date'];
	$booking_date= $r['booking_date'];
	$seat_no_booked = $r['seat_no_booked'];
	$dept_time = $r['dept_time'];
	$distance = $r['distance'];
	$fare = $r['fare'];
	?>
    <tr align="center">
    <td width="115"><?php echo $bus_reg; ?></td>
    <td><?php echo $from_stop; ?></td>
    <td><?php echo $to_stop; ?></td>
    <td><?php echo $journey_date; ?></td>
    <td><?php echo $booking_date; ?></td>
    <td><?php echo $seat_no_booked; ?></td>
    <td><?php echo $dept_time; ?></td>
    <td><?php echo $distance; ?></td>
    <td><?php echo $fare; ?></td>
    <td>
    <form name="f">
    <input type="button" name="cancel" value="Cancel" onclick="clk()" />
    </form>
    </td></tr>
    <?php
}?>
</table>
<?php
}else
{
	?>
    <script>
	alert("You dont have any booking history");
	window.location = "Home.php?id=<?php echo $uid; ?>";
	</script>
<!--    <h2 style="font-family:'Palatino Linotype', 'Book Antiqua', Palatino, serif">You Dont Have any Booking History</h2>
-->    <?php
}
?>
<a href="Home.php?id=<?php echo $uid;?>">Back to Home</a>
<script>
function clk()
{
	var cancel = confirm("Are You Sure You Want to Cancel the Ticket");
	if(cancel == true)
	{
		window.location = "cancel.php?id=<?php echo $uid; ?>&seat_id=<?php echo $seat_no_booked; ?>&bus_id=<?php echo $bus_id; ?>&did=<?php echo $id;?>";
	}
	
}

</script>
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

$uid=$_SESSION['id'];

$sql = mysql_query("select * from register where id = '$uid'");
$r = mysql_fetch_array($sql);
$password = sha1($r['password']);

if(isset($_POST['pas'])){
	$oldp = sha1($_POST['oldp']);
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