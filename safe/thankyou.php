<!DOCTYPE html>
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
    <?php require('connect.php'); //connects to the dm 
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        //error_reporting(0); // to stop errors being displayed on the website

        $errors=array(); // array to collect all the errors
        /*if(empty($_POST['number'])){
            $errors[]='you forgot to enter number of tester(s) in the testing room';    
        }
        else if ($_POST['number']<1 || $_POST['number']>2)
        {
            $errors[]='only a maximum of two people are allowed in the testing room';
        }
        else{
            $num = mysqli_real_escape_string($dbcon, trim($_POST['number']));
        }*/
    $valitest = trim($_POST['chairperson']);
       if ($valitest != "test") 
       {        
        $chair = mysqli_real_escape_string($dbcon, trim($_POST['chairperson']));
       }
    else
       {
        $errors[]='You didn\'t choose your chairperson'; 
       }
//vc

        $valitest = trim($_POST['vc']);
       if ($valitest != "test") 
       {        
        $vc = mysqli_real_escape_string($dbcon, trim($_POST['vc']));
       }
    else
       {
        $errors[]='You didn\'t choose your vice chairperson'; 
       }

       $valitest = trim($_POST['secgen']);
       if ($valitest != "test") 
       {        
        $sec = mysqli_real_escape_string($dbcon, trim($_POST['secgen']));
       }
    else
       {
        $errors[]='You didn\'t choose your secretary general'; 
       }

       $valitest = trim($_POST['assec']);
       if ($valitest != "test") 
       {        
        $asssec = mysqli_real_escape_string($dbcon, trim($_POST['assec']));
       }
    else
       {
        $errors[]='You didn\'t choose your assistant secretary general'; 
       }

       $valitest = trim($_POST['health']);
       if ($valitest != "test") 
       {        
        $health = mysqli_real_escape_string($dbcon, trim($_POST['health']));
       }
    else
       {
        $errors[]='You didn\'t choose your health health director'; 
       }


       $valitest = trim($_POST['catering']);
       if ($valitest != "test") 
       {        
        $cat = mysqli_real_escape_string($dbcon, trim($_POST['catering']));
       }
    else
       {
        $errors[]='You didn\'t choose your catering director';
       }

       $valitest = trim($_POST['security']);
       if ($valitest != "test") 
       {        
        $acc = mysqli_real_escape_string($dbcon, trim($_POST['security']));
       }
    else
       {
        $errors[]='You didn\'t choose your security n acc director'; 
       }

       $valitest = trim($_POST['sports']);
       if ($valitest != "test") 
       {        
        $gam = mysqli_real_escape_string($dbcon, trim($_POST['sports']));
       }
    else
       {
        $errors[]='You didn\'t choose your sports director'; 
       }

       $valitest = trim($_POST['finance']);
       if ($valitest != "test") 
       {        
        $fin = mysqli_real_escape_string($dbcon, trim($_POST['finance']));
       }
    else
       {
        $errors[]='You didn\'t choose your finance director'; 
       }

       $valitest = trim($_POST['academics']);
       if ($valitest != "test") 
       {        
        $acad = mysqli_real_escape_string($dbcon, trim($_POST['academics']));
       }
    else
       {
        $errors[]='You didn\'t choose your academics director'; 
       }

       $valitest = trim($_POST['enta']);
       if ($valitest != "test") 
       {        
        $ent = mysqli_real_escape_string($dbcon, trim($_POST['enta']));
       }
    else
       {
        $errors[]='You didn\'t choose your entertainment director'; 
       }


    /*/to add  application description in the in the db
    
    $describe = trim($_POST['describe']);
    $stripped = mysqli_real_escape_string($dbcon, strip_tags($describe));
    $strlen = mb_strlen($stripped, 'utf-8');
    if ($strlen<1) {
        $errors[] = 'You forgot to describe your application';
    } else {
    $dsc = $stripped;
    }*/

    //to add comment  in the in the db
    
     /*   $cmt = trim($_POST['comment']);
    $stripped = mysqli_real_escape_string($dbcon, strip_tags($cmt));
    $cmts = $stripped;*/

    //to add platfrom in the in the db
    /*$options = $_POST['platforms'];
    $serializedoptions = serialize ($options);  value="<?php if (isset($_POST['name'])) echo $_POST['name']; ?>"
    $serializedoptions2 = unserialize ($serializedoptions); value="<?php if (isset($_POST['number'])) echo $_POST['number']; ?>
     
     //to add category in the db
    $option = $_POST['category'];
    $serializedoption = serialize ($option);
    $serializedoption2 = unserialize ($serializedoption);*/
    
    
        //insert data in the database 
        if(empty($errors))
        {
            $q = "INSERT INTO aspirants (chair, vice_chair, sec_gen, ass_sec_gen, health_director, catering, security_acc, sports_games, finance, academics, entertainment ) VALUES ( '$chair', '$vc', '$sec', '$asssec', '$health', '$cat', '$acc','$gam', '$fin', '$acad', '$ent')";
            $result = @mysqli_query($dbcon, $q);
            if($result){
            header("location: thankyou.php");
            exit();
        }
        else { // If it did not run
        // Message: error in the db
            echo '<h2>System Error</h2>
<p class="error">You could not enter data due to a system error. We apologize for any inconvenience.</p>'; 
        // Debugging message to check where the problem is in the database. uncomment to debugg:
        //echo '<p>' . mysqli_error($dbcon) . '<br><br>Query: ' . $q . '</p>';
        }
        mysqli_close($dbcon); // Close the database connection.
        exit();

        }
    }
     ?>




