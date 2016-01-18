<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Apps:Lab | NFC-Voting System</title>
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
        <h2><img src="_assets/img/jquery-logo.png" alt="pivot"></h2>
        <!--<a href="#" class="jqm-navmenu-link ui-btn ui-btn-icon-notext ui-corner-all ui-icon-bars ui-nodisc-icon ui-alt-icon ui-btn-left">Menu</a>-->
    </div><!-- /header -->

    <div role="main" class="ui-content jqm-content">
<h4 class="ui-bar ui-bar-a ui-corner-all" align="center">NFC VOTING SYSTEM, KENYA</h4>
<!--<DIV class="ui-body ui-body-a ui-corner-all"> TOTAL PAGE VISIT @ 7PM =><b> 750 </b> </DIV>-->
<div class="ui-body ui-body-a ui-corner-all">
    <p align="center">ADMIN LOGIN</p>
    <form action="home.php" method="post" > 
        <label>ENTER YOUR USERNAME*:</label>
         <input type="text" name="username" placeholder="Username" required="" pattern=" " id="username" value="<?php if (isset($_POST['username'])) echo $_POST['username']; ?>">
	<label>PASSWORD:</label>
         <input type="password" name="password" placeholder=" " required="" id="username" value="">
         
    <div class="ui-input-btn ui-btn ui-corner-all ui-shadow">LOGIN 
          <input type="submit" data-enhanced="true" value="Input value">
    </div>
    </form>
    

</div>
</div>
<div data-role="footer" data-position="fixed" data-tap-toggle="false" class="jqm-footer">
    <center><P align="center">Support: Call/Text/Whatsapp 0716460015 or 0704407117 <br />, More about the developers<a href="eldodev">DEV TEAM</a> </P></center>
  </div>


    </body>
    </html>