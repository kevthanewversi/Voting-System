<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>m:lab East Africa | App Testing log</title>
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

        error_reporting(0); // to stop errors being displayed on the website

        $errors=array(); // array to collect all the errors

        //to add number of testers in the in the db
        if(empty($_POST['number'])){
            $errors[]='you forgot to enter number of tester(s) in the testing room';    
        }
        else if ($_POST['number']<1 || $_POST['number']>2)
        {
            $errors[]='only a maximum of two people are allowed in the testing room';
        }
        else{
            $num = mysqli_real_escape_string($dbcon, trim($_POST['number']));
        }

        //to add email address in the in the db
        $eml = FALSE;
        if(empty($_POST['email'])){
            $errors[]='you forgot to enter you email address';
        }
        if(filter_var((trim($_POST['email'])),FILTER_VALIDATE_EMAIL))
        {
            $eml=mysqli_real_escape_string($dbcon,(trim($_POST['email'])));
        }
        else{
            $errors[]='you did not enter a valid email address';
        }

        //to add name in the in the db
        $name = trim($_POST['name']);
    $stripped = mysqli_real_escape_string($dbcon, strip_tags($name));
    $strlen = mb_strlen($stripped, 'utf-8');
    if ($strlen<1) {
        $errors[] = 'You forgot to enter your name(s)';
    } else {
    $nm = $stripped;
    }

    //to add amount in the in the db
    if(empty($_POST['amount'])){
            $errors[]='you forgot to enter amount'; 
        }
        else if ($_POST['amount']<200)
        {
            $errors[]='The minimun payable amount is 200';
        }
        else{
            $amt= mysqli_real_escape_string($dbcon, trim($_POST['amount']));
        }


        //to add time in the in the db and also do the time different calculation before entering in the db
    if(empty($_POST['time_one']))
    {
        $errors[]='you did not enter time in';
    }
    else{
        $tmin=mysqli_real_escape_string($dbcon, trim($_POST['time_one']));
    }
    if(empty($_POST['time_two']))
    {
        $errors[]='you did not enter time out';
    }
    else if($_POST['time_one']>$_POST['time_two'])
    {
        $errors[]='check your time out, time in can not be greater than time out';
    }
    else{
        $tmout=mysqli_real_escape_string($dbcon, trim($_POST['time_two']));
    }
    $timestart=strtotime($_POST['time_one']);
    $timeout = strtotime($_POST['time_two']);
    $timespend = round(abs($timeout - $timestart) / 60,2);

    //to add devices used in the in the db
    
        $device = trim($_POST['devices']);
    $stripped = mysqli_real_escape_string($dbcon, strip_tags($device));
    $strlen = mb_strlen($stripped, 'utf-8');
    if ($strlen<1) {
        $errors[] = 'You forgot to enter devices(s)';
    } else {
    $dvc = $stripped;
    }


    //to add app name in the in the db
        $app = trim($_POST['appname']);
    $stripped = mysqli_real_escape_string($dbcon, strip_tags($app));
    $strlen = mb_strlen($stripped, 'utf-8');
    if ($strlen<1) {
        $errors[] = 'You forgot to enter app name';
    } else {
    $appn = $stripped;
    }

    //to add  application description in the in the db
    
    $describe = trim($_POST['describe']);
    $stripped = mysqli_real_escape_string($dbcon, strip_tags($describe));
    $strlen = mb_strlen($stripped, 'utf-8');
    if ($strlen<1) {
        $errors[] = 'You forgot to describe your application';
    } else {
    $dsc = $stripped;
    }

    //to add comment  in the in the db
    
        $cmt = trim($_POST['comment']);
    $stripped = mysqli_real_escape_string($dbcon, strip_tags($cmt));
    $cmts = $stripped;

    //to add platfrom in the in the db
    $options = $_POST['platforms'];
    $serializedoptions = serialize ($options);
    $serializedoptions2 = unserialize ($serializedoptions);
     
     //to add category in the db
    $option = $_POST['category'];
    $serializedoption = serialize ($option);
    $serializedoption2 = unserialize ($serializedoption);
    
    
        //insert data in the database 
        if(empty($errors))
        {
            $q = "INSERT INTO testinglogs (id, tester_no, email, tester_name, time_in, time_out, devices, appname, describes, comments, time_spend, test_date, amount, platforms, category ) VALUES ('', '$num', '$eml', '$nm', '$tmin', '$tmout', '$dvc', '$appn','$dsc', '$cmts', '$timespend', NOW(), '$amt', '".implode(',',$serializedoptions2)."', '".implode(',',$serializedoption2)."')";
            $result = @mysqli_query($dbcon, $q);
            if($result){
            header("location: index.php");
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
		<h2><img src="_assets/img/jquery-logo.png" alt="pivot"></h2>
		<a href="#" class="jqm-navmenu-link ui-btn ui-btn-icon-notext ui-corner-all ui-icon-bars ui-nodisc-icon ui-alt-icon ui-btn-left">Menu</a>
	</div><!-- /header -->

	<div role="main" class="ui-content jqm-content">
<h4 class="ui-bar ui-bar-a ui-corner-all" align="center">App Testing log</h4>
    <?php //displays errors from users
        error_reporting(0);
        if($errors){
        echo '<h4 class="ui-bar ui-bar-a ui-corner-all" align="center">Error!</h4>
            <p>The following error(s) occurred:<br>';
            foreach ($errors as $msg) { // Print each error.
            echo " - $msg<br>\n";
        }
        echo '</p>
        <h4>Please click here to try again <input type="button" value="Reload Page" onClick="document.location.reload(true)"></h4><p><br></p>';
    }
        ?>
      <div class="ui-body ui-body-a ui-corner-all">


    <form action="index.php" method="post" > <!-- Place the form action header -->
         <label for="number-pattern">Number of Testers:</label>
         <input type="number" name="number" placeholder="Number of tester(s)" pattern="[0-9]*" id="number" value="<?php if (isset($_POST['number'])) echo $_POST['number']; ?>">
         <label for="email">Email:</label>
         <input type="email" name="email" id="email" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>" placeholder="Enter a valid email address">
         <label for="name">Testers' names:</label>
         <input type="text"  placeholder="If more than 1 tester separate names with comma" name="name" id="name" value="<?php if (isset($_POST['name'])) echo $_POST['name']; ?>">
         <label for="time_one">Time in:</label>
         <input type="time" name="time_one" id="time_one" value="<?php if (isset($_POST['time_one'])) echo $_POST['time_one']; ?>">
         <label for="time_two">Time out:</label>
         <input type="time" name="time_two" id="time_two" value="">
         <!--<label for="number-pattern">Time spent:</label>
         <input type="datetime" name="number" pattern="[0-9]*" id="time_total" value="">-->
         <label for="amount">Amount:</label>
         <input type="number" placeholder="Minimum amount is 200" name="amount"  id="amount" value="<?php if (isset($_POST['amount'])) echo $_POST['amount']; ?>">
         <label for="select-choice-1" class="select">Platforms Used:</label>
         <select name="platforms[]" id="plat" multiple="multiple" data-native-menu="false" data-icon="grid" data-iconpos="left" value="<?php if (isset($_POST['platforms'])) echo $_POST['platforms']; ?>">
            <option>Choose options:</option>
            <optgroup label="Platforms">

                <option value="android" selected="">Android</option>
                <option value="bada">Bada</option>
                <option value="blackberry">BlackBerry</option>
                <option value="iOS">iOS</option>
                <option value="J2ME" selected="">J2ME</option>
                <option value="SMS">SMS</option>
                <option value="webapp">Web App</option>
                <option value="windows">Windows</option>
            </optgroup>
            
        </select>

         <label for="device">Devices used:</label>
         <input type="text" placeholder="Separate different devices using a comma" name="devices" id="devices" value="<?php if (isset($_POST['devices'])) echo $_POST['devices']; ?>">
         <label for="apps">App name:</label>
         <input type="text" name="appname" id="appname" placeholder="Enter the name of your Application" value="<?php if (isset($_POST['appname'])) echo $_POST['appname']; ?>">
         <label for="describe">App description:</label>
         <input type="text" name="describe" id="describe" placeholder="Brief app description" value="<?php if (isset($_POST['describe'])) echo $_POST['describe']; ?>"> 

         <label for="select-choice-2" class="select">App Category:</label>
        <select name="category[]" id="category" multiple="multiple" data-native-menu="false" data-icon="grid" data-iconpos="left">
            <option>Choose options:</option>
            <optgroup label="Category">

                <option value="entertainment" selected="">Entertainment</option>
                <option value="utility">Utility</option>
                <option value="society">Society</option>
                <option value="finance">Finance</option>
                <option value="enterprise" selected="">Enterprise</option>
            </optgroup>
            
        </select>

         <label for="comment">Your Comments</label>
         <input type="text" name="comment" id="comment" placeholder="Kindly leave a comment here" value="<?php if (isset($_POST['comment'])) echo $_POST['comment']; ?>">
         <hr>
          <div class="ui-input-btn ui-btn ui-corner-all ui-shadow">Submit
          <input type="submit" data-enhanced="true" value="Input value">
    </div> 

</form><!-- end of form -->

      </div>
</div><!-- /page -->




<div data-role="footer" data-position="fixed" data-tap-toggle="false" class="jqm-footer">
	
  </div><!-- /footer -->

</body>
</html>
