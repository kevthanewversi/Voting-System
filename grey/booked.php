<?php
session_start();
if(isset($_SESSION['id']))
{
require("config.php");
$uid = $_SESSION['id'];
$bus = $_GET['bus'];
$seat = $_GET['seat'];
$choice = $_GET['c'];
$bust = $bus.'bus';
$date = date("Y-m-d"); 
 $query = mysql_query("select * from bus where id ='$bus'");
	$re1 = mysql_fetch_array($query);
		$bus_reg = $re1['bus_reg'];
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
		 $q4 = mysql_query("insert into user_history(user_id, bus_id,bus_reg, from_stop , to_stop, booking_date, seat_no_booked, dept_time, distance, fare) values('".$uid."','".$bus."','".$bus_reg."', '".$from."', '".$to."', '".$date."', '".$id."', '".$dept_time."', '".$distance."', '".$fare."')");

	}
	?>
        <script>
		alert("Thank you!Your booking request has been processed and equal amount is deducted from your account")
		window.location = "Print.php?id=<?php echo $uid;?>&bus=<?php echo $bus;?>&seat=<?php echo $seat;?>";
        </script>
        <?php
		}
	else
	{
		?>
        <script>
		alert("Your required seats are more then available seats");
		window.location = "Home.php?id=<?php echo $uid; ?>";
		</script>
        <?php
	}
	}
}
?>