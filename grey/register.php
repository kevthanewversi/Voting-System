<?php
session_start();
require("config.php"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Registeration</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.4.2.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>  
<script type="text/javascript" src="js/Myriad_Pro_600.font.js"></script>
<script>
$(document).ready(function()
{

$(".sign_in").click(function()
{
$("#sign_box").show();
return false;
});
$("body #main").click(function()
{
$("#sign_box").hide();
return false;
});
});
</script>
<script>
function emailval(inputtext,alertmsg){
var emailexp = /^[w-.+]+@[a-zA-Z0-9.-]+.a[a-zA-Z0-9]{2,4}$/;
if(inputtext.value.match(emailexp)){
return true;}
else{
document.getElementById('p3').innerText =alertmsg;
inputtext.focus();
return false;
}
}

</script>
<style>
#sign_box
{
z-index:9999;
width:180px; 
background-color:#fff; 
border:solid 1px #5ea0c1; 
padding:18px 20px;
position:absolute;
display:none;
-moz-border-radius-topright:6px;
-moz-border-radius-bottomleft:6px;
-moz-border-radius-bottomright:6px;
-webkit-border-top-right-radius:6px;
-webkit-border-bottom-left-radius:6px;
-webkit-border-bottom-right-radius:6px;
}
.sign_in
{
background-color:#FFFFFF;
}
#main
{
height:500px;
}
</style>
<!--[if lt IE 9]>
	<script type="text/javascript" src="http://info.template-help.com/files/ie6_warning/ie6_script_other.js"></script>
	<script type="text/javascript" src="js/html5.js"></script>
<![endif]-->
</head>
<body id="page2">
<div class="extra">
	<div class="main">
<!-- header -->
		<header>
			<div class="wrapper">
				<h1><a href="index.php" id="logo">Greyhound buses</a></h1>
				<div class="right">
					<div class="wrapper">
					</div>
					<div class="wrapper">
						<nav>
							<ul id="top_nav">
								<li><a href="#">Register</a></li>
								<li><a href="#" class="sign_in">Log In</a></li>
								&nbsp	&nbsp
								<div id="sign_box">
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="LoginForm">
<div class="wrapper"><input class="input" type="text" name="user" required placeholder="username"  onclick="javascript:emailval()"autocomplete="on"/>Email : </div>
<div class="wrapper"><input class="input" type='password' name="pass" required placeholder="password" autocomplete="off"/>Password : </div>
<input class="button" type="submit" onclick="validate()" name="login" value="Login" />
</form></div>
							</ul>
						</nav>
					</div>	
				</div>
			</div>
			<nav>
				<ul id="menu">
					<li><a href="index.php" class="nav1">Home</a></li>
					<li><a href="About.html" class="nav2">About Us </a></li>
					<li><a href="Tours.php" class="nav3">Our Tours</a></li>
					<li class="end"><a href="Contacts.html" class="nav5">Contacts</a></li>
				</ul>
			</nav>
			<div class="text">
				<h2>Register with Us</h2>
				<p>With Registeration you can have a account on our database and will have many facilities. You can track your booking history with your account.</p>
				<p>Benifits of registeration - </p>
				<ul style="list-style-type:square;">
				<li>Track your Booking history</li>
				<li>Easy Pre Planned Tour Booking</li>
				<li>Easy way of cancellation and refund</li>
				</ul>
				<br />
			<p>Please Fill the registeration form below with full details</p>
			</div>   
			<div class="img">&nbsp;</div>
			<div class="img" style="margin-top:20px;">&nbsp;<img src="images/bus.jpg" alt=""></div>
		</header>
<!-- / header -->
<!-- content -->
		<section id="content">
		<article class="col2 pad_left1">
				<form id="ContactForm" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" name="f2">
					<div>
						<div class="wrapper"><input type="text" class="input" name="name" placeholder="name" required >Name:<br></div>
						<div class="wrapper">Gender: &nbsp;&nbsp;<input style="left:10px;" type="Radio" name="gen" value="Male" />Male <input type="radio" name="submit" value="Female" />Female</div>
						<div class="wrapper">Date of Birth:<select name="day" id="day" class="html-select" required>
<option value="" selected="selected" >Day</option>
<option value="01">01</option>
<option value="02">02</option>
<option value="03">03</option>
<option value="04">04</option>
<option value="05">05</option>
<option value="06">06</option>
<option value="07">07</option>
<option value="08">08</option>
<option value="09">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
</select><select name="month" id="month" class="html-select" required><option value="" selected="selected">Month</option>
								<option value="01">01</option>
<option value="02">02</option>
<option value="03">03</option>
<option value="04">04</option>
<option value="05">05</option>
<option value="06">06</option>
<option value="07">07</option>
<option value="08">08</option>
<option value="09">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option></select>
							<select name="year" id="year" class="html-select" required><option value="" selected="selected">Year</option>
								<option value="1910">1910</option>
<option value="1911">1911</option>
<option value="1912">1912</option>
<option value="1913">1913</option>
<option value="1914">1914</option>
<option value="1915">1915</option>
<option value="1916">1916</option>
<option value="1917">1917</option>
<option value="1918">1918</option>
<option value="1919">1919</option>
<option value="1920">1920</option>
<option value="1921">1921</option>
<option value="1922">1922</option>
<option value="1923">1923</option>
<option value="1924">1924</option>
<option value="1925">1925</option>
<option value="1926">1926</option>
<option value="1927">1927</option>
<option value="1928">1928</option>
<option value="1929">1929</option>
<option value="1930">1930</option>
<option value="1931">1931</option>
<option value="1932">1932</option>
<option value="1933">1933</option>
<option value="1934">1934</option>
<option value="1935">1935</option>
<option value="1936">1936</option>
<option value="1937">1937</option>
<option value="1938">1938</option>
<option value="1939">1939</option>
<option value="1940">1940</option>
<option value="1941">1941</option>
<option value="1942">1942</option>
<option value="1943">1943</option>
<option value="1944">1944</option>
<option value="1945">1945</option>
<option value="1946">1946</option>
<option value="1947">1947</option>
<option value="1948">1948</option>
<option value="1949">1949</option>
<option value="1950">1950</option>
<option value="1951">1951</option>
<option value="1952">1952</option>
<option value="1953">1953</option>
<option value="1954">1954</option>
<option value="1955">1955</option>
<option value="1956">1956</option>
<option value="1957">1957</option>
<option value="1958">1958</option>
<option value="1959">1959</option>
<option value="1960">1960</option>
<option value="1961">1961</option>
<option value="1962">1962</option>
<option value="1963">1963</option>
<option value="1964">1964</option>
<option value="1965">1965</option>
<option value="1966">1966</option>
<option value="1967">1967</option>
<option value="1968">1968</option>
<option value="1969">1969</option>
<option value="1970">1970</option>
<option value="1971">1971</option>
<option value="1972">1972</option>
<option value="1973">1973</option>
<option value="1974">1974</option>
<option value="1975">1975</option>
<option value="1976">1976</option>
<option value="1977">1977</option>
<option value="1978">1978</option>
<option value="1979">1979</option>
<option value="1980">1980</option>
<option value="1981">1981</option>
<option value="1982">1982</option>
<option value="1983">1983</option>
<option value="1984">1984</option>
<option value="1985">1985</option>
<option value="1986">1986</option>
<option value="1987">1987</option>
<option value="1988">1988</option>
<option value="1989">1989</option>
<option value="1990">1990</option>
<option value="1991">1991</option>
<option value="1992">1992</option>
<option value="1993">1993</option>
<option value="1994">1994</option>
<option value="1995">1995</option></select></div>
<div class="wrapper"><textarea  cols="1" rows="1" name="add" placeholder="address" required></textarea>Address:<br></div>
<div class="wrapper"><input type="text" class="input" name="pin" placeholder="pin code" required >Pin code :<br></div>
						<div class="wrapper"><input type="text" class="input" name="mo" placeholder="mobile no" required >Mobile no:<br></div>
						<div class="wrapper"><input type="text" class="input" name="email" placeholder="email" required >E-mail:<br></div>

						<div class="wrapper"><input type="password" class="input" name="pass" placeholder="email" required >Password:<br></div>

						<input type="submit" name="s1"  class="button"><input type="reset" class="button">
						</div>
				</form>
        	</article>		
			<?php
if(isset($_POST['s1'])){
	$name = $_POST['name'];
	@$gender = $_POST['gen'];
	$x = $_POST['day'];
	$y = $_POST['month'];
	$z = $_POST['year'];
	$dob = $z."-".$y."-".$x;
	$mobile = $_POST['mo'];
	$address = $_POST['add'];
	$pin_code = $_POST['pin'];
	$email = $_POST['email'];
	$password = sha1($_POST['pass']);
	$date = date('Y-m-d');
	
	if($name =='' || $gender =='' || $dob =='' || $mobile =='' || $address =='' || $pin_code =='' || $email =='' || $password =='' || $date =='' ){
	?>
    <script>
	alert('Please fill all the enteries');
	</script>
	<?php
	}
	
	$sql2 = mysql_query("select * from `customers` where email='$email'");
	if(mysql_num_rows($sql2)==0)
	{
	$a = "insert into `customers`(name,gender,dob,mobile,address,pin_code,email,password,reg_date)values('".$name."','".$gender."','".$dob."','".$mobile."','".$address."','".$pin_code."','".$email."','".$password."','".$date."')";
	$c= mysql_query($a);
	//$sql1 = mysql_query("CREATE TABLE $history(`id` INT NOT NULL AUTO_INCREMENT ,`from` VARCHAR( 120 ) NOT NULL ,`to` VARCHAR( 120 ) NOT NULL ,`journey_date` DATE NOT NULL ,`booking_date` DATE NOT NULL ,`seats_booked` INT NOT NULL ,`dept_time` TIME NOT NULL ,`distance` INT NOT NULL ,PRIMARY KEY ( `id` ) ) ENGINE = MYISAM ;");
	
	echo "You are Registered Successfully";
	header("Location:index.php");
	}
	
	else
	{
		?>
        <script>
		alert("This email id is already registered");
		</script>
        <?php
		
	}}
?>
		</section>
<!-- / content -->
	</div>
	<div class="block"></div>
</div>
<div class="body1">
	<div class="main">
<!-- footer -->
		<footer>
			<a rel="nofollow" href="" target="_blank"></a>&copy; 2014 Greyhound Buses<br>
			</footer>
<!-- / footer -->
	</div>
</div>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>