<?php
session_start();
require("config.php");

if($_SESSION['login']){
          $uid = $_SESSION['login'];
		  
		  $query = mysql_query("SELECT * FROM 'ADMIN' WHERE ID = '$uid'");
		  $r = mysql_fetch_array($query);
		  $administrator=$r['username'];
		  //$email=$r['email'];
?>
?>
