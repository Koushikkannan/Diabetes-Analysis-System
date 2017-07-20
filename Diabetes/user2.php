<html>


<div id="formsubmitbutton">
<!--<input type="submit" name="submitter" value="Submit Button" onclick="ButtonClicked()">-->
</div>


<script type="text/javascript">

function ButtonClicked()
{
   document.getElementById("formsubmitbutton").style.display = "none"; // to undisplay
   document.getElementById("buttonreplacement").style.display = ""; // to display
   return true;
}
var FirstLoading = true;
function RestoreSubmitButton()
{
   if( FirstLoading )
   {
      FirstLoading = false;
      return;
   }
   document.getElementById("formsubmitbutton").style.display = ""; // to display
   document.getElementById("buttonreplacement").style.display = "none"; // to undisplay
}
// To disable restoring submit button, disable or delete next line.
document.onfocus = RestoreSubmitButton;
</script>
<style type="text/css">

body {
	margin:0;
	
}
ul.topnav {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

ul.topnav li {float: left;}

ul.topnav li a {
  display: inline-block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  transition: 0.3s;
  font-size: 17px;
}

ul.topnav li a:hover {background-color: #555;}

ul.topnav li.icon {display: none;}

@media screen and (max-width:680px) {
  ul.topnav li:not(:first-child) {display: none;}
  ul.topnav li.icon {
    float: right;
    display: inline-block;
  }
}

@media screen and (max-width:680px) {
  ul.topnav.responsive {position: relative;}
  ul.topnav.responsive li.icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  ul.topnav.responsive li {
    float: none;
    display: inline;
  }
  ul.topnav.responsive li a {
    display: block;
    text-align: left;
  }
}

.wi{
	padding-left: 80px;
}
.set{
	width:30%;
}
.wd{
	color:black;
}
</style>
<body >
<ul class="topnav" id="myTopnav">
<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a>Diabetes Analysis system</a></li>
  <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a  href="login_new.php">Home</a></li>
  <li><a href="instructions1.php">Instructions</a></li>
  <li><a href="about1.php">About us</a></li>
  <li class="icon">
    <a href="javascript:void(0);" style="font-size:15px;" onclick="myFunction()">☰</a>
  </li>
</ul>
<center>


<!--<h3 align="center">DIABETES ANALYSIS</h3>-->
<fieldset class="set"><legend class="title"><h2>User login</h2></legend>   
<form method="POST" action="">
<table border="0" align="center" >
<tr>
<td>Username</td>
<td><input type="text" name="uname">
</td>
</tr>
<tr>
<td>Password</td>
<td><input type="password" name="pass"</td>
</tr>

<tr>

<td  class="wi" ><img src="captcha1.php" id="capt"></td>
</tr>
<tr>

<td>Enter verification code</td>
<td><input type="text" name="t1" maxlength="5"></td>
</tr>
<tr>
<!--<td><input type="checkbox" name="check" id="remember" value="remember"</td>Remember Password-->
</tr>
<tr>
<td></td><td align="left"><input type="submit" name="Login" value="login" onclick="ButtonClicked()"></td>
</tr>
<td><a href="registration1.php" class="wd" >New User</a></td>
<td><a href="reset5.php" class="wd" >Forget password</a></td>
</table>
</form>
</tr>
<div id="buttonreplacement" style="margin-left:30px; display:none;">
<img src="http://www.willmaster.com/images/preload.gif" alt="loading...">
</div>
</fieldset>

</center>
<?php
session_start();
include('db.php');
function phpAlert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}
if(isset($_POST['Login']))
{
$uname=$_POST['uname'];
$password=$_POST['pass'];
if($uname!=''&&$password!='')
{
$query10="SELECT  * from login where username ='".$uname."' and  password  = '".$password."'";
$result=mysqli_query($con,$query10);
$res=mysqli_fetch_assoc($result);
if ($res)
{ 
if($_POST['t1']!=''){
if($_POST['t1']==$_SESSION['my_captcha']){

  $_SESSION['username']=$uname;
	header('location:ask.php');
}
else{
	$msg="Enter correct verification code";
phpAlert(   $msg );
}
} else{
	$msg="Enter  verification code";
phpAlert(   $msg );
}
} 	 
else
{   
  $msg="Enter correct details";
phpAlert(   $msg );
}
}
else
{
$msg="Enter the details";
phpAlert(   $msg );	
}

}
?>

</body>
</html>