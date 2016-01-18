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

<tr align="center"><td width="95">Driver Name</td><td width="95">Bus Reg No</td><td width="101">&nbsp;</td></tr>
       <?php	
	
      	   
		 for($pe=$min;$pe<=5;$pe++){
		 $sql1= mysql_query("select * from drivers where ID='$pe'");
		 $r1=mysql_fetch_array($sql1);
		
		$id= $r1['ID'];
	    $bus_reg = $r1['BUS_REG'];
	    $name = $r1['DRIVER'];                
	 
		?>
		 <tr align="center"><td><?php echo $name;?></td><td><?php echo $bus_reg;?></td><td><a href="edit.php?page=2&id=<?php echo $id ?>">Edit</a></td>
		 <td><form method="post" action="delete.php?page=2&id=<?php echo $id?>"><button type="submit" name="delete" > delete</button>  </form></td></tr> 
     <?php } 
	 }
	 ?>		 <form method="post" action="addelement.php?page=2"><button type="submit" name="addel" > add</button>  </form>
                  <form align="bottom" method="post" action="javascript:window.print()"><button type="submit" name="print"  > print</button>  </form>	 