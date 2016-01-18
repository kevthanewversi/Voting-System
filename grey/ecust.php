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

<tr align="center"><td width="95"> Name</td><td width="95">DOB</td><td width="95">Adress</td><td width="117">Phone</td><td width="119">Pincode</td><td width="110">Gender</td><td width="110">Email</td><td>Password</td><td width="101">&nbsp;</td></tr>
      <?php
	   
	   
		 for($pe=17;$pe<=22;$pe++){
 $sql= mysql_query("select * from customers where ID='$pe'") or die(mysql_error());
$r = mysql_fetch_array($sql);
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

<tr align="center"><td><?php echo $name;?></td><td><?php echo $dob;?></td><td><?php echo $adress;?></td><td><?php echo $mobile;?></td><td><?php echo $pincode;?></td>
<td nowrap="nowrap"><?php echo $gender;?></td><td><?php echo $email; ?></td><td><?php echo $password; ?></td><td><a href="edit.php?page=3&id=<?php echo $id ?>">edit</a></td> <td>
<form method="post" action="delete.php?page=3&id=<?php echo $id?>"><button type="submit" name="delete" > delete</button>  </form></td></tr> 

            <?php     
										}
										}
		 ?>
		 <form method="post" action="addelement.php?page=3"><button type="submit" name="addel" > add</button>  </form>	
           <form align="bottom" method="post" action="javascript:window.print()"><button type="submit" name="print"  > print</button>  </form>		 