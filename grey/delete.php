<?php
session_start();
 require("config.php");		 
		 if(isset($_SESSION['id'])){
		 $uid = $_SESSION['id'];
		 $page = $_GET['page'];
		 
		 if($page==1){
		 $id = $_GET['id'];
		 $sql=mysql_query("delete from bus where id ='$id'");
		 header("Location:ebus.php");}
		 
		  elseif($page==2){
		 $id = $_GET['id'];
		 $sql=mysql_query("delete from drivers where ID ='$id'");
		 header("Location:edriv.php");}
		   elseif($page==3){
		 $id = $_GET['id'];
		 $sql=mysql_query("delete from customers where id ='$id'");
		 header("Location:cust.php");}
		   elseif($page==4){
		 $id = $_GET['id'];
		 $sql=mysql_query("delete from destination where id ='$id'");
		 header("Location:edest.php");}
		  elseif($page==5){
		 $id = $_GET['id'];
		 $sql=mysql_query("delete from user_history where id ='$id'") ;
		 header("Location:euh.php");}
		 
		 }
		 ?> 