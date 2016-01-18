<?php
session_start();
 require("config.php");?>
 
 

<?php

if(isset($_SESSION['id']))

{ ?>
<head>
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.4.2.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>  
<script type="text/javascript" src="js/Myriad_Pro_600.font.js"></script>
<title>
dashboard </title>


</head>
<body>
<?php
          $uid = $_SESSION['id'];
		  
		  $sql = mysql_query("select * from `admin` where ID = '$uid'") or die(mysql_error());
		  $r = mysql_fetch_array($sql);
		  $admin=$r['USERNAME'];
		  //$email=$r['email'];
		  ?>
		  Welcome! <a href ="admin.php?id=1"><?php echo $admin; ?></a>
		   <br><br>
		   <table width="650" height="62" align="center">
		  
		 <tr> <td> <a href="ebus.php"> Buses</a> <br></tr> </td>
		 <tr> <td> <a href="edriv.php"> Drivers</a> <br> </tr> <td>
		 <tr> <td> <a href="ecust.php"> Customers</a><br> </tr> </td>
		 <tr> <td> <a href="edest.php"> Destinations</a><br> </tr> </td>
		 <tr> <td> <a href="euh.php"> User History</a><br> </tr> </td>
		 <tr> <td>  <a href="ere.php"> Reports</a><br></tr> </td>
		<tr> <td> <form method="post" action="adminlogin.php"><button type="submit" name="logout" > logout</button>  </form></tr> </td>
		</table>
		  
		  
		  </body>
	     <?php
		  }
		 
 else{
		  ?> <script>
		  alert("Wrong BOOOY!!") ;
		  </script> 
		  <?php 
         //header("Location:adminlogin.php");	
		 }   
 
		 
?>

     