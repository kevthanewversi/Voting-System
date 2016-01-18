<?php
session_start();
 require("config.php");		 
		 if(isset($_SESSION['id'])){
		 $uid = $_SESSION['id'];
		 $page = $_GET['page'];
		 
		 if($page==1){
		 $id = $_GET['id'];
		 
		 
		 ?> 
		

<link rel = "stylesheet" type="text/css" href="/grey/css/adminstyle.css">
		 

		 <form class="myform" method="post"> 
		 <div id = "stylize">
		 <div class="wrapper">
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
<input class="button" type="submit" value="Change" name="edit">
<a class="button" href="ebus.php?id=<?php echo $id; ?>">Back</a>
</form> </div>
<?php

if(isset($_POST['edit'])){
	$a = $_POST['a'];//collect info from the form above    /*update bus set  'bus_reg' = '$a', 'from_stop'='$b', 'to_stop'='$c', 'dept_time' = '$d', 'arrival_time' = '$e', 'distance' = '$f', 'fare' = '$g' where id ='$id'*/
	$b = $_POST['b'];
    $c = $_POST['c'];
    $d = $_POST['d'];
    $e = $_POST['e'];	
    $f = $_POST['f'];
    $g = $_POST['g'];	 
	
 	if($a!='' || $b!='' || $c!=''||$d!=''||$e!=''||$f!=''||$g!=''){
		$sql= mysql_query(" update bus set bus_reg='$a', from_stop='$b', to_stop='$c',dept_time='$d', arrival_time='$e',distance='$f',fare='$g' where ID='$id' ") or die(mysql_error());
		 ?>
			<script>
			alert("bus <?php echo $id; ?> edited");
			</script> <?php
	}

		 }}
		 
		elseif($page==2){ 
		$id = $_GET['id'];
	echo(' 
<link rel = "stylesheet" type="text/css" href="/grey/css/adminstyle.css">
		 <form class="myform" method="post"> 
		 <div id = "stylize">
		 <div class="wrapper">
driver name : <input class="input" type="text" name="a" required></div>
<div class="wrapper">
bus reg     :  <input class="input" type="text"  name="b" required ></div>
<div class="wrapper">
<button type="submit"  name="edit"> edit </button>
<a class="button" href="edriv.php">Back</a>  
</form> ');

if(isset($_POST['edit'])){
	$a = $_POST['a'];//collect info from the form above    
	$b = $_POST['b'];
 	 
	
 	if($a!='' || $b!=''){
		$sql= mysql_query("update  drivers set driver='$a', bus_reg='$b' where ID='$id' ")  or die(mysql_error());
		 ?>
		 <script>
			alert("driver <?php echo $id; ?> edited");
			window.location="edriv.php"
			</script> <?php
			
	}
	
	
		 }}

 elseif($page==3){ 
 $id = $_GET['id'];
		 ?> 
		 
<link rel = "stylesheet" type="text/css" href="/grey/css/adminstyle.css">
		 <form class="myform" method="post"> 
		 <div id = "stylize">
		 <div class="wrapper">
name : <input class="input" type="text" name="a" required></div>
<div class="wrapper">
dob     :  <input class="input" type="text"  name="b" required ></div>
<div class="wrapper">
address      :  <input class="input" type="text" name="c" required ></div>
 <div class="wrapper">
mobile :  <input class="input" type="text" name="d" required ></div>
<div class="wrapper">
pincode :  <input class="input" type="text" name="e" required ></div>
<div class="wrapper">
gender :  <input class="input" type="text" name="f"required > </div>
<div class="wrapper">
email    :  <input class="input" type="text" name="g" required ></div>
<div class="wrapper">
password   :  <input class="input" type="text" name="h" required ></div>
<button type="submit"  name="edit"> edit</button>
<a class="button" href="ecust.php">Back</a> </div> 
</form>
<?php 
if(isset($_POST['edit'])){
	$a = $_POST['a'];//collect info from the form above    
	$b = $_POST['b'];
    $c = $_POST['c'];
    $d = $_POST['d'];
    $e = $_POST['e'];	
    $f = $_POST['f'];
    $g = $_POST['g'];
    $h = $_POST['h'];	
	
 	if($a!='' || $b!='' || $c!=''||$d!=''||$e!=''||$f!=''||$g!=''||$h!=''){
		$sql= mysql_query("update customers set  name='$a', dob='$b',address='$c',mobile='$d',pin_code='$e',gender='$f',email='$g',password='$h' where ID='$id' ") or die(mysql_error());
		 ?>
		 <script>
			alert(" customer <?php echo $id; ?>edited ");
			window.location="ecust.php"
			</script> <?php
			
	}
	
	
		 }}

		  elseif($page==4){ 
		  $id = $_GET['id'];
		 ?> 
		 
		 <form class="myform" method="post"> 
		 <div id = "stylize">
destination : <input class="input" type="text" name="a" required></div>

<button type="submit"  name="edit"> edit </button>
<a class="button" href="edest.php">Back</a> </div>
</form>
<?php 
if(isset($_POST['addel'])){
	$a = $_POST['a'];//collect info from the form above    /*update bus set  'bus_reg' = '$a', 'from_stop'='$b', 'to_stop'='$c', 'dept_time' = '$d', 'arrival_time' = '$e', 'distance' = '$f', 'fare' = '$g' where id ='$id'*/
 
	
 	if($a!='' ){
		$sql= mysql_query("update  destinations set   destination ='$a' where ID='$id' ") or die(mysql_error());
		 ?>
		 <script>
			alert("destination <?php echo $id; ?> edited ");
			window.location="edest.php"
			</script> <?php
			
	}
	
	
		 }}

		  elseif($page==5){ 
		  $id = $_GET['id'];
		 ?> 
<link rel = "stylesheet" type="text/css" href="/grey/css/adminstyle.css">
		 <form class="myform" method="post"> 
		 <div id = "stylize">
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
<button type="submit"  name="edit"> edit</button>
<a class="button" href="euh.php">Back</a> </div>
</form>
<?php 
if(isset($_POST['edit'])){
	$a = $_POST['a'];//collect info from the form above    /*update bus set  'bus_reg' = '$a', 'from_stop'='$b', 'to_stop'='$c', 'dept_time' = '$d', 'arrival_time' = '$e', 'distance' = '$f', 'fare' = '$g' where id ='$id'*/
	$b = $_POST['b'];
    $c = $_POST['c'];
    $d = $_POST['d'];
    $e = $_POST['e'];	
    $f = $_POST['f'];
    $g = $_POST['g'];
   $h = $_POST['h'];
   $i = $_POST['i'];
   $j = $_POST['j'];
   $k = $_POST['k'];	
	
 	if($a!='' || $b!='' || $c!=''||$d!=''||$e!=''||$f!=''||$g!=''||$h!=''||$i!=''||$j!=''||$k!=''){
		$sql= mysql_query("update user_history set  user_id='$a',bus_id='$b',bus_reg='$c',from_stop='$d',to_stop='$e',journey_date='$f',booking_date='$g',seat_no_booked=$h',dept_time='$i',distance='$j','fare=$k' where ID='$id' ") or die(mysql_error());
		 ?>
		 <script>
			alert("user history entry <?php echo $id; ?> edited");
			window.location="euh.php";
			</script> <?php
			
	}
	
	
		 }}

		 
		 }?> 