<?php
$uid = $_GET['id'];
$sid = $_GET['seat_id'];
$bid = $_GET['bus_id'];
$bust = $bid."bus";
$delete = $_GET['did'];
require("config.php");

$query = mysql_query("delete from user_history where id = '$delete'");

echo $query1 = mysql_query("update $bust set status = 'Available' where id = '$sid'");
header("location:myticket.php?id=$uid");
?>