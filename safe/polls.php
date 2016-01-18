
<?php
    
  
  include 'connect.php';
  session_start();
  if($_POST['submit']){
    
    $phone_no = addslashes($_POST['phone_no']);
    $mpesa = addslashes($_POST['jmek']);
    
    //$hash_pass = md5($password.'@^%^TYGHys23233');
    
    
    $query = mysql_query("select * from user where
    phone_no ='".$phone_no."' and mpesa='".$mpesa."' limit 1");
    
    $count_user = mysql_num_rows($query);
    
    if($count_user==1){
      
      
      $row = mysql_fetch_array($query);
      $_SESSION['id'] = $row['id'];
      header("location:vote.php ");
      
    }else{
      $error = ' error username and password Type .. '; 
    }
    
    
  }

?>
<?php echo $error?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Apps:Lab | thank you polls</title>
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet"  href="css/themes/default/jquery.mobile-1.4.0.min.css">
    <link rel="stylesheet" href="_assets/css/jqm-demos.css">
    <link href="_assets/css/FeedEk.css" rel="stylesheet" type="text/css" />
    <script src="js/jquery.js"></script>
    <script src="_assets/js/index.js"></script>
    <script src="js/jquery.mobile-1.4.0.min.js"></script>
</head>
<body>
    <div data-role="page" class="jqm-demos jqm-home" id="home">

    <div data-role="header" class="jqm-header">
        <h2><img src="_assets/img/jquery-logo.png" alt="pivot"><img src="_assets/img/moilogo.png" alt="pivot"></h2>
        <!--<a href="#" class="jqm-navmenu-link ui-btn ui-btn-icon-notext ui-corner-all ui-icon-bars ui-nodisc-icon ui-alt-icon ui-btn-left">Menu</a>-->
    </div><!-- /header -->

    <div role="main" class="ui-content jqm-content">
<h4 class="ui-bar ui-bar-a ui-corner-all" align="center">MUSO 2015/2016 ELECTIONS POLLS</h4>
<div class="ui-body ui-body-a ui-corner-all">
          <h4 class="ui-bar ui-bar-a ui-corner-all" align="center">Chairperson polls</h4>
</div>
<div class="ui-body ui-body-a ui-corner-all">
          <h4 class="ui-bar ui-bar-a ui-corner-all" align="center">Chairperson polls</h4>
</div>
<div class="ui-body ui-body-a ui-corner-all">
          <h4 class="ui-bar ui-bar-a ui-corner-all" align="center">Chairperson polls</h4>
</div>
<div class="ui-body ui-body-a ui-corner-all">
          <h4 class="ui-bar ui-bar-a ui-corner-all" align="center">Chairperson polls</h4>
</div>
<div class="ui-body ui-body-a ui-corner-all">
          <h4 class="ui-bar ui-bar-a ui-corner-all" align="center">Chairperson polls</h4>
</div>
<div class="ui-body ui-body-a ui-corner-all">
          <h4 class="ui-bar ui-bar-a ui-corner-all" align="center">Chairperson polls</h4>
</div>
<div class="ui-body ui-body-a ui-corner-all">
          <h4 class="ui-bar ui-bar-a ui-corner-all" align="center">Chairperson polls</h4>
</div>
<div class="ui-body ui-body-a ui-corner-all">
          <h4 class="ui-bar ui-bar-a ui-corner-all" align="center">Chairperson polls</h4>
</div>
<div class="ui-body ui-body-a ui-corner-all">
          <h4 class="ui-bar ui-bar-a ui-corner-all" align="center">Chairperson polls</h4>
</div>
<div class="ui-body ui-body-a ui-corner-all">
          <h4 class="ui-bar ui-bar-a ui-corner-all" align="center">Chairperson polls</h4>
</div>
</div>
<div data-role="footer" data-position="fixed" data-tap-toggle="false" class="jqm-footer">
    <P align="center">Support: Call/Text/Whatsapp 0716460015 or 0704407117 <br />View <a HREF="">polls</a> and read more about the apirants, their manifestos and MUSO ELECTION <a href="">NEWS</a> </P>
  </div>


    </body>
    </html>