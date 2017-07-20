<html>
<head>
<style type="text/css">
.button5 {
    background-color: white;
    color: black;
    border: 2px solid #333;
}

.button5:hover {
    background-color: #555;
    color: white;
}
.error {color: #FF0000;}
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
</head>
<?php
session_start();
$he = $re =$fe =  "";
if(isset($_POST['submit']))
 {
 $h = $r=$f = "";
 $fh=0;
 $fr=0;
 $ff=0;

 function test_input($data)
 {    
 $data = trim($data);  
 $data = stripslashes($data);   
 $data = htmlspecialchars($data);
 return $data;
 }
 if ($_SERVER["REQUEST_METHOD"] == "POST")
 {  
if (empty($_POST["h"]))
 {  
$he = "Field should not be empty";   
 } 
  else
 {      
 $h =test_input($_POST["h"]);   
		 $fh=1;
	 } 
 if (empty($_POST["r"]))
 {  
$re = "Field should not be empty";   
 } 
  else
 {      
 $r =test_input($_POST["r"]);   
		 $fr=1;	 
 } 
 if (empty($_POST["f"]))
 {  
$fe = "Field should not be empty";   
 } 
  else
 {      
 $f =test_input($_POST["f"]);   
		 $ff=1;	 
 } 
 }
 $_SESSION['hb']=$h;
$_SESSION['rp'] = $r;
$_SESSION['fp']=$f;


 if($fh==1&& $fr==1&&$ff==1)
{
	header('location:/Diabetes/result1.php');
}
}
 
 
?>
<body>
<ul class="topnav" id="myTopnav">

<li><a><?php $name=$_SESSION['username'];
echo  "Welcome: ".$name."<br>";?></a></li>
  <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="active" href="ask.php">Home</a></li>
  <li><a href="instructions.php">Instructions</a></li>
  <li><a href="about.php">About us</a></li>
  <li><a href="user2.php">Logout</a></li>
  <li class="icon">
    <a href="javascript:void(0);" style="font-size:15px;" onclick="myFunction()">☰</a>
  </li>
</ul>
<form method="post" action="">
<div style="padding-left:350px">
  <h4>Screening Tests(Extremity Finder)</h4>
  <p>Screening test is a method to find out the extremity level of blood glucose level</p>
  <p>This method is common for all types of Diabetes</p>
  <p>Please enter your correct details from Lab report*</p>
  <h4>Diagnosis Tests</h4>
  <h4><u>Test1:HbA1c</u></h4>
   HbA1c Test Value:  <input type="text" name="h" size="20"  maxlength="8" pattern="\d+\.*\d*" /> %
   <span class="error"><?php echo $fe;?></span> 
  <h4><u>Test2:Random Plasma Glucose</u></h4>
   RPG Test Value:   &nbsp; &nbsp; <input type="text" name="r" size="20"  maxlength="8" pattern="\d+\.*\d*" /> mg/dl
   <span class="error"><?php echo $re;?></span> 
  <h4><u>Test3:Fasting Plasma Glucose </u></h4>
   FPG Test Value: &nbsp;&nbsp; &nbsp; <input type="text" name="f" size="20"  maxlength="8" pattern="\d+\.*\d*" /> mg/dl<br><br>
  <span class="error"> <?php echo $fe;?></span> 
 <div style="padding-left:150px"><input type="submit" class="button button5" name="submit" value="Submit"></div>
</div>
</form>
<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>


</body>
</html>