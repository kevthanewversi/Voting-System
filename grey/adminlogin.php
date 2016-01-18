<?php
session_start();
require("config.php");?>



<link rel = "stylesheet" type="text/css" href="/grey/css/adminstyle.css">
<body>
<div id ="top">
<h3 align="center">BACKEND LOGIN</h3>
</div>
<div id = "stylized" class = "myform">
<form method="post" >
<label>username : </label><input class="input" type="text" name="admin" required placeholder="username" autocomplete="on"/>
<label>password  :</label>  <input class="input" type='password' name="pass" required placeholder="password" autocomplete="off"/> 
<button type="submit" onclick="validate()" name="login" > Login </button>
</form>
</div>
</body>
<?php
if(isset($_POST['login'])){

$name = $_POST['admin'];	
$pass = $_POST['pass']; 

  $sql = mysql_query("select * from admin where username ='$name' AND password='$pass'") or die (mysql_error());
  $num = mysql_num_rows($sql);

  if($num==0)
  {
	  ?>
      <script type="text/javascript">
	  alert("Wrong Log in details! Try again!");
	  //window.location="index.php";
	  </script>
      <?php
	
  }
  else
  {
	  $sql = mysql_query("select * from `admin` where username ='$name' AND password='$pass'") or die (mysql_error());;
      $r = mysql_fetch_array($sql);
      $id = $r['ID'];
	  $_SESSION['id'] = $id;
	  header("Location:admin.php?id=$id");
	
  }
}

?>
