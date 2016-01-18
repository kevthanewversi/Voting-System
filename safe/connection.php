<?php
session_start();
if (!isset($_SESSION['phone_no']))
{  header("Location: viewpollls.php");
   exit();
}

echo 'tested in here';
?>
