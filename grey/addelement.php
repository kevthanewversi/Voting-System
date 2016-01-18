<?php
session_start();
 require("config.php");		 
		 if(isset($_SESSION['id'])){
		 $uid = $_SESSION['id'];
		 $page = $_GET['page'];
		 
		 if($page==1){ 
		  
		echo( '
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
		 <form id="" method="post"> 
bus reg : <input class="input" type="text" name="a" required></div>
<div class="wrapper">
from     :  <input class="input" type="text"  name="b" required ></div>
<div class="wrapper">
 to       :  <input class="input" type="text" name="c" required ></div>
 <div class="wrapper">
depature time:  <input class="input" type="text" name="d" required ></div>
<div class="wrapper">
arrival time :  <input class="input" type="text" name="e" required ></div>
<div class="wrapper">
distance :  <input class="input" type="text" name="f"required > </div>
<div class="wrapper">
fare     :  <input class="input" type="text" name="g" required ></div>
<button type="submit"  name="addel"> add </button>
<a class="button" href="ebus.php">Back</a> 
</form>');
 
if(isset($_POST['addel'])){
	$a = isset($_POST['a']);//collect info from the form above    
	$b = isset($_POST['b']);
    $c =isset( $_POST['c']);
    $d = isset($_POST['d']);
    $e = isset($_POST['e']);	
    $f = isset($_POST['f']);
    $g = isset($_POST['g']);	 
	
 	if($a!='' || $b!='' || $c!=''||$d!=''||$e!=''||$f!=''||$g!=''){
		$sql= mysql_query("insert into bus values  (null,'$a','$b','$c','$d','$e','$f','$g') ") or die(mysql_error());
		 ?>
		 <script>
			alert("New element added");
			window.location="ebus.php";
			</script> <?php
			
	}
	
	
		 }}
		 
		 
		  elseif($page==2){ 
	echo('
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
		 <form id="" method="post"> 
driver name : <input class="input" type="text" name="a" required></div>
<div class="wrapper">
bus reg     :  <input class="input" type="text"  name="b" required ></div>
<div class="wrapper">
<button type="submit"  name="addel"> add </button>
<a class="button" href="edriv.php">Back</a>  
</form> ');

if(isset($_POST['addel'])){
	$a = isset($_POST['a']);//collect info from the form above   
	$b = isset($_POST['b']);
 	 
	
 	if($a!='' || $b!=''){
		$sql= mysql_query("insert into drivers values  (null,'$a','$b') ") or die(mysql_error());
		 ?>
		 <script>
			alert("New driver added");
			window.location="edriv.php"
			</script> <?php
			
	}
	
	
		 }}
		 
		  elseif($page==3){ 
		 ?> 
		 
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
		 <form id="" method="post"> 
name : <input class="input" type="text" name="a" required></div>
<div class="wrapper">
dob     :  <input class="input" type="text"  name="b" required ></div>
<div class="wrapper">
adress      :  <input class="input" type="text" name="c" required ></div>
 <div class="wrapper">
mobile :  <input class="input" type="text" name="d" required ></div>
<div class="wrapper">
pincode :  <input class="input" type="text" name="e" required ></div>
<div class="wrapper">
gender :  <input class="input" type="text" name="f"required > </div>
<div class="wrapper">
email    :  <input class="input" type="text" name="g" required ></div>
<button type="submit"  name="addel"> add </button>
<a class="button" href="ecust.php">Back</a> 
</form>
<?php 
if(isset($_POST['addel'])){
	$a = isset($_POST['a']);//collect info from the form above    /*update bus set  'bus_reg' = '$a', 'from_stop'='$b', 'to_stop'='$c', 'dept_time' = '$d', 'arrival_time' = '$e', 'distance' = '$f', 'fare' = '$g' where id ='$id'*/
	$b = isset($_POST['b']);
    $c = isset($_POST['c']);
    $e =isset( $_POST['e']);	
    $f = isset($_POST['f']);
    $g = isset($_POST['g']);	 
	
 	if($a!='' || $b!='' || $c!=''||$d!=''||$e!=''||$f!=''||$g!=''){
		$sql= mysql_query("insert into customers values  (null,'$a','$b','$c','$d','$e','$f','$g') ") or die(mysql_error());
		 ?>
		 <script>
			alert("New customer added");
			window.location="ecust.php"
			</script> <?php
			
	}
	
	
		 }}
		 
		  elseif($page==4){ 
		 ?> 
		 
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
		 <form id="" method="post"> 
destination : <input class="input" type="text" name="a" required></div>

<button type="submit"  name="addel" value="addel"> add </button>
<a class="button" href="edest.php">Back</a> 
</form>
<?php 
if(isset($_POST['addel'])){
	$a = isset($_POST['a']);//collect info from the form above    /*update bus set  'bus_reg' = '$a', 'from_stop'='$b', 'to_stop'='$c', 'dept_time' = '$d', 'arrival_time' = '$e', 'distance' = '$f', 'fare' = '$g' where id ='$id'*/
 
	
 	if($a!='' ){
		$sql= mysql_query("insert into destinations values  (null,'$a') ") or die(mysql_error());
		 ?>
		 <script>
			alert("New destination added");
			window.location="edest.php"
			</script> <?php
			
	}
	
	
		 }}
		 
		 
		  elseif($page==5){ 
		 ?> 
		 
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
		 <form id="" method="post"> 
		 <div class="wrapper">
user id	:  <input class="input" type="text" name="a" required ></div>
<div class="wrapper">
bus id :  <input class="input" type="text" name="b" required ></div>
<div class="wrapper">
bus reg : <input class="input" type="text" name="c" required></div>
<div class="wrapper">
from     :  <input class="input" type="text"  name="d" required ></div>
<div class="wrapper">
 to       :  <input class="input" type="text" name="e" required ></div>
 <div class="wrapper">
journey date :  <input class="input" type="text" name="f" required ></div>
<div class="wrapper">
booking date :  <input class="input" type="text" name="g" required ></div>
<div class="wrapper">
seat:  <input class="input" type="text" name="h" required ></div>
<div class="wrapper">
depature time :  <input class="input" type="text" name="i" required ></div>
<div class="wrapper">
distance :  <input class="input" type="text" name="j"required > </div>
<div class="wrapper">
fare     :  <input class="input" type="text" name="k" required ></div>
<button type="submit"  name="addel" value="addel"> add </button>
<a class="button" href="euh.php">Back</a> 
</form>
<?php 
if(isset($_POST['addel'])){
	$a = isset($_POST['a']);//collect info from the form above   
	$b = isset($_POST['b']);
    $c = isset($_POST['c']);
    $d = isset($_POST['d']);
    $e = isset($_POST['e']);	
    $f = isset($_POST['f']);
    $g = isset($_POST['g']);
   $h = isset($_POST['h']);
   $i = isset($_POST['i']);
   $j =isset( $_POST['j']);
   $k = isset($_POST['k']);	
	
 	if($a!='' || $b!='' || $c!=''||$d!=''||$e!=''||$f!=''||$g!=''||$h!=''||$i!=''||$j!=''||$k!=''){
		$sql= mysql_query("insert into bus values  (null,'$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k') ") or die(mysql_error());
		 ?>
		 <script>
			alert("New element added");
			window.location="euh.php";
			</script> <?php
			
	}
	
	
		 }}
		 }?> 