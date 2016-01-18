<?php
session_start();
if(isset($_SESSION['id']))
{
require("config.php");
$uid = $_SESSION['id'];
$bus = $_GET['bus'];
$seat = $_GET['seat'];
$bust = $bus.'bus';
$date = date("Y-m-d"); 
 $query = mysql_query("select * from bus where id ='$bus'");
	$re1 = mysql_fetch_array($query);
	
$bus_reg = $re1['bus_reg'];
$from = $re1['from_stop'];
$to = $re1['to_stop'];
$dept_time = $re1['dept_time'];
$arrival_time = $re1['arrival_time'];
$distance = $re1['distance'];
$fare = $re1['fare'];
$query1 = mysql_query("select  * from user_history where user_id='$uid' and bus_id='$bus'");
	$r = mysql_fetch_array($query1);
	$uhid = $r['id'];
	$rec =sprintf('%08d',$uhid);
echo(" <table width='900' height='200' align='center' background='/grey/images/receipt.jpg' padding='5px' >
<tr><td> <b>  <font size='4' face='Times New Roman'>  GREYHOUND BUS BOOKING PASS  </b> </font></td> </tr>
<tr> <td><b> <font size='4' face='Times New Roman'> Recpt. NO: $rec </b></font></td>

<tr> <td><strong> bus reg: <u> $bus_reg </strong></td>         <td> <strong>from:<u> $from </strong></td>         <td> <strong> to :<u> $to</td></tr>
<tr><td><strong>depature time: <u> $dept_time </td>         <td><strong>arrival time:<u> $arrival_time</td>        <td><strong>distance: <u>$distance </td></tr>
<tr><td><strong>fare: <u> $fare </td></tr> </strong> </table>") ;


}

?>
          <form align="bottom" method="post" action="javascript:window.print()"><button type="submit" name="print "  > print receipt</button>  </form>
		  <form align="bottom" method="post" action="Home.php?id=<?php echo $uid; ?>"><button type="submit" name="back"  > Back To My Profile</button>  </form>