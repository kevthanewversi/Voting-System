<?php
session_start();
 require("config.php");		 
		 if(isset($_SESSION['id'])){
		 $uid = $_SESSION['id'];
		 
		  ?>
		 
		 
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<table>	<tr> <td> <form method ="post"> customer:
		 <div class="wrapper">
customer's  name    :  <input class="input" type="text" name="a" required ></div>
 <div class="wrapper">
 <button type="submit"  name="csubmit"> submit</button> </form></td>
 
 <td> <form method ="post"> bus:
		 <div class="wrapper">
bus'  name    :  <input class="input" type="text" name="b" required ></div>
 <div class="wrapper">
 <button type="submit"  name="bsubmit"> submit</button> </form></td>
 <td> <form method ="post"> driver:
		 <div class="wrapper">
driver's  name    :  <input class="input" type="text" name="c" required ></div>
 <div class="wrapper">
 <button type="submit"  name="dsubmit"> submit</button> </form></td> </tr>

</table>


<?php
if(isset($_POST['csubmit'])){
$a = $_POST['a'];//collect info from the form above
$sql = mysql_query("select * from customers where name = '$a'") or die(mysql_error());
$r = mysql_fetch_array($sql)  or die(mysql_error());

$id=$r['id'];
$name = $r['name'];
$dob = $r['dob'];
$adress = $r['address'];
$mobile = $r['mobile'];
$pincode = $r['pin_code'];
$gender = $r['gender'];
$email = $r['email'];
$password = $r['password'];

?>

<table width="650" height="62" align="center">

<tr align="center"><td width="95"> Name</td><td width="95">DOB</td><td width="95">Adress</td><td width="117">Phone</td><td width="119">Pincode</td><td width="110">Gender</td><td width="110">Email</td><td>Password</td><td width="101">&nbsp;</td></tr>

<tr align="center"><td><?php echo $name;?></td><td><?php echo $dob;?></td><td><?php echo $adress;?></td><td><?php echo $mobile;?></td><td><?php echo $pincode;?></td>
<td nowrap="nowrap"><?php echo $gender;?></td><td><?php echo $email; ?></td><td><?php echo $password; ?></td><td><a href="edit.php?page=3&id=<?php echo $id ?>">edit</a></td> <td>
<form method="post" action="delete.php?page=3&id=<?php echo $id?>"><button type="submit" name="delete" > delete</button>  </form></td></tr>
 <tr>
<td><a class="button" href="admin.php">Back</a> </div></td>
</tr>  </table> 

             
<?php  }




elseif(isset($_POST['bsubmit'])){
$b = $_POST['b'];//collect info from the form above
$sql = mysql_query("select * from bus where bus_reg = '$b'") or die(mysql_error());
$r1 = mysql_fetch_array($sql)  or die(mysql_error());
 

	    $id= $r1['id'];
	    $bus_reg = $r1['bus_reg'];
	    $from = $r1['from_stop'];
	    $to = $r1['to_stop'];
	    $dept_time = $r1['dept_time'];
	    $arrival_time = $r1['arrival_time']; 
	    $distance = $r1['distance'];
	    $fare = $r1['fare'];
        $bust = $id.'bus';
	      // $query1 = mysql_query("SELECT * from $bust where status='Available'");
	      //$c = mysql_num_rows($query1);
   
      ?> 
	  <table width="650" height="62" align="center">

<tr align="center"><td width="95">ID</td><td width="95">Bus Name</td><td width="95">From</td><td width="95">To</td><td width="117">Dept Time</td><td width="119">Arrival Time</td><td width="110">Distance</td><td width="110">Fare</td><td>Available</td><td width="101">&nbsp;</td></tr>

<tr align="center"><td><?php echo $id;?></td><td><?php echo $bus_reg;?></td><td><?php echo $from;?></td><td><?php echo $to;?></td><td><?php echo $dept_time;?></td><td><?php echo $arrival_time;?>
		 </td><td nowrap="nowrap"><?php echo $distance;?></td><td><?php echo $fare; ?></td><td><?php// echo $c; ?></td><td><a href="edit.php?page=1&id=<?php echo $id ?>">Edit</a></td><td> 
		 <form method="post" action="delete.php?page=1&id=<?php echo $id?>"><button type="submit" name="delete" > delete</button>  </form></td></tr> 
		 
 <tr>
<td><a class="button" href="admin.php">Back</a> </div></td>
</tr>  
     <?php ?> </table> <?php   
	 
	 
	 //else("No bus with $a as a registration no found");  
	}
	
	
	elseif(isset($_POST['dsubmit'])){
$c = $_POST['c'];//collect info from the form above
$sql = mysql_query("select * from drivers where driver = '$c'") or die(mysql_error());
$r = mysql_fetch_array($sql)  or die(mysql_error());

		$id= $r['ID'];
	    $bus_reg = $r['BUS_REG'];
	    $name = $r['DRIVER']; 
										
									?>
									<table width="650" height="62" align="center">
									
<tr align="center"><td width="95">Driver Name</td><td width="95">Bus Reg No</td><td width="101">&nbsp;</td></tr>
										  
		 <tr align="center"><td><?php echo $name;?></td><td><?php echo $bus_reg;?></td><td><a href="edit.php?page=2&id=<?php echo $id ?>">Edit</a></td>
		 <td><form method="post" action="delete.php?page=2&id=<?php echo $id?>"><button type="submit" name="delete" > delete</button>  </form></td></tr> 
		  
		  
		  <tr>
<td><a class="button" href="admin.php">Back</a> </div></td>
</tr>  </table>
		 <?php
		 }
										
										
										}


