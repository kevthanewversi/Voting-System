<?php 
	function formatDate($val)
{
$arr = explode('-', $val);
return date('d M Y', mktime(0,0,0, $arr[1], $arr[2], $arr[0]));
}
	
/*function checkdates($bid_sdate,$bid_enddate)
{

			
			$smonth = substr("$bid_sdate",5,2);
			$sday = substr("$bid_sdate",8,2);
			$syear = substr("$bid_sdate",0,4);
			
			$emonth = substr("$bid_enddate",5,2);
			$eday = substr("$bid_enddate",8,2);
			$eyear = substr("$bid_enddate",0,4);
			
		//$bid_enddate="2009-02-28";
			$message='';
			$today=mktime();
			$bid_enddate=mktime(0,0,0,$emonth,$eday,$eyear)

}*/	

function history($a) { ?>
 <SCRIPT LANGUAGE="JavaScript">
<!-- hide this script tag's contents from old browsers

   history.go($a);      // Go back one.
//<!-- done hiding from old browsers -->
</script>
<?
}

function checkbid(){

 include ('includes/conf.php');
//select unique car ids from the carbids table
	$query = "SELECT DISTINCT cid FROM car_bids";
	$result = mysql_query($query) or die ("Error in query:" . mysql_error());
	$row=mysql_fetch_assoc($result);
	$NUM=mysql_num_rows($result);	

	
//loop for each car identified by unique id.	
	do{
		$cid = $row['cid'];
		$query1 = "SELECT make,model,bid_enddate,img_url,no_plate,year_of_manuf,colour,userid FROM car_details WHERE cid='$cid'";
		$view1 = mysql_query($query1, $conn) or die(mysql_error());
		$row1 = mysql_fetch_assoc($view1);
		$sid=$row1['userid'];
 		//echo $row['cid']." goes for ".$row1['bid_enddate'].'<br>';
 
		 //obtain today's date and bid end date
		 			
			$bid_enddate=$row1['bid_enddate'];
			$emonth = substr("$bid_enddate",5,2);
			$eday = substr("$bid_enddate",8,2);
			$eyear = substr("$bid_enddate",0,4);
			
		//$bid_enddate="2009-02-28";
			$message='';
			$today=mktime();
			$bid_enddate=mktime(0,0,0,$emonth,$eday,$eyear);
 
// determine if the date is valid

			$query2 = "SELECT MAX(max_bid) AS 'maxbid' FROM car_bids WHERE cid = '$cid'";
			$result2 = mysql_query($query2) or die ("Error in query: $query2. " . mysql_error());
			$row2=mysql_fetch_assoc($result2);

	//if car this car's auction is over.
	if($today > $bid_enddate) {
        
					$message='This car\'s auction is over.';
					// retrieve details of the winner-highest bidder.
					$query3=mysql_query("select userid from car_bids where cid= '$cid' and max_bid='$row2[maxbid]'");
					$user1 = mysql_fetch_assoc($query3);
					$userid=$user1['userid'];
					
					$userquery=mysql_query("select * from users where user_ID ='$userid'");
					if (!$userquery)  {
								die("Error in query: $userquery" . mysql_error());
							  } else{
							   $user = mysql_fetch_assoc($userquery);							 									  
							  }
					$name= $user['title'].''.$user['firstname'].' '.$user['lastname'];
					$mobile=$user['mobile'];
					$address= $user['address'];		
					$email=$user['email'];
					$current_bid=$row2['maxbid'];
					$updateSQL1 = "UPDATE car_details SET bid_status = 'Closed',current_bid='$current_bid' WHERE cid='$cid'";
					$updateSQL2 = "UPDATE car_bids SET bid_status = 'Closed',winner='$userid' WHERE cid='$cid'";
										
					if (!mysql_query($updateSQL1))  {
								die("Error in query: $updateSQL1" . mysql_error());
							  }	if (!mysql_query($updateSQL2))  {
								die("Error in query: $updateSQL2" . mysql_error());
							  }	
					//echo "Winning bid is ".number_format($row2['maxbid'],2).'<br><br>';	
					$message1= "Winning bid is <u><font color=\"#FF0000\">KShs.".number_format($row2['maxbid'],2)."</font></u>";
					
					//send email to seller and highest bidder(winner) 
					

					/*
					$to = $email;
					//define the subject of the email
					$subject = 'Winning Auction Notification';
					//define the message to be sent. Each line should be separated with \n
					$msg = "Congratulations!";
				//define the headers we want passed. Note that they are separated with \r\n
					$headers  = 'MIME-Version: 1.0' . "\r\n";
					$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

					$headers .= "From: admin@elitecars.com\r\nReply-To: admin@elitecars.com";
					//send the email
					ini_set('SMTP','localhost');
					ini_set('smtp_port',25);
					ini_set('sendmail_from','admin@elitecars.com');
					$mail_sent = mail( $to, $subject, $msg, $headers );
					//if the message is sent successfully print "Mail sent". Otherwise print "Mail failed" 
					echo $mail_sent ? "Mail sent" : "Mail failed";
					
					
					$squery=mysql_query("select * from users where user_ID ='$sid'");
					if (!$squery)  {
								die("Error in query: $squery" . mysql_error());
							  } else{
							   $suser = mysql_fetch_assoc($squery);	
							   	echo $suser['firstname'].' and last'.$suser['lastname'];					 									  
							  }
					$semail=$suser['email'];
					
					$to = $semail;
					//define the subject of the email
					$subject = 'Car Auction Notification';
					//define the message to be sent. Each line should be separated with \n
					$msg = "Congratulations!\n\nYou have emerged as the highest bidder for the following car:\n MAKE:".$row1['make']." ".$row1['model']."\nYEAR: ".$row1['year_of_manuf']."\nMILEAGE: ".$row1['mileage']."\n\nYour winning bid:".number_format($row2['maxbid'],2)."\n\nCongratulations with your successful participation!\n\nWe thank you for your participation, and will do our utmost to ensure a timely closing of the auction.\nKind regards,\nElite-Cars Auction.";
				//define the headers we want passed. Note that they are separated with \r\n
					$headers = "From: admin@elitecars.com\r\nReply-To: rutolinx@gmail.com";
					//send the email
					$mail_sent = @mail( $to, $subject, $msg, $headers );
					//if the message is sent successfully print "Mail sent". Otherwise print "Mail failed" 
					echo $mail_sent ? "Mail sent" : "Mail failed";*/
					
									
					
			 } 
			 //auction process is not over as of today.
			else if($today < $bid_enddate) { 
			// echo "This car is not up for auction yet.<br> The current maximum bid is ".number_format($row2['maxbid'],2)."<BR><BR>"; 			
				 $message="This car is not up for auction yet.<br> The current maximum bid is <u><font color=\"#990000\">KShs.".number_format($row2['maxbid'],2)."</font></u>";
				 $message1="";
				 $name= "--NO WINNER YET--";
				 $mobile="----";
				 $address= "----";
				 $email="----";
				 $updateSQL = "UPDATE car_details SET current_bid='$row2[maxbid]' WHERE cid='$cid' ";

 				 if (!mysql_query($updateSQL))  {
	  					die("Error in query: $updateSQL" . mysql_error());
					  }			
			}  		
} while ($row=mysql_fetch_assoc($result));

}
?>