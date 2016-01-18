<?php
session_start();
if(isset($_SESSION['id']))
{
require("config.php");
$uid = $_SESSION['id'];
$bus = $_GET['bus'];
$seat = $_GET['seat'];
$c = $_GET['c'];
$bust = $bus.'bus';

$query = mysql_query("select fare from bus where id='$bus'");
if($query>0)
{
	$r= mysql_fetch_array($query);
	$fare =$r['fare']; 


	$tf = $fare*$seat;
/*	 $query = mysql_query("select * from bus where id ='$bus'");
	$re1 = mysql_fetch_array($query);
		$bus_name = $re1['bus_name'];
		$from = $re1['from_stop'];
		$to = $re1['to_stop'];
		$dept_time = $re1['dept_time'];
		$arrival_time = $re1['arrival_time'];
		$distance = $re1['distance'];
		$fare = $re1['fare'];
	if($choice !='')
	{
		if($choice=='W' && $seat==1)
		{
		 $query2 = "select * from $bust where status='Available' AND state='$choice' limit 0,$seat";
	$p = mysql_query($query2);
	$re = mysql_num_rows($p);
		}
		else
		{
			 $query2 = "select * from $bust where status='Available' limit 0,$seat";
	$p = mysql_query($query2);
	$re = mysql_num_rows($p);
		}
	if($re>=$seat)
	{
		while($r = mysql_fetch_array($p))
		{
			$id = $r['id'];
		 $q3 = mysql_query("update $bust set status ='Booked' where id='$id'");
		 $q4 = mysql_query("insert into user_history(user_id, bus_id,bus_name, from_stop , to_stop, booking_date, seat_no_booked, dept_time, distance, fare) values('".$uid."','".$bus."','".$bus_name."', '".$from."', '".$to."', '".$date."', '".$id."', '".$dept_time."', '".$distance."', '".$fare."')");

	}
	?>
        <script>
		alert("Your booking request has been completed")
		window.location = "Home.php?id=<?php echo $uid; ?>";
        </script>
        <?php
		}
	else
	{
		?>
        <script>
		alert("Your required seats are more then available seats");
		</script>
        <?php
	}
	}
	*/
	}

?><head>
<h3  style="color:#F00; text-align:center";>Welcome to Payment Gateway</h3>

<h3  style="color:#F00; text-align:center";>Enter your credit card information below. We'll add more payment opyions like M-PESA in future</h3>

<script>
function b()
{
	var card = document.f.card.value; //to collect the value entered and store it in a var card
	var length = card.length;//the length of the card no.
	var theurl=document.f.card.value;
	var numericExpression = /^[0-9]+$/; //to input the range of numerals to be input by the user
	if(numericExpression.test(theurl)) //to test if the card card no is numeric 
	{
	
	if(length ==16 )
	{
		return true;
	}
	else
	{
		alert("Card number should be of 16 Digits");
		f.card.focus();
		return false;
	}
	
	return true;
}
else
{
		alert("Card number should be Numeric");
		f.card.focus();
		return false;
}
}

function isNumeric()
{
	var theurl=document.f.acc.value;
	var numericExpression = /^[0-9]+$/;
	if(numericExpression.test(theurl) && theurl !='')
{
		return true;
	}
	else
	{
		alert("Enter no only");
		document.getElementById('acc').focus();
		return false;
	}
}

function d()
{
	var crdn = document.f.crdname.value;
	if(crdn =='')
	{
		alert("Card holder's Name can not be blank,please fill it");
		ddocument.getElementyId('crdname').focus();
		return false;
	}
	else
	{
		return true;
	}
}

function e()
{
	var con = confirm("Are you sure,you want to Continue");
	if(con ==true)
	{
		<?php
		//header("Location:booked.php?id=$uid&bus=$bus&seat=$seat");
		?>
		window.location ="booked.php?id=<?php echo $uid;?>&bus=<?php echo $bus?>&seat=<?php echo $seat;?>&c=<?php echo $c;?>";
	}
	else
	{
	}
}

function g()
{
		window.location ="Home.php?id=<?php echo $uid; ?>";
}
</script>
</head>
<br>
<br>
<form name="f" method="post">
<div style="padding-left:18%">
<pre>Account Number			:<input type="text" name="acc" id="acc" value="" onBlur="isNumeric()"><br>

Card Number			:<input type="text" name="card" value="" onBlur="b()">
<br>
Card Holder's Name		:<input type="text" name="crdname" id="crdname" value="" onBlur="d()">
</pre><br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<span style="background-color:#000fff"><?php echo "Amount to be deducted from your account is KSHS ".$tf; ?></span><br>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="button" name="ok" value="Confirm" onClick="e()">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="button" name="can" value="Cancel" onClick="g()">
</div>
</form><?php
}
else
{
	header("Location:index.php");
}
?>
