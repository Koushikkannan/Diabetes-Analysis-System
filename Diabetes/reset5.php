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
body
{
		background: url("cpw2.jpg")no-repeat center center fixed;
		 -moz-background-size: cover;
    -webkit-background-size: cover;
    -o-background-size: cover;
    background-size: cover;	
		
}
body {margin:0;}
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
</style>
<body>
<ul class="topnav" id="myTopnav">
 <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a>Diabetes Analysis system</a></li>
<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="login_new.php">Home</a></li>
 <li><a  href="user2.php">Login</a></li>
   <li><a href="instructions1.php">Instructions</a></li>
  <li><a href="about1.php">About us</a></li>
 
   
  
  <li class="icon">
    <a href="javascript:void(0);" style="font-size:15px;" onclick="myFunction()">☰</a>
  </li>
</ul><br><br>
<form method="POST" action="">
<div style="padding-left:150px">
please enter your registered phone number:<br><br>
Ex.:91XXXXXXXXXX<br
</div>

	
<input type="number_format" name="contact" size="15" maxlength="13"> <br>
<input type="submit" name="Login1" value="submit" onclick="ButtonClicked()">
</form>

<?php

session_start(); 
include('db.php');
function phpAlert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}

if(isset($_POST['Login1']))
{
	$phone=$_POST['contact'];
	if($phone==''){
		 $msg="please enter your phone number";
phpAlert(   $msg );
	}else{


            $query10="SELECT  * from login where phone ='".$phone."'";
            $result=mysqli_query($con,$query10);
            $res=mysqli_fetch_assoc($result);

if($res)
{
	include ( "NexmoMessage.php" );

$string1="abcdefghijklmnopqrstuvwxyz";
$string2="1234567890";
$string=$string1.$string2;
$string=str_shuffle($string);
$rand=substr($string,0,8);
	/**
	 * To send a text message.
	 *
	 */

	// Step 1: Declare new NexmoMessage.
	$nexmo_sms = new NexmoMessage('6a0f45fd', '58631081f224c1ae');

	// Step 2: Use sendText( $to, $from, $message ) method to send a message. 
	$info = $nexmo_sms->sendText( $phone, 'kannan', $rand );

	// Step 3: Display an overview of the message
	echo $nexmo_sms->displayOverview($info);

	// Done!
	$query10="UPDATE login SET password='".$rand."' where phone ='".$phone."'";
	$result=mysqli_query($con,$query10);
	 if($result)
		   {
	   echo "<h2>Updated password Successfully</h2>";
	   			}
else 
{
	 echo "Update Failed";
			
			
}
		}
	else{
			 $msg="The number is not registered";
phpAlert(   $msg );
		}
		
	}
		}


?>
<div id="buttonreplacement" style="margin-left:30px; display:none;">
<img src="http://www.willmaster.com/images/preload.gif" alt="loading...">
</div>
	

	</body>
	</html>