<?php
session_start();
 require("config.php");		 
		 if(isset($_SESSION['id'])){
		 $uid = $_SESSION['id'];
		 $uid=$_SESSION['id'];
		 $query = mysql_query("select * from bus");
		 
		 $query1 = mysql_query("select min(id) as min from bus");
		  $row = mysql_fetch_assoc($query1);
		  $min = $row['min'];
		 ?> 
		 
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
		 <table width="650" height="62" align="center">

<tr align="center"><td width="95"> User ID</td><td width="95">Bus ID</td><td width="95">Bus Reg</td><td width="117">From</td><td width="119">To</td><td width="110">Journey Date</td><td width="110">Booking Date</td><td>Seat Booked</td><td>Depature Time</td><td>Distance</td><td>Fare</td><td width="101">&nbsp;</td></tr>
      <?php

	   
	   
		 for($pe=30;$pe<=42;$pe++){
 $sql= mysql_query("select * from user_history where id='$pe'") or die(mysql_error()); 
$r = mysql_fetch_array($sql);

$id=$r['id'];
$uid = $r['user_id'];
$busid = $r['bus_id'];
$bus_reg = $r['bus_reg'];
$from = $r['from_stop'];
$to = $r['to_stop'];
$jdate = $r['journey_date'];
$bdate = $r['booking_date']; 
$seat = $r['seat_no_booked'];
$dept_time = $r['dept_time'];
$dist= $r['distance'];
$fare = $r['fare'];

?>

<tr align="center"><td><?php echo $uid;?></td><td><?php echo $busid;?></td><td><?php echo $bus_reg;?></td><td><?php echo $from;?></td><td><?php echo $to;?></td>
<td nowrap="nowrap"><?php echo $jdate;?></td><td><?php echo $bdate;?></td><td><?php echo $seat; ?></td><td><?php echo $dept_time; ?></td><td><?php echo $dist; ?></td>
<td><?php echo $fare; ?></td><td><a href="edit.php?page=5&id=<?php echo $id ?>">Edit</a></td> <td><form method="post" action="delete.php?page=5&id=<?php echo $id?>"><button type="submit" name="delete" > delete</button>  
</form></td></tr> 

            <?php     
										}
										}
		 ?>
		 <form align="bottom" method="post" action="addelement.php?page=5"><button type="submit" name="addel" > add</button>  </form>
           <form align="bottom" method="post" action="javascript:window.print()"><button type="submit" name="print"  > print</button>  </form>		 