<div data-role="page" class="jqm-demos jqm-home" id="home">

    <div data-role="header" class="jqm-header">
        <h2><img src="_assets/img/jquery-logo.png" alt="pivot"><img src="_assets/img/moilogo.png" alt="pivot"></h2>
        <!--<a href="#" class="jqm-navmenu-link ui-btn ui-btn-icon-notext ui-corner-all ui-icon-bars ui-nodisc-icon ui-alt-icon ui-btn-left">Menu</a>-->
    </div><!-- /header -->

    <div role="main" class="ui-content jqm-content">
<h4 class="ui-bar ui-bar-a ui-corner-all" align="center">MUSO 2015/2016 ELECTIONS POLLS</h4>
    <?php //displays errors from users
        error_reporting(0);
        if($errors){
        echo '<h4 class="ui-bar ui-bar-a ui-corner-all" align="center">The following error(s) occurred!</h4>
            <br><p>';
            foreach ($errors as $msg) { // Print each error.
            echo " - $msg<br>\n";
        }
        echo '</p>
        <h4>Please click here to try again <input type="button" value="Reload Page" onClick=window.location.href="vote.php"></h4><p><br></p>';
    }

    else{
        
    
 echo '<div class="ui-body ui-body-a ui-corner-all"> 
    <h4 class="ui-bar ui-bar-a ui-corner-all" align="center">Your vote has been cast, thank you for voting</h4> 
    <div class="ui-body ui-body-a ui-corner-all"> <h4  align="center">FOLLOW THE INSTRUCTIONS BELOW ON HOW TO VIEW POLLS (TOTAL VOTES AND WINNING LEADERS)</h4> <h4 >  To view aspirants polls you will be required to pay 20 Kenyan Shillings<br /> The amount is paid via mpesa to this number 070xxxxxxx </h4><h4 align="center" ><u> Follow these steps;</u> </h4> 

    <p> &nbsp;&nbsp;&nbsp;&nbsp; 1. You have to agree to our terms and conditions<br /> &nbsp;&nbsp;&nbsp;&nbsp; 2. Go to Mpesa and select Mpesa menu<br /> &nbsp;&nbsp;&nbsp;&nbsp; 3. Select Send Money Option <br /> &nbsp;&nbsp;&nbsp;&nbsp; 4. Select Enter Phone No. Option <br /> &nbsp;&nbsp;&nbsp;&nbsp; 5. Enter the above Mpesa number (070xxxxxxx)<br /> &nbsp;&nbsp;&nbsp;&nbsp; 6. Enter Amount (20 shillings only) <br /> &nbsp;&nbsp;&nbsp;&nbsp; 7. Enter Your Mpesa Pin (Dont not share your Mpesa pin with anyone)<br /> &nbsp;&nbsp;&nbsp;&nbsp; 8. Send Money to 070xxxxxxx Ksh20, click ok to send <br /> &nbsp;&nbsp;&nbsp;&nbsp; 9. Wait for the Mpesa Message reference Message <br /> &nbsp;&nbsp;&nbsp;&nbsp; 10. Go to the Message From Mpesa and copy the Mpesa code (JF07LZWPXB)<br /> &nbsp;&nbsp;&nbsp;&nbsp; 11. Enter your phone number and the Mpesa code In the Text Area Below   </p>
    </div>
    <div class="ui-body ui-body-a ui-corner-all"> 
    <form action="polls.php" method="post" > 
        <label for="number-pattern"><h4>ENTER YOUR PHONE NUMBER*:</h4></label>
         <input type="number" name="phone_no" placeholder="ENTER YOUR PHONE NUMBER HERE" required="" pattern="[0-9]*" id="phone_no" >
        <label for="number-pattern"><h4>ENTER MPESA CODE*:</h4></label>
         <input type="text"  placeholder="ENTER MPESA CODE HERE" required="" name="jmek" id="jmek" >
          
    <div class="ui-input-btn ui-btn ui-corner-all ui-shadow">VIEW POLLS
          <input type="submit" data-enhanced="true" value="Input value">
    </div>
    </form>
</div>

</div>'; }?>
</div>
<div data-role="footer" data-position="fixed" data-tap-toggle="false" class="jqm-footer">
    <P align="center">Support: Call/Text/Whatsapp 0716460015 or 0704407117 <br />View <a HREF="">polls</a> and read more about the apirants, their manifestos and MUSO ELECTION <a href="">NEWS</a> </P>
  </div>


    </body>
    </html>