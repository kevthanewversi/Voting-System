<?php
session_start();
 require("config.php");		 
		 if(isset($_SESSION['id'])){
		 $uid = $_SESSION['id'];
		 $query = mysql_query("select * from bus");
		 
		 $query1 = mysql_query("select min(id) as min from destinations");
		  $row = mysql_fetch_assoc($query1);
		  $min = $row['min'];
		 ?> 
		 
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
		 <table width="650" height="62" align="center">

<tr align="center"><td width="95"> Destination</td>
      <?php

		 for($pe=$min;$pe<=mysql_num_rows($query);$pe++){
 $sql= mysql_query("select * from `destinations` where id='$pe'") or die(mysql_error());
$r = mysql_fetch_array($sql);

$id=$r['id'];
$dest = $r['destination'];


?>

<tr align="center"><td><?php echo $dest;?></td><td><a href="edit.php?page=4&id=<?php echo $id ?>">Edit</a></td><td>
<form method="post" action="delete.php?page=4&id=<?php echo $id?>"><button type="submit" name="delete" > delete</button>  </form></td></tr> 
          <?php     
										}
										}
		 ?>
		 <form method="post" action="addelement.php?page=4"><button type="submit" name="addel" > add</button>  </form>
          <form align="bottom" method="post" action="javascript:window.print()"><button type="submit" name="print"  > print</button>  </form>		 