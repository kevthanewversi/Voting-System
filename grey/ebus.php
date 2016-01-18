<?php
session_start();
 require("config.php");		 
		 if(isset($_SESSION['id'])){
		 $uid = $_SESSION['id'];
		  $query = mysql_query("select * from bus");
		  
		  $query1 = mysql_query("select min(id) as min from bus");
		  $row = mysql_fetch_assoc($query1);
		  $min = $row['min'];
		 ?>
		 
<link rel="stylesheet" href="css/style.css" type="text/css" media="all"> 

<table width="650" height="62" align="center">

<tr align="center"><td width="95">ID</td><td width="95">Bus Name</td><td width="95">From</td><td width="95">To</td><td width="117">Dept Time</td><td width="119">Arrival Time</td><td width="110">Distance</td><td width="110">Fare</td><td>Available</td><td width="101">&nbsp;</td></tr>
       <?php	
      	   
		 for($pe=$min;$pe<=mysql_num_rows($query);$pe++){
		 $sql1= mysql_query("select * from `bus` where ID='$pe'");
		 $r1=mysql_fetch_array($sql1);
		$id= $r1['id'];
	    $bus_reg = $r1['bus_reg'];
	    $from = $r1['from_stop'];
	    $to = $r1['to_stop'];
	    $dept_time = $r1['dept_time'];
	    $arrival_time = $r1['arrival_time']; 
	    $distance = $r1['distance'];
	    $fare = $r1['fare'];
		
		  // $bust = $id.'bus';
	      // $query1 = mysql_query("SELECT * from $bust where status='Available'");
	      //$c = mysql_num_rows($query1);
		   
		   
		?>
		 <tr align="center"><td><?php echo $id;?></td><td><?php echo $bus_reg;?></td><td><?php echo $from;?></td><td><?php echo $to;?></td><td><?php echo $dept_time;?></td><td><?php echo $arrival_time;?>
		 </td><td nowrap="nowrap"><?php echo $distance;?></td><td><?php echo $fare; ?></td><td><?php// echo $c; ?></td><td><a href="edit.php?page=1&id=<?php echo $id ?>">Edit</a></td><td> 
		 <form method="post" action="delete.php?page=1&id=<?php echo $id?>"><button type="submit" name="delete" > delete</button>  </form></td></tr> 
     <?php }  ?> </table> <?php
	 }
	 ?>	
<form method="post" action="addelement.php?page=1"><button type="submit" name="addel" > add</button>  </form>
<form align="bottom" method="post" action="javascript:window.print()"><button type="submit" name="print"  > print</button>  </form>	